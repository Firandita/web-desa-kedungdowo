<?php

namespace App\Filament\Resources\LayananSurats\Pages;

use App\Filament\Resources\LayananSurats\LayananSuratResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLayananSurat extends EditRecord
{
    protected static string $resource = LayananSuratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
