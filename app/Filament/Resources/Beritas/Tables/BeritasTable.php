<?php

namespace App\Filament\Resources\Beritas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BeritasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->label('Foto Sampul')
                    ->disk('public')
                    ->height(48)
                    ->width(72)
                    ->extraImgAttributes(['class' => 'rounded-lg object-cover shadow-xs']),

                TextColumn::make('judul')
                    ->label('Judul Berita')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(45)
                    ->tooltip(fn ($record) => $record->judul),

                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Kegiatan', 'Kegiatan Desa' => 'info',
                        'Pemberdayaan' => 'success',
                        'Kesehatan' => 'warning',
                        'Lingkungan' => 'emerald',
                        'Digitalisasi' => 'primary',
                        'Pengumuman' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('tanggal')
                    ->label('Tanggal Terbit')
                    ->date('d M Y')
                    ->sortable()
                    ->icon('heroicon-o-calendar'),

                TextColumn::make('dilihat')
                    ->label('Dibaca')
                    ->numeric()
                    ->badge()
                    ->color('gray')
                    ->icon('heroicon-o-eye')
                    ->sortable(),

                TextColumn::make('penulis')
                    ->label('Penulis')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('tanggal', 'desc')
            ->filters([
                SelectFilter::make('kategori')
                    ->options([
                        'Kegiatan' => 'Kegiatan',
                                'Kegiatan Desa' => 'Kegiatan Desa',
                        'Pemberdayaan' => 'Pemberdayaan',
                        'Kesehatan' => 'Kesehatan',
                        'Lingkungan' => 'Lingkungan',
                        'Digitalisasi' => 'Digitalisasi',
                        'Pengumuman' => 'Pengumuman',
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
