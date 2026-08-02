<?php

namespace App\Filament\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Pelapor')
                    ->columns(2)
                    ->components([
                        TextInput::make('nomor_tiket')
                            ->label('Nomor Tiket')
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpanFull(),

                        TextInput::make('nama_pelapor')
                            ->label('Nama Pelapor')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('no_whatsapp')
                            ->label('No. WhatsApp')
                            ->tel()
                            ->required()
                            ->maxLength(30),

                        Toggle::make('is_anonim')
                            ->label('Laporan Anonim')
                            ->disabled(),

                        Select::make('tipe_laporan')
                            ->label('Tipe Laporan')
                            ->options([
                                'pengaduan' => 'Pengaduan',
                                'aspirasi' => 'Aspirasi',
                                'pertanyaan' => 'Pertanyaan',
                            ])
                            ->required(),
                    ]),

                Section::make('Isi Laporan')
                    ->components([
                        TextInput::make('kategori')
                            ->label('Kategori')
                            ->maxLength(100),

                        Textarea::make('isi_laporan')
                            ->label('Isi Laporan')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),

                Section::make('Tindak Lanjut Admin')
                    ->columns(2)
                    ->components([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'pending' => 'Menunggu',
                                'proses' => 'Diproses',
                                'selesai' => 'Selesai',
                                'ditolak' => 'Ditolak',
                            ])
                            ->default('pending')
                            ->required(),

                        Textarea::make('tanggapan')
                            ->label('Tanggapan Admin')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
