<?php

namespace App\Filament\Resources\LayananSurats\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LayananSuratForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Surat')
                    ->columns(2)
                    ->components([
                        TextInput::make('nama_surat')
                            ->label('Nama Surat')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('kode_surat')
                            ->label('Kode Surat')
                            ->helperText('Contoh: SKTM, SKD, SP-KTP')
                            ->maxLength(50),

                        Select::make('kategori')
                            ->label('Kategori')
                            ->options([
                                'Kependudukan' => 'Kependudukan',
                                'Kesejahteraan Sosial' => 'Kesejahteraan Sosial',
                                'Pernikahan' => 'Pernikahan',
                                'Usaha & Ekonomi' => 'Usaha & Ekonomi',
                            ])
                            ->searchable()
                            ->default('Kependudukan')
                            ->required(),

                        TextInput::make('estimasi_waktu')
                            ->label('Estimasi Waktu Selesai')
                            ->default('1-2 Hari Kerja')
                            ->maxLength(100)
                            ->columnSpanFull(),

                        Textarea::make('deskripsi')
                            ->label('Deskripsi Surat')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Persyaratan')
                    ->components([
                        Repeater::make('persyaratan')
                            ->label('Daftar Persyaratan')
                            ->simple(
                                TextInput::make('item')
                                    ->required()
                                    ->placeholder('Contoh: Fotokopi KTP')
                            )
                            ->addActionLabel('Tambah Persyaratan')
                            ->reorderable()
                            ->columnSpanFull(),
                    ]),

                Section::make('Template Surat')
                    ->components([
                        FileUpload::make('file_template')
                            ->label('File Template Surat (opsional)')
                            ->directory('template-surat')
                            ->disk('public')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                            ->maxSize(5120)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
