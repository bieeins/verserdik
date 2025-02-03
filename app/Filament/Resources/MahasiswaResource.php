<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('noUkg')->label('No UKG')->required(),
                Forms\Components\TextInput::make('namaPeserta')->label('Nama Peserta')->required(),
                Forms\Components\TextInput::make('nik')->label('NIK')->required(),
                Forms\Components\TextInput::make('nim')->label('NIM')->required(),
                Forms\Components\TextInput::make('nomorSertifikatPendidik')->label('Nomor Sertifikat Pendidik'),
                Forms\Components\TextInput::make('tempatLahir')->label('Tempat Lahir'),
                Forms\Components\DatePicker::make('tanggalLahir')->label('Tanggal Lahir'),
                Forms\Components\DatePicker::make('tanggalSertifikat')->label('Tanggal Sertifikat'),
                Forms\Components\TextInput::make('urlFoto')->label('URL Foto'),
                Forms\Components\TextInput::make('qrCode')->label('QR Code'),
                Forms\Components\TextInput::make('barcode')->label('Bar Code'),
                Forms\Components\TextInput::make('linkPreviewSertifikat')->label('Link Preview Sertifikat'),
                Forms\Components\TextInput::make('linkFinalSertifikat')->label('Link Final Sertifikat'),
                Forms\Components\TextInput::make('nikPddikti')->label('NIK PDDIKTI'),
                Forms\Components\TextInput::make('nimPddikti')->label('NIM PDDIKTI'),
                Forms\Components\TextInput::make('namaBidangStudi')->label('Nama Bidang Studi'),
                Forms\Components\TextInput::make('kodeBidangStudi')->label('Kode Bidang Studi'),
                Forms\Components\TextInput::make('piloting')->label('Piloting'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('noUkg')->label('No UKG')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('namaPeserta')->label('Nama Peserta')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nik')->label('NIK')->searchable(),
                Tables\Columns\TextColumn::make('nim')->label('NIM')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nomorSertifikatPendidik')->label('Nomor Sertifikat')->sortable(),
                Tables\Columns\TextColumn::make('tanggalSertifikat')->label('Tanggal Sertifikat')->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->label('Update')->sortable(),
                // Tables\Columns\TextColumn::make('tempatLahir')->label('Tempat Lahir'),
                // Tables\Columns\TextColumn::make('tanggalLahir')->label('Tanggal Lahir'),
                // Tables\Columns\TextColumn::make('urlFoto')->label('URL Foto'),
                // Tables\Columns\TextColumn::make('qrCode')->label('QR Code'),
                // Tables\Columns\TextColumn::make('linkPreviewSertifikat')->label('Link Preview Sertifikat'),
                // Tables\Columns\TextColumn::make('nikPddikti')->label('NIK PDDIKTI'),
                // Tables\Columns\TextColumn::make('nimPddikti')->label('NIM PDDIKTI'),
                // Tables\Columns\TextColumn::make('namaBidangStudi')->label('Nama Bidang Studi'),
                // Tables\Columns\TextColumn::make('kodeBidangStudi')->label('Kode Bidang Studi'),
            ])
            ->defaultSort('id')
            ->filters(self::getFilter())
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                // Action::make('import')
                //     ->label('Import Data')
                //     // ->icon('heroicon-o-upload')
                //     ->color('primary')
                //     ->action(function () {
                //         // Define the action to handle file upload for import
                //         return view('filament.resources.mahasiswa.import');
                //     }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ])

                // ])->headerActions([
                //     Action::make('import')
                //         ->label('Import Mahasiswa')
                //         // ->icon('heroicon-o-upload')
                //         ->color('primary')
                //         ->action(function () {
                //             // Logic for import
                //         })
            ]);
    }

    public static function getFilter()
    {
        return [
            Tables\Filters\SelectFilter::make('piloting')
                ->label('Piloting')
                ->options(
                    [
                        '1' => 'Piloting 1',
                        '2' => 'Piloting 2',
                        '3' => 'Piloting 3',
                    ]
                )
                ->searchable()
                ->placeholder('Pilih Piloting')
                ->attribute('piloting'),


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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'view' => Pages\ViewMahasiswa::route('/{record}'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
