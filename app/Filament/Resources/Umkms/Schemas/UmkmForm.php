<?php

namespace App\Filament\Resources\Umkms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UmkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_usaha')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Select::make('kategori')
                    ->options([
                        'Kuliner' => 'Kuliner',
                        'Kerajinan' => 'Kerajinan',
                        'Pertanian' => 'Pertanian',
                        'Peternakan' => 'Peternakan',
                        'Jasa' => 'Jasa',
                        'Lainnya' => 'Lainnya',
                    ])
                    ->native(false),

                TextInput::make('nama_pemilik')
                    ->required()
                    ->maxLength(255),

                TextInput::make('dusun')
                    ->maxLength(255),

                TextInput::make('kontak')
                    ->tel()
                    ->maxLength(255)
                    ->helperText('Nomor WhatsApp pemilik usaha, contoh: 0812xxxxxxx'),

                FileUpload::make('foto')
                    ->label('Foto Usaha')
                    ->image()
                    ->imageEditor()
                    ->directory('umkm')
                    ->disk('public')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->maxSize(2048)
                    ->columnSpanFull(),
            ]);
    }
}
