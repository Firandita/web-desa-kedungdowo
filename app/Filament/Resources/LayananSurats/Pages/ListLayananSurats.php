<?php

namespace App\Filament\Resources\LayananSurats\Pages;

use App\Filament\Resources\LayananSurats\LayananSuratResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLayananSurats extends ListRecords
{
    protected static string $resource = LayananSuratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
