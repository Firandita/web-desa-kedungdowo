<?php

namespace App\Filament\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\FileUpload;
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
                Section::make('Informasi Pelapor & Tiket')
                    ->columns(2)
                    ->components([
                        TextInput::make('nomor_tiket')
                            ->label('Nomor Tiket Pengaduan')
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpanFull(),

                        TextInput::make('nama_pelapor')
                            ->label('Nama Pelapor')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('no_whatsapp')
                            ->label('No. WhatsApp / Kontak')
                            ->tel()
                            ->required()
                            ->maxLength(30),

                        Toggle::make('is_anonim')
                            ->label('Status Anonim (Rahasiakan Identitas)')
                            ->disabled(),

                        Select::make('tipe_laporan')
                            ->label('Tipe Laporan')
                            ->options([
                                'pengaduan' => 'Pengaduan / Keluhan',
                                'aspirasi' => 'Aspirasi / Saran',
                                'pertanyaan' => 'Pertanyaan / Informasi',
                            ])
                            ->required(),
                    ]),

                Section::make('Rincian Laporan & Lampiran Bukti')
                    ->columns(2)
                    ->components([
                        TextInput::make('kategori')
                            ->label('Kategori Pengaduan')
                            ->maxLength(100)
                            ->columnSpanFull(),

                        Textarea::make('isi_laporan')
                            ->label('Isi Laporan / Pesan Warga')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),

                        FileUpload::make('file_lampiran')
                            ->label('Foto / Dokumen Bukti Lampiran Warga')
                            ->disk('public')
                            ->directory('pengaduan')
                            ->image()
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull(),
                    ]),

                Section::make('Tindak Lanjut & Respon Resmi Pemdes')
                    ->columns(2)
                    ->components([
                        Select::make('status')
                            ->label('Status Penanganan')
                            ->options([
                                'pending' => 'Menunggu Verifikasi',
                                'proses' => 'Sedang Diproses',
                                'selesai' => 'Selesai Ditindaklanjuti',
                                'ditolak' => 'Ditolak / Tidak Valid',
                            ])
                            ->default('pending')
                            ->required(),

                        Textarea::make('tanggapan')
                            ->label('Tanggapan Resmi Admin / Pemdes')
                            ->placeholder('Tuliskan jawaban atau langkah penanganan dari Pemdes Kedungdowo...')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
