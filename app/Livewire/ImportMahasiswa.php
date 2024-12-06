<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Forms;
use Filament\Notifications\Notification;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImportMahasiswa extends Component
{
    use WithFileUploads;

    public $import_file;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('import_file')
                ->label('Pilih File Excel')
                ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'])
                ->maxSize(10240) // 10MB
                ->helperText('File harus bertipe Excel (.xlsx, .xls)')
                ->required()
        ];
    }

    public function importData()
    {
        if ($this->import_file) {
            try {
                // Simpan file sementara
                $filePath = $this->import_file->store('imports');

                // Logic untuk memproses file
                // Misalnya, kita bisa membaca file Excel di sini dan memproses datanya

                Notification::make()->success('File berhasil diunggah dan diproses')->send();
            } catch (\Exception $e) {
                Notification::make()->danger('Gagal memproses file: ' . $e->getMessage())->send();
            }
        }
    }

    public function render()
    {
        return view('livewire.import-mahasiswa');
    }
}
