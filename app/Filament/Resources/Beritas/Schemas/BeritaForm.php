<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Berita')
                    ->columns(2)
                    ->components([
                        TextInput::make('judul')
                            ->label('Judul Berita')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $state, callable $set) => $set('slug', Str::slug($state)))
                            ->columnSpanFull(),

                        TextInput::make('slug')
                            ->label('Slug (URL)')
                            ->maxLength(255)
                            ->helperText('Otomatis terisi dari judul, boleh diubah manual.'),

                        TextInput::make('penulis')
                            ->label('Penulis')
                            ->default('Humas Pemdes')
                            ->required()
                            ->maxLength(255),

                        DatePicker::make('tanggal')
                            ->label('Tanggal Terbit')
                            ->required()
                            ->default(now()),

                        Select::make('kategori')
                            ->label('Kategori')
                            ->options([
                                'Kegiatan' => 'Kegiatan',
                                'Kegiatan Desa' => 'Kegiatan Desa',
                                'Pemberdayaan' => 'Pemberdayaan',
                                'Kesehatan' => 'Kesehatan',
                                'Lingkungan' => 'Lingkungan',
                                'Digitalisasi' => 'Digitalisasi',
                                'Pengumuman' => 'Pengumuman',
                            ])
                            ->searchable()
                            ->required(),
                    ]),

                Section::make('Konten Berita')
                    ->components([
                        Textarea::make('ringkasan')
                            ->label('Ringkasan Singkat')
                            ->helperText('Ditampilkan di card daftar berita (2-3 kalimat).')
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        Textarea::make('deskripsi')
                            ->label('Isi Berita Lengkap')
                            ->required()
                            ->rows(8)
                            ->columnSpanFull(),
                    ]),

                Section::make('Foto Sampul')
                    ->components([
                        FileUpload::make('foto')
                            ->label('Foto Berita')
                            ->image()
                            ->imageEditor()
                            ->directory('berita')
                            ->disk('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(3072)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
