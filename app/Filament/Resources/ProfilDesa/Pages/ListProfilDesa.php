<?php

namespace App\Filament\Resources\ProfilDesa\Pages;

use App\Filament\Resources\ProfilDesa\ProfilDesaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfilDesa extends ListRecords
{
    protected static string $resource = ProfilDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
