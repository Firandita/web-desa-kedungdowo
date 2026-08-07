<?php

namespace App\Filament\Resources\LayananSurats\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class LayananSuratsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_surat')
                    ->label('Nama Layanan Surat')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('kode_surat')
                    ->label('Kode')
                    ->badge()
                    ->color('primary')
                    ->icon('heroicon-o-tag')
                    ->searchable(),

                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Kependudukan' => 'info',
                        'Kesejahteraan Sosial' => 'success',
                        'Pernikahan' => 'warning',
                        'Usaha & Ekonomi' => 'emerald',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('estimasi_waktu')
                    ->label('Estimasi Waktu')
                    ->badge()
                    ->color('gray')
                    ->icon('heroicon-o-clock')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('kategori')
                    ->options([
                        'Kependudukan' => 'Kependudukan',
                        'Kesejahteraan Sosial' => 'Kesejahteraan Sosial',
                        'Pernikahan' => 'Pernikahan',
                        'Usaha & Ekonomi' => 'Usaha & Ekonomi',
                    ]),
            ])
            ->defaultSort('nama_surat', 'asc')
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
