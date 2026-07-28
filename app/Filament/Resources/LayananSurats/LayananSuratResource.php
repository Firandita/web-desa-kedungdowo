<?php

namespace App\Filament\Resources\LayananSurats;

use App\Filament\Resources\LayananSurats\Pages\CreateLayananSurat;
use App\Filament\Resources\LayananSurats\Pages\EditLayananSurat;
use App\Filament\Resources\LayananSurats\Pages\ListLayananSurats;
use App\Filament\Resources\LayananSurats\Schemas\LayananSuratForm;
use App\Filament\Resources\LayananSurats\Tables\LayananSuratsTable;
use App\Models\LayananSurat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LayananSuratResource extends Resource
{
    protected static ?string $model = LayananSurat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LayananSuratForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LayananSuratsTable::configure($table);
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
            'index' => ListLayananSurats::route('/'),
            'create' => CreateLayananSurat::route('/create'),
            'edit' => EditLayananSurat::route('/{record}/edit'),
        ];
    }
}
