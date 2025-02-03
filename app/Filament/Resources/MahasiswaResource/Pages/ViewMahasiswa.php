<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use App\Filament\Resources\MahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMahasiswa extends ViewRecord
{
    protected static string $resource = MahasiswaResource::class;

    // protected function getActions(): array
    // {
    //     return [
    //         Actions\Action::make('linkFinalSertifikat')
    //             ->label('Lihat Sertifikat')
    //             ->url($this->record->linkFinalSertifikat)
    //             ->target('_blank'),
    //     ];
    // }

    // public function getLinkFinalSertifikatAttribute()
    // {
    //     return $this->record->linkFinalSertifikat;
    // }
}
