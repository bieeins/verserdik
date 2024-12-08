<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use App\Filament\Resources\MahasiswaResource;
use App\Imports\MahasiswaImport;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Modal\Modal;
use Filament\Forms\Components\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\Livewire;
use Maatwebsite\Excel\Facades\Excel;

class ListMahasiswas extends ListRecords
{
    protected static string $resource = MahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('import')
                ->label('Import Mahasiswa')
                ->icon('heroicon-o-arrow-up') // Icon upload
                ->form([
                    FileUpload::make('file')
                        ->label('Pilih File Excel')
                        ->acceptedFileTypes([
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            'application/vnd.ms-excel',
                        ])
                        ->directory('temp-uploads') // Tempat penyimpanan file sementara
                        ->maxSize(10240) // 10MB
                        ->required()
                        ->validationMessages([
                            'required' => 'Anda harus memilih file Excel untuk diunggah.',
                            'mimes' => 'File yang diunggah harus berupa file Excel (.xls atau .xlsx).',
                            'max' => 'Ukuran file tidak boleh lebih dari 10MB.',
                        ]),
                    View::make('filament.components.import-notice'),
                    // Menambahkan tautan unduh file contoh
                    View::make('filament.components.download-example'),
                ])
                ->action(function (array $data) {
                    // Log::info('Data yang diterima: ', $data); // Log data yang diterima

                    // Mengecek apakah ada file yang diterima
                    $uploadedFile = $data['file'] ?? null;

                    if ($uploadedFile) {
                        // Mendapatkan path file yang diterima
                        $filePath = Storage::disk('public')->path($uploadedFile); // Pastikan menggunakan disk 'public'
                        // Log::info('File yang diterima: ', ['path' => $filePath]);

                        $rows = Excel::toCollection(null, $filePath)[0] ?? [];
                        Log::info('File yang diterima memiliki row: ', ['Rows' => count($rows)]);

                        if (count($rows) > 500) {
                            if (Storage::disk('public')->exists('temp-uploads/' . basename($uploadedFile))) {
                                // Log::info('Menghapus file: ', ['path' => $filePath]);

                                // Menghapus file
                                Storage::disk('public')->delete('temp-uploads/' . basename($uploadedFile));
                                Log::info('File berhasil dihapus: ', ['path' => $filePath]);
                            } else {
                                Log::warning('File tidak ditemukan untuk dihapus: ', ['path' => $filePath]);
                            }
                            Notification::make()
                                ->title('Peringatan')
                                ->body('<div class="text-warning fw-bold"><i class="heroicon-o-information-circle"></i> File yang diunggah memiliki <strong>' . count($rows) . ' baris.</strong> Harap periksa file Anda dan coba lagi.</div>')
                                ->danger()
                                ->send();
                            return;
                        }

                        // Memastikan file ada di folder public/temp-uploads
                        if (Storage::disk('public')->exists('temp-uploads/' . basename($uploadedFile))) {
                            // File ditemukan, lanjutkan dengan proses file, misalnya membaca Excel
                            try {
                                // Menggunakan Laravel Excel untuk mengimpor file
                                Excel::import(new MahasiswaImport, $filePath);

                                // Menghapus file setelah proses impor selesai
                                if (Storage::disk('public')->exists('temp-uploads/' . basename($uploadedFile))) {
                                    // Log::info('Menghapus file: ', ['path' => $filePath]);

                                    // Menghapus file
                                    Storage::disk('public')->delete('temp-uploads/' . basename($uploadedFile));
                                    Log::info('File berhasil dihapus: ', ['path' => $filePath]);
                                } else {
                                    Log::warning('File tidak ditemukan untuk dihapus: ', ['path' => $filePath]);
                                }

                                Notification::make()
                                    ->title('Sukses')
                                    ->body('Data mahasiswa berhasil diimpor.')
                                    ->success()
                                    ->send();
                            } catch (\Exception $e) {
                                Notification::make()
                                    ->title('Gagal')
                                    ->body('Terjadi kesalahan saat memproses file: ' . $e->getMessage())
                                    ->danger()
                                    ->send();
                            } finally {
                                Storage::delete($filePath);
                            }
                            //         }
                        } else {
                            Log::error('File tidak ditemukan atau tidak valid.');

                            Notification::make()
                                ->title('Gagal')
                                ->body('File tidak valid atau tidak dapat ditemukan.')
                                ->danger()
                                ->send();
                        }
                    } else {
                        // Log jika file tidak diterima
                        Log::error('Tidak ada file yang diunggah.');

                        Notification::make()
                            ->title('Gagal')
                            ->body('Tidak ada file yang diunggah atau file tidak valid.')
                            ->danger()
                            ->send();
                    }
                })
            // ->action(function (array $data) {
            //     Log::info('Data yang diterima:', ['data' => $data]);

            //     $uploadedFile = $data['file'] ?? null;

            //     if ($uploadedFile instanceof TemporaryUploadedFile) {
            //         Log::info('File ditemukan:', ['file' => $uploadedFile->getFilename()]);

            //         $filePath = $uploadedFile->store('imports');
            //         Log::info('File berhasil disimpan:', ['path' => $filePath]);

            //         try {
            //             Excel::import(new MahasiswaImport, $filePath);

            //             Notification::make()
            //                 ->title('Sukses')
            //                 ->body('Data mahasiswa berhasil diimpor.')
            //                 ->success()
            //                 ->send();
            //         } catch (\Exception $e) {
            //             Notification::make()
            //                 ->title('Gagal')
            //                 ->body('Kesalahan saat mengimpor data: ' . $e->getMessage())
            //                 ->danger()
            //                 ->send();
            //         } finally {
            //             Storage::delete($filePath);
            //         }
            //     } else {
            //         Notification::make()
            //             ->title('Gagal')
            //             ->body('Tidak ada file yang diunggah atau file tidak valid.')
            //             ->danger()
            //             ->send();
            //     }
            // }),
            // ->action(function (array $data) {
            //     $file = $data['file'] ?? null;

            //     if ($file instanceof TemporaryUploadedFile) {
            //         $path = $file->store('imports');

            //         try {
            //             // Proses file Excel
            //             // Misalnya, gunakan library seperti PhpSpreadsheet untuk membaca file dan mengimpor data

            //             Notification::make()
            //                 ->title('Sukses')
            //                 ->body('File berhasil diimpor.')
            //                 ->success()
            //                 ->send();
            //         } catch (\Exception $e) {
            //             Notification::make()
            //                 ->title('Gagal')
            //                 ->body('Terjadi kesalahan saat memproses file: ' . $e->getMessage())
            //                 ->danger()
            //                 ->send();
            //         }
            //     }
            // })
            // ->form([
            //     FileUpload::make('file')
            //         ->label('Pilih File Excel')
            //         ->acceptedFileTypes([
            //             'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            //             'application/vnd.ms-excel',
            //         ])
            //         ->maxSize(10240) // 10MB
            //         ->required(),
            // ])
            // ->modalHeading('Import Data Mahasiswa') // Judul modal
            // ->modalWidth('lg'), // Lebar modal
            // Actions\Action::make('import')
            //     ->label('Import Data')
            //     ->icon('heroicon-o-arrow-up') // Ikon untuk import
            //     ->modalHeading('Import Data Mahasiswa') // Judul modal
            //     ->color('primary')
            //     ->modalContent(function () {
            //         return FileUpload::make('import_file')
            //             ->label('Pilih File Excel')
            //             ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'])
            //             ->maxSize(10240); // 10MB
            //     })
            //     ->action(function () {
            //         // Logic to process the file (proses file yang di-upload)
            //         // Pastikan Anda menambahkan logic untuk memproses file di sini
            //         Livewire::emit('openImportModal');
            //     }),
        ];
    }
}
