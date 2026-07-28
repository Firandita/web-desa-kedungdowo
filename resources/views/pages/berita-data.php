<?php

/**
 * DATA DUMMY BERITA DESA KEDUNGDOWO
 * ------------------------------------------------------------------
 * File ini SEMENTARA berisi data hardcode. Nanti kalau Filament
 * Resource untuk tabel `beritas` sudah jadi, ganti pemanggilan file
 * ini di berita.blade.php & berita-detail.blade.php menjadi query
 * Eloquent, misalnya:
 *
 *   $daftarBerita = \App\Models\Berita::latest('tanggal')->get();
 *
 * Struktur array di bawah sengaja dibuat mirip kolom tabel `beritas`
 * (judul, tanggal, deskripsi, foto, kategori) supaya nanti gampang
 * dipindah ke database tanpa banyak ubah blade.
 */

return [
    1 => [
        'id' => 1,
        'judul' => 'Terima Petugas Sensus Ekonomi, Pemdes Kedungdowo Sukseskan Pendataan',
        'tanggal' => '08 Jul 2026',
        'kategori' => 'Kegiatan Desa',
        'penulis' => 'Administrator',
        'dilihat' => '554 kali',
        'foto' => 'berita-1.jpg',
        'ringkasan_singkat' => 'Pemerintah Desa Kedungdowo secara resmi menerima kunjungan dari Tim Sensus Ekonomi dalam rangka pemutakhiran data pelaku usaha di wilayah desa.',
        'ringkasan' => 'Pemerintah Desa Kedungdowo secara resmi menerima kunjungan dari Tim Sensus Ekonomi dalam rangka pemutakhiran data pelaku usaha di wilayah desa. Kegiatan ini berlangsung dengan lancar dan didukung penuh oleh seluruh perangkat desa serta warga setempat.',
        'konten' => [
            'Pemerintah Desa Kedungdowo, Kecamatan Balen, Kabupaten Bojonegoro, secara resmi menerima kunjungan Tim Sensus Ekonomi pada pekan lalu. Kunjungan ini merupakan bagian dari program pemutakhiran data pelaku usaha yang dilaksanakan serentak di seluruh wilayah kabupaten.',
            'Kepala Desa beserta perangkat desa turut mendampingi jalannya pendataan agar seluruh pelaku usaha, mulai dari usaha rumahan hingga UMKM, tercatat dengan baik. Proses pendataan berlangsung selama beberapa hari dan menyasar seluruh dusun di wilayah Kedungdowo.',
            'Kegiatan ini diharapkan dapat menghasilkan data yang akurat sebagai dasar penyusunan kebijakan ekonomi desa ke depan, termasuk program pemberdayaan UMKM dan bantuan modal usaha bagi warga.',
        ],
    ],
    2 => [
        'id' => 2,
        'judul' => 'Tingkatkan Keterampilan Pemuda dan Dukung Wirausaha Desa Kedungdowo',
        'tanggal' => '01 Jul 2026',
        'kategori' => 'Pemberdayaan',
        'penulis' => 'Administrator',
        'dilihat' => '320 kali',
        'foto' => 'berita-2.jpg',
        'ringkasan_singkat' => 'Pemerintah Desa Kedungdowo menggelar pelatihan wirausaha bagi pemuda Karang Taruna guna meningkatkan daya saing ekonomi lokal.',
        'ringkasan' => 'Pemerintah Desa Kedungdowo menggelar pelatihan wirausaha bagi pemuda Karang Taruna guna meningkatkan daya saing ekonomi lokal. Program ini bertujuan membuka peluang usaha baru di sektor kreatif digital.',
        'konten' => [
            'Dalam rangka mendorong semangat kewirausahaan di kalangan generasi muda, Pemerintah Desa Kedungdowo bekerja sama dengan Karang Taruna setempat menggelar pelatihan wirausaha selama dua hari.',
            'Materi pelatihan mencakup dasar-dasar manajemen usaha, strategi pemasaran digital, hingga pengelolaan keuangan sederhana. Para peserta juga diajak praktik langsung membuat produk yang bisa dipasarkan secara online.',
            'Kepala Desa berharap kegiatan ini menjadi langkah awal tumbuhnya usaha-usaha kreatif baru di Kedungdowo, sekaligus mengurangi angka pengangguran usia produktif di desa.',
        ],
    ],
    3 => [
        'id' => 3,
        'judul' => 'Rembuk Stunting Desa Kedungdowo 2026: Perkuat Komitmen Kesehatan',
        'tanggal' => '25 Jun 2026',
        'kategori' => 'Kesehatan',
        'penulis' => 'Administrator',
        'dilihat' => '412 kali',
        'foto' => 'berita-3.jpg',
        'ringkasan_singkat' => 'Musyawarah desa khusus pencegahan dan penanganan stunting digelar bersama BPD, bidan desa, serta kader Posyandu Kedungdowo.',
        'ringkasan' => 'Musyawarah desa khusus pencegahan dan penanganan stunting digelar bersama BPD, bidan desa, serta kader Posyandu Kedungdowo untuk merumuskan program gizi seimbang tahun anggaran 2026.',
        'konten' => [
            'Balai Desa Kedungdowo menjadi lokasi pelaksanaan Rembuk Stunting tahun 2026 yang dihadiri oleh Badan Permusyawaratan Desa (BPD), bidan desa, kader Posyandu, serta perwakilan orang tua balita.',
            'Dalam forum ini dibahas capaian program penanganan stunting tahun sebelumnya sekaligus menyusun rencana kerja tahun anggaran 2026, termasuk pemberian makanan tambahan bergizi dan edukasi pola asuh anak.',
            'Melalui rembuk ini, seluruh pemangku kepentingan sepakat memperkuat sinergi lintas sektor agar angka stunting di Desa Kedungdowo terus menurun.',
        ],
    ],
    4 => [
        'id' => 4,
        'judul' => 'Hijaukan Lingkungan Desa: Pemdes dan Warga Tanam Ribuan Pohon',
        'tanggal' => '18 Jun 2026',
        'kategori' => 'Lingkungan',
        'penulis' => 'Administrator',
        'dilihat' => '189 kali',
        'foto' => 'berita-4.jpg',
        'ringkasan_singkat' => 'Aksi gotong royong penanaman pohon dilakukan di sepanjang area sungai dan fasilitas umum desa demi menjaga kelestarian alam.',
        'ringkasan' => 'Aksi gotong royong penanaman pohon dilakukan di sepanjang area sungai dan fasilitas umum desa demi menjaga kelestarian alam serta mencegah risiko erosi.',
        'konten' => [
            'Ratusan warga Desa Kedungdowo bergotong royong menanam ribuan bibit pohon di sepanjang bantaran sungai dan area fasilitas umum desa pada akhir pekan lalu.',
            'Kegiatan yang diinisiasi oleh Pemerintah Desa bersama karang taruna dan kelompok tani ini bertujuan menjaga kelestarian lingkungan sekaligus mencegah risiko erosi tanah di musim penghujan.',
            'Bibit pohon yang ditanam meliputi jenis produktif seperti mangga dan trembesi, yang diharapkan selain bermanfaat secara ekologis juga bisa memberi nilai ekonomis bagi warga di masa depan.',
        ],
    ],
    5 => [
        'id' => 5,
        'judul' => 'Kolaborasi Pemdes Kedungdowo Cetak Agen Informasi Digital Desa',
        'tanggal' => '05 Jun 2026',
        'kategori' => 'Digitalisasi',
        'penulis' => 'Administrator',
        'dilihat' => '275 kali',
        'foto' => 'berita-5.jpg',
        'ringkasan_singkat' => 'Pemerintah Desa Kedungdowo menggelar workshop literasi media digital untuk mendorong transparansi publik.',
        'ringkasan' => 'Pemerintah Desa Kedungdowo menggelar workshop literasi media digital untuk mendorong transparansi publik dan mempermudah pengelolaan informasi portal desa.',
        'konten' => [
            'Guna mendukung keterbukaan informasi publik, Pemerintah Desa Kedungdowo menggelar workshop literasi media digital yang diikuti oleh perangkat desa dan perwakilan pemuda dari tiap dusun.',
            'Peserta dibekali kemampuan dasar mengelola konten untuk website dan media sosial resmi desa, mulai dari menulis berita, mengambil foto kegiatan, hingga etika bermedia sosial.',
            'Program ini menjadi cikal bakal terbentuknya Agen Informasi Digital Desa yang nantinya bertugas membantu mengelola dan memperbarui informasi di website resmi Desa Kedungdowo secara berkala.',
        ],
    ],
    6 => [
        'id' => 6,
        'judul' => 'Posyandu Mawar Desa Kedungdowo Gelar Pelayanan Kesehatan Bulanan',
        'tanggal' => '29 Mei 2026',
        'kategori' => 'Kesehatan',
        'penulis' => 'Administrator',
        'dilihat' => '198 kali',
        'foto' => 'berita-6.jpg',
        'ringkasan_singkat' => 'Posyandu Mawar Desa Kedungdowo melaksanakan penimbangan balita, pemberian gizi tambahan, dan pemeriksaan lansia.',
        'ringkasan' => 'Posyandu Mawar Desa Kedungdowo melaksanakan penimbangan balita, pemberian gizi tambahan, dan pemeriksaan kesehatan rutin lansia guna memastikan kualitas kesehatan warga.',
        'konten' => [
            'Posyandu Mawar yang berlokasi di Balai Dusun kembali menggelar kegiatan pelayanan kesehatan bulanan yang meliputi penimbangan berat badan balita, pengukuran tinggi badan, serta pemberian makanan tambahan bergizi.',
            'Selain layanan untuk balita, kegiatan bulan ini juga mencakup pemeriksaan kesehatan rutin bagi lansia, seperti pengecekan tekanan darah dan konsultasi kesehatan dengan bidan desa.',
            'Kader Posyandu berharap partisipasi aktif warga dalam kegiatan rutin ini dapat terus terjaga demi mendukung tumbuh kembang anak yang optimal serta kesehatan lansia di Desa Kedungdowo.',
        ],
    ],
];