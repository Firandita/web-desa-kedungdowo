<?php

namespace App\Filament\Resources\ProfilDesa\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProfilDesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Statistik Ringkas Desa')
                    ->description('PENTING: tabel ini cuma boleh diisi SATU baris data (data terkini). Kalau sudah ada 1 baris, edit baris itu langsung, jangan bikin baris baru — supaya Beranda dan halaman Transparansi selalu nunjukin angka yang sama.')
                    ->columns(2)
                    ->components([
                        TextInput::make('jumlah_penduduk')
                            ->label('Jumlah Penduduk (Jiwa)')
                            ->numeric()
                            ->required()
                            ->default(0),

                        TextInput::make('jumlah_kk')
                            ->label('Jumlah Kepala Keluarga')
                            ->numeric()
                            ->required()
                            ->default(0),

                        TextInput::make('jumlah_laki_laki')
                            ->label('Jumlah Laki-Laki (Jiwa)')
                            ->numeric()
                            ->required()
                            ->default(0),

                        TextInput::make('jumlah_perempuan')
                            ->label('Jumlah Perempuan (Jiwa)')
                            ->numeric()
                            ->required()
                            ->default(0),

                        TextInput::make('jumlah_dusun')
                            ->label('Jumlah Dusun')
                            ->numeric()
                            ->required()
                            ->default(4),

                        TextInput::make('jumlah_ternak_sapi')
                            ->label('Jumlah Ternak Sapi (Ekor)')
                            ->numeric()
                            ->required()
                            ->default(0),
                    ]),
            ]);
    }
}
