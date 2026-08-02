<?php

namespace App\Filament\Resources\Apbdes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ApbdesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Ringkasan Anggaran')
                    ->columns(2)
                    ->components([
                        TextInput::make('tahun')
                            ->numeric()
                            ->required()
                            ->minValue(2000)
                            ->maxValue(2100)
                            ->default(now()->year),

                        TextInput::make('pendapatan')
                            ->label('Total Pendapatan (Rp)')
                            ->numeric()
                            ->required()
                            ->prefix('Rp'),

                        TextInput::make('belanja')
                            ->label('Total Belanja (Rp)')
                            ->numeric()
                            ->required()
                            ->prefix('Rp'),

                        FileUpload::make('dokumen_pdf')
                            ->label('Dokumen Resmi (PDF)')
                            ->disk('public')
                            ->directory('apbdes')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(5120)
                            ->columnSpanFull(),
                    ]),

                Section::make('Realisasi per Bidang')
                    ->description('Tambahin tiap bidang belanja (contoh: Pembangunan Desa, Pemberdayaan Masyarakat, dst) beserta alokasi & persentase realisasinya.')
                    ->components([
                        Repeater::make('realisasiBidang')
                            ->relationship()
                            ->schema([
                                TextInput::make('bidang')
                                    ->required()
                                    ->placeholder('contoh: Pembangunan Desa'),
                                TextInput::make('alokasi')
                                    ->label('Alokasi (Rp)')
                                    ->numeric()
                                    ->required()
                                    ->prefix('Rp'),
                                TextInput::make('realisasi_persen')
                                    ->label('Realisasi (%)')
                                    ->numeric()
                                    ->required()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->suffix('%'),
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->addActionLabel('Tambah Bidang')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
