<?php

namespace App\Filament\Resources\MahasiswaResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class KonfirmasisRelationManager extends RelationManager
{
    protected static string $relationship = 'konfirmasis'; // Nama relasi di model Mahasiswa

    protected static ?string $recordTitleAttribute = 'nim';

    public function table(Tables\Table $table): Tables\Table // HAPUS static di sini
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
                Tables\Columns\TextColumn::make('updated_at')->label('Update'),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
