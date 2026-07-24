<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Desa Kedungdowo') — Kecamatan Balen, Kabupaten Bojonegoro</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  {{-- AOS (Animate On Scroll) — animasi muncul saat elemen kena scroll --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
  <script>
    AOS.init({
      duration: 700,   // lama animasi (ms)
      once: true,      // animasi cuma sekali pas pertama muncul, nggak berulang tiap di-scroll bolak-balik
      offset: 80,       // mulai animasi 80px sebelum elemen kelihatan penuh
    });
  </script>

</body>
</html>
