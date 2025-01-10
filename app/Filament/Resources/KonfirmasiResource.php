<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonfirmasiResource\Pages;
use App\Filament\Resources\KonfirmasiResource\RelationManagers;
use App\Models\Konfirmasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;

class KonfirmasiResource extends Resource
{
    protected static ?string $model = Konfirmasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->exists('mahasiswa', 'nim') // Validasi bahwa NIM ada di tabel mahasiswa
                    ->placeholder('Masukkan NIM'), // Hapus searchable
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        9 => 'Belum Dikonfirmasi',
                        1 => 'Sudah Dikonfirmasi',
                        0 => 'Ditolak',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nim')->label('NIM')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('mahasiswa.namaPeserta')->label('Nama Mahasiswa')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(function ($state) {
                        $state = (int) $state;

                        return match ($state) {
                            9 => 'Belum Dikonfirmasi',
                            1 => 'Sudah Dikonfirmasi',
                            0 => 'Ditolak',
                            default => 'Tidak Diketahui',
                        };
                    })
                    ->badge()
                    ->color(function ($state) {
                        return match ((int) $state) {
                            9 => 'warning', // Warna kuning
                            1 => 'success', // Warna hijau
                            0 => 'danger',  // Warna merah
                            default => 'secondary', // Warna default
                        };
                    })
                    ->sortable()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('mahasiswa.piloting')->label('Piloting')->sortable(),
                Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
                Tables\Columns\TextColumn::make('updated_at')->label('Update')->sortable(),
            ])
            ->defaultSort('id')
            ->filters(self::getFilter())
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getFilter()
    {
        return [
            Tables\Filters\SelectFilter::make('mahasiswa.piloting')
                ->label('Piloting')
                ->options([
                    '1' => 'Piloting 1',
                    '2' => 'Piloting 2',
                    '3' => 'Piloting 3',
                ])
                ->searchable()
                ->default('1')
                ->placeholder('Pilih Piloting')
                ->attribute('mahasiswa.piloting')
                ->query(function ($query, $data) {

                        $query->whereHas('mahasiswa', function ($q) use ($data) {
                            $q->where('piloting', $data); // Filter berdasarkan nilai piloting
                        });

                }),


            Tables\Filters\SelectFilter::make('status')
                ->label('Status')
                ->options(
                    [
                        9 => 'Belum Dikonfirmasi',
                        1 => 'Sudah Dikonfirmasi',
                        0 => 'Ditolak',
                        // default => 'Tidak Diketahui',
                    ]
                )
                ->default('9')
                ->searchable()
                ->placeholder('Pilih Status')
                ->attribute('status'),
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKonfirmasis::route('/'),
            'create' => Pages\CreateKonfirmasi::route('/create'),
            'edit' => Pages\EditKonfirmasi::route('/{record}/edit'),
        ];
    }
}
