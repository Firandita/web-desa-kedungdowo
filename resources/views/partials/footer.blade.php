<footer id="kontak" class="bg-[var(--sawah-dark)] text-white pt-16 pb-8">
  <div class="max-w-7xl mx-auto px-5 md:px-8 grid md:grid-cols-3 gap-10">
    <div>
      <p class="font-display font-bold text-lg mb-3">Pemerintah Desa Kedungdowo</p>
      <p class="text-sm text-white/70 leading-relaxed">
        Kantor Desa Kedungdowo<br>
        Kecamatan Balen, Kabupaten Bojonegoro<br>
        Provinsi Jawa Timur
      </p>
    </div>
    <div>
      <p class="font-display font-semibold mb-3 text-[var(--panen)]">Kontak</p>
      <ul class="text-sm text-white/70 space-y-2">
        <li>📞 0812-xxxx-xxxx</li>
        <li>✉️ kedungdowo.balen@bojonegorokab.go.id</li>
        <li>🕗 Senin–Jumat, 07.30–15.30 WIB</li>
      </ul>
    </div>
    <div>
      <p class="font-display font-semibold mb-3 text-[var(--panen)]">Tautan Cepat</p>
      <ul class="text-sm text-white/70 space-y-2">
        <li><a href="{{ route('transparansi') }}" class="hover:text-white">Transparansi APBDes</a></li>
        <li><a href="{{ route('layanan') }}" class="hover:text-white">Layanan Surat</a></li>
        <li><a href="{{ route('berita') }}" class="hover:text-white">Berita Desa</a></li>
        <li><a href="#" class="hover:text-white">Pengaduan Masyarakat</a></li>
      </ul>
    </div>
  </div>
  <p class="text-center text-xs text-white/40 mt-12">
    © {{ date('Y') }} Pemerintah Desa Kedungdowo — Dibangun oleh Tim KKN Desa Wedoro
  </p>
</footer>
