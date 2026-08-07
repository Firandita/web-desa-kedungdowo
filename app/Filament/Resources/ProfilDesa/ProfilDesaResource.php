<?php

namespace App\Filament\Resources\ProfilDesa;

use App\Filament\Resources\ProfilDesa\Pages\CreateProfilDesa;
use App\Filament\Resources\ProfilDesa\Pages\EditProfilDesa;
use App\Filament\Resources\ProfilDesa\Pages\ListProfilDesa;
use App\Filament\Resources\ProfilDesa\Schemas\ProfilDesaForm;
use App\Filament\Resources\ProfilDesa\Tables\ProfilDesaTable;
use App\Models\ProfilDesa as ProfilDesaModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfilDesaResource extends Resource
{
    protected static ?string $model = ProfilDesaModel::class;

    protected static ?string $navigationLabel = 'Statistik Desa';

    protected static ?string $modelLabel = 'Statistik Desa';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    public static function form(Schema $schema): Schema
    {
        return ProfilDesaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfilDesaTable::configure($table);
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
            'index' => ListProfilDesa::route('/'),
            'create' => CreateProfilDesa::route('/create'),
            'edit' => EditProfilDesa::route('/{record}/edit'),
        ];
    }
}
