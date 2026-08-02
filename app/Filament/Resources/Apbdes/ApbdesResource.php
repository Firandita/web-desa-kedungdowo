<?php

namespace App\Filament\Resources\Apbdes;

use App\Filament\Resources\Apbdes\Pages\CreateApbdes;
use App\Filament\Resources\Apbdes\Pages\EditApbdes;
use App\Filament\Resources\Apbdes\Pages\ListApbdes;
use App\Filament\Resources\Apbdes\Schemas\ApbdesForm;
use App\Filament\Resources\Apbdes\Tables\ApbdesTable;
use App\Models\Apbdes as ApbdesModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ApbdesResource extends Resource
{
    protected static ?string $model = ApbdesModel::class;

    protected static ?string $navigationLabel = 'APBDes';

    protected static ?string $modelLabel = 'APBDes';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBanknotes;

    public static function form(Schema $schema): Schema
    {
        return ApbdesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApbdesTable::configure($table);
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
            'index' => ListApbdes::route('/'),
            'create' => CreateApbdes::route('/create'),
            'edit' => EditApbdes::route('/{record}/edit'),
        ];
    }
}
