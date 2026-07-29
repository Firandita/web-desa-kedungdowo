<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Select::make('kategori')
                    ->options([
                        'Kegiatan Desa' => 'Kegiatan Desa',
                        'Pemberdayaan' => 'Pemberdayaan',
                        'Kesehatan' => 'Kesehatan',
                        'Lingkungan' => 'Lingkungan',
                        'Digitalisasi' => 'Digitalisasi',
                        'Pengumuman' => 'Pengumuman',
                    ])
                    ->required(),

                DatePicker::make('tanggal')
                    ->required()
                    ->default(now()),

                TextInput::make('penulis')
                    ->default('Humas Pemdes')
                    ->maxLength(255),

                FileUpload::make('foto')
                    ->image()
                    ->directory('berita')
                    ->maxSize(2048)
                    ->helperText('Ukuran maksimal 2MB, format JPG/PNG.')
                    ->columnSpanFull(),

                Textarea::make('ringkasan')
                    ->rows(2)
                    ->maxLength(255)
                    ->helperText('Ringkasan singkat yang muncul di kartu daftar berita.')
                    ->columnSpanFull(),

                Textarea::make('deskripsi')
                    ->required()
                    ->rows(8)
                    ->helperText('Isi lengkap berita. Pisahkan tiap paragraf dengan baris kosong (Enter dua kali).')
                    ->columnSpanFull(),
            ]);
    }
}
