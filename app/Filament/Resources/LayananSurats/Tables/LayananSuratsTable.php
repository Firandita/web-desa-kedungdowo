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
                    ->label('Nama Surat')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('kode_surat')
                    ->label('Kode')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->badge()
                    ->sortable(),

                TextColumn::make('estimasi_waktu')
                    ->label('Estimasi Waktu')
                    ->toggleable(isToggledHiddenByDefault: true),

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
