<?php

/**
 * DATA DUMMY BERITA DESA KEDUNGDOWO
 * ------------------------------------------------------------------
 * File ini SEMENTARA berisi data hardcode, dipakai controller HANYA
 * kalau tabel `beritas` di database masih kosong (lihat BeritaController).
 * Begitu ada data asli di database (ditambah lewat admin panel Filament),
 * data dummy ini otomatis gak dipakai lagi.
 *
 * PENTING: nama field di sini SENGAJA disamakan persis sama nama kolom
 * tabel `beritas` (lihat migration create_beritas_table), yaitu:
 * judul, slug, tanggal, penulis, dilihat, ringkasan, deskripsi, foto, kategori.
 * Jangan nambah field baru di sini kecuali kolomnya juga ditambah di database,
 * biar blade-nya gak perlu logic beda buat data dummy vs data asli.
 */

return [
    1 => [
        'id' => 1,
        'judul' => 'Terima Petugas Sensus Ekonomi, Pemdes Kedungdowo Sukseskan Pendataan',
        'slug' => null,
        'tanggal' => '08 Jul 2026',
        'kategori' => 'Kegiatan Desa',
        'penulis' => 'Administrator',
        'dilihat' => 554,
        'foto' => 'berita-1.jpg',
        'ringkasan' => 'Pemerintah Desa Kedungdowo secara resmi menerima kunjungan dari Tim Sensus Ekonomi dalam rangka pemutakhiran data pelaku usaha di wilayah desa.',
        'deskripsi' => "Pemerintah Desa Kedungdowo, Kecamatan Balen, Kabupaten Bojonegoro, secara resmi menerima kunjungan Tim Sensus Ekonomi pada pekan lalu. Kunjungan ini merupakan bagian dari program pemutakhiran data pelaku usaha yang dilaksanakan serentak di seluruh wilayah kabupaten.\n\nKepala Desa beserta perangkat desa turut mendampingi jalannya pendataan agar seluruh pelaku usaha, mulai dari usaha rumahan hingga UMKM, tercatat dengan baik. Proses pendataan berlangsung selama beberapa hari dan menyasar seluruh dusun di wilayah Kedungdowo.\n\nKegiatan ini diharapkan dapat menghasilkan data yang akurat sebagai dasar penyusunan kebijakan ekonomi desa ke depan, termasuk program pemberdayaan UMKM dan bantuan modal usaha bagi warga.",
    ],
    2 => [
        'id' => 2,
        'judul' => 'Tingkatkan Keterampilan Pemuda dan Dukung Wirausaha Desa Kedungdowo',
        'slug' => null,
        'tanggal' => '01 Jul 2026',
        'kategori' => 'Pemberdayaan',
        'penulis' => 'Administrator',
        'dilihat' => 320,
        'foto' => 'berita-2.jpg',
        'ringkasan' => 'Pemerintah Desa Kedungdowo menggelar pelatihan wirausaha bagi pemuda Karang Taruna guna meningkatkan daya saing ekonomi lokal.',
        'deskripsi' => "Dalam rangka mendorong semangat kewirausahaan di kalangan generasi muda, Pemerintah Desa Kedungdowo bekerja sama dengan Karang Taruna setempat menggelar pelatihan wirausaha selama dua hari.\n\nMateri pelatihan mencakup dasar-dasar manajemen usaha, strategi pemasaran digital, hingga pengelolaan keuangan sederhana. Para peserta juga diajak praktik langsung membuat produk yang bisa dipasarkan secara online.\n\nKepala Desa berharap kegiatan ini menjadi langkah awal tumbuhnya usaha-usaha kreatif baru di Kedungdowo, sekaligus mengurangi angka pengangguran usia produktif di desa.",
    ],
    3 => [
        'id' => 3,
        'judul' => 'Rembuk Stunting Desa Kedungdowo 2026: Perkuat Komitmen Kesehatan',
        'slug' => null,
        'tanggal' => '25 Jun 2026',
        'kategori' => 'Kesehatan',
        'penulis' => 'Administrator',
        'dilihat' => 412,
        'foto' => 'berita-3.jpg',
        'ringkasan' => 'Musyawarah desa khusus pencegahan dan penanganan stunting digelar bersama BPD, bidan desa, serta kader Posyandu Kedungdowo.',
        'deskripsi' => "Balai Desa Kedungdowo menjadi lokasi pelaksanaan Rembuk Stunting tahun 2026 yang dihadiri oleh Badan Permusyawaratan Desa (BPD), bidan desa, kader Posyandu, serta perwakilan orang tua balita.\n\nDalam forum ini dibahas capaian program penanganan stunting tahun sebelumnya sekaligus menyusun rencana kerja tahun anggaran 2026, termasuk pemberian makanan tambahan bergizi dan edukasi pola asuh anak.\n\nMelalui rembuk ini, seluruh pemangku kepentingan sepakat memperkuat sinergi lintas sektor agar angka stunting di Desa Kedungdowo terus menurun.",
    ],
    4 => [
        'id' => 4,
        'judul' => 'Hijaukan Lingkungan Desa: Pemdes dan Warga Tanam Ribuan Pohon',
        'slug' => null,
        'tanggal' => '18 Jun 2026',
        'kategori' => 'Lingkungan',
        'penulis' => 'Administrator',
        'dilihat' => 189,
        'foto' => 'berita-4.jpg',
        'ringkasan' => 'Aksi gotong royong penanaman pohon dilakukan di sepanjang area sungai dan fasilitas umum desa demi menjaga kelestarian alam.',
        'deskripsi' => "Ratusan warga Desa Kedungdowo bergotong royong menanam ribuan bibit pohon di sepanjang bantaran sungai dan area fasilitas umum desa pada akhir pekan lalu.\n\nKegiatan yang diinisiasi oleh Pemerintah Desa bersama karang taruna dan kelompok tani ini bertujuan menjaga kelestarian lingkungan sekaligus mencegah risiko erosi tanah di musim penghujan.\n\nBibit pohon yang ditanam meliputi jenis produktif seperti mangga dan trembesi, yang diharapkan selain bermanfaat secara ekologis juga bisa memberi nilai ekonomis bagi warga di masa depan.",
    ],
    5 => [
        'id' => 5,
        'judul' => 'Kolaborasi Pemdes Kedungdowo Cetak Agen Informasi Digital Desa',
        'slug' => null,
        'tanggal' => '05 Jun 2026',
        'kategori' => 'Digitalisasi',
        'penulis' => 'Administrator',
        'dilihat' => 275,
        'foto' => 'berita-5.jpg',
        'ringkasan' => 'Pemerintah Desa Kedungdowo menggelar workshop literasi media digital untuk mendorong transparansi publik.',
        'deskripsi' => "Guna mendukung keterbukaan informasi publik, Pemerintah Desa Kedungdowo menggelar workshop literasi media digital yang diikuti oleh perangkat desa dan perwakilan pemuda dari tiap dusun.\n\nPeserta dibekali kemampuan dasar mengelola konten untuk website dan media sosial resmi desa, mulai dari menulis berita, mengambil foto kegiatan, hingga etika bermedia sosial.\n\nProgram ini menjadi cikal bakal terbentuknya Agen Informasi Digital Desa yang nantinya bertugas membantu mengelola dan memperbarui informasi di website resmi Desa Kedungdowo secara berkala.",
    ],
    6 => [
        'id' => 6,
        'judul' => 'Posyandu Mawar Desa Kedungdowo Gelar Pelayanan Kesehatan Bulanan',
        'slug' => null,
        'tanggal' => '29 Mei 2026',
        'kategori' => 'Kesehatan',
        'penulis' => 'Administrator',
        'dilihat' => 198,
        'foto' => 'berita-6.jpg',
        'ringkasan' => 'Posyandu Mawar Desa Kedungdowo melaksanakan penimbangan balita, pemberian gizi tambahan, dan pemeriksaan lansia.',
        'deskripsi' => "Posyandu Mawar yang berlokasi di Balai Dusun kembali menggelar kegiatan pelayanan kesehatan bulanan yang meliputi penimbangan berat badan balita, pengukuran tinggi badan, serta pemberian makanan tambahan bergizi.\n\nSelain layanan untuk balita, kegiatan bulan ini juga mencakup pemeriksaan kesehatan rutin bagi lansia, seperti pengecekan tekanan darah dan konsultasi kesehatan dengan bidan desa.\n\nKader Posyandu berharap partisipasi aktif warga dalam kegiatan rutin ini dapat terus terjaga demi mendukung tumbuh kembang anak yang optimal serta kesehatan lansia di Desa Kedungdowo.",
    ],
];
