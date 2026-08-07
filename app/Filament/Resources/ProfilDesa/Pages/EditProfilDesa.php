<?php

namespace App\Filament\Resources\ProfilDesa\Pages;

use App\Filament\Resources\ProfilDesa\ProfilDesaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfilDesa extends EditRecord
{
    protected static string $resource = ProfilDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
