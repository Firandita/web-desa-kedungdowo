<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Dokumentasi')
                    ->columns(2)
                    ->components([
                        TextInput::make('judul')
                            ->label('Judul Kegiatan')
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Select::make('kategori')
                            ->label('Kategori')
                            ->options([
                                'pembangunan' => 'Pembangunan',
                                'pemberdayaan' => 'Pemberdayaan',
                                'kesehatan' => 'Kesehatan',
                                'pemerintahan' => 'Pemerintahan',
                            ])
                            ->searchable(),

                        TextInput::make('lokasi')
                            ->label('Lokasi / Dusun')
                            ->maxLength(255),

                        DatePicker::make('tanggal')
                            ->label('Tanggal Kegiatan')
                            ->default(now()),
                    ]),

                Section::make('Keterangan & Foto')
                    ->components([
                        Textarea::make('keterangan')
                            ->label('Keterangan Foto')
                            ->rows(3)
                            ->columnSpanFull(),

                        FileUpload::make('foto')
                            ->label('Foto Kegiatan')
                            ->image()
                            ->imageEditor()
                            ->required()
                            ->directory('galeri')
                            ->disk('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(3072)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
