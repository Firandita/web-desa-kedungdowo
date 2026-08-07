<?php

namespace App\Filament\Resources\Pengaduans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PengaduansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_tiket')
                    ->label('No. Tiket')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->icon('heroicon-o-ticket')
                    ->copyable()
                    ->copyMessage('Nomor tiket berhasil disalin!'),

                TextColumn::make('nama_pelapor')
                    ->label('Nama Pelapor')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn ($record) => $record->is_anonim ? '🔒 Anonim (' . $record->nama_pelapor . ')' : $record->nama_pelapor),

                TextColumn::make('tipe_laporan')
                    ->label('Tipe Laporan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pengaduan' => 'danger',
                        'aspirasi' => 'info',
                        'pertanyaan' => 'primary',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),

                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->badge()
                    ->color('gray')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('status')
                    ->label('Status Penanganan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'proses' => 'info',
                        'selesai' => 'success',
                        'ditolak' => 'danger',
                        default => 'gray',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'pending' => 'heroicon-o-clock',
                        'proses' => 'heroicon-o-arrow-path',
                        'selesai' => 'heroicon-o-check-circle',
                        'ditolak' => 'heroicon-o-x-circle',
                        default => 'heroicon-o-question-mark-circle',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'Menunggu',
                        'proses' => 'Diproses',
                        'selesai' => 'Selesai',
                        'ditolak' => 'Ditolak',
                        default => ucfirst($state),
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Tanggal Masuk')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Menunggu',
                        'proses' => 'Diproses',
                        'selesai' => 'Selesai',
                        'ditolak' => 'Ditolak',
                    ]),
                SelectFilter::make('tipe_laporan')
                    ->options([
                        'pengaduan' => 'Pengaduan',
                        'aspirasi' => 'Aspirasi',
                        'pertanyaan' => 'Pertanyaan',
                    ]),
            ])
            ->defaultSort('created_at', 'desc')
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
