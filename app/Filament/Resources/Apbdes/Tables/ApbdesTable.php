<?php

namespace App\Filament\Resources\Apbdes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ApbdesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun')
                    ->sortable(),
                TextColumn::make('pendapatan')
                    ->money('IDR')
                    ->sortable(),
                TextColumn::make('belanja')
                    ->money('IDR')
                    ->sortable(),
                TextColumn::make('realisasiBidang_count')
                    ->counts('realisasiBidang')
                    ->label('Jumlah Bidang'),
            ])
            ->defaultSort('tahun', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
