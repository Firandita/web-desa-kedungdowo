<?php

namespace App\Filament\Resources\ProfilDesa\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProfilDesaTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jumlah_penduduk')->label('Penduduk')->sortable(),
                TextColumn::make('jumlah_kk')->label('KK')->sortable(),
                TextColumn::make('jumlah_laki_laki')->label('Laki-Laki'),
                TextColumn::make('jumlah_perempuan')->label('Perempuan'),
                TextColumn::make('jumlah_dusun')->label('Dusun'),
                TextColumn::make('jumlah_ternak_sapi')->label('Ternak Sapi'),
                TextColumn::make('updated_at')->label('Terakhir Diubah')->dateTime('d M Y, H:i'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
