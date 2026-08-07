<?php

namespace App\Filament\Resources\Galeris\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class GalerisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->label('Foto Kegiatan')
                    ->disk('public')
                    ->height(48)
                    ->width(72)
                    ->extraImgAttributes(['class' => 'rounded-lg object-cover shadow-xs']),

                TextColumn::make('judul')
                    ->label('Judul Dokumentasi')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(45)
                    ->placeholder('(Tanpa judul)'),

                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match (strtolower($state)) {
                        'pembangunan' => 'warning',
                        'pemberdayaan' => 'success',
                        'kesehatan' => 'info',
                        'pemerintahan' => 'primary',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('lokasi')
                    ->label('Lokasi / Dusun')
                    ->icon('heroicon-o-map-pin')
                    ->sortable(),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->icon('heroicon-o-calendar')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('kategori')
                    ->options([
                        'pembangunan' => 'Pembangunan',
                        'pemberdayaan' => 'Pemberdayaan',
                        'kesehatan' => 'Kesehatan',
                        'pemerintahan' => 'Pemerintahan',
                    ]),
            ])
            ->defaultSort('tanggal', 'desc')
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
