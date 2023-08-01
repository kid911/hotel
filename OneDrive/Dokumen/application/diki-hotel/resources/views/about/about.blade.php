<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body>
   
        <header class="header">
            <div class="header_toggle" id="header-toggle">☰</div>
            <div class="header_user">Selamat Datang Kembali, {{ auth()->check() ? auth()->user()->username : 'Guest' }}</div>
            <p>{{ $date }}</p>
        </header>
        <aside class="sidebar" id="sidebar">
            <!-- Tambahkan teks sebagai logo di sini -->
            <h1 class="sidebar_logo">Hotel Forest-Hymn</h1>
            <hr class="sidebar_logo_line"> <!-- Garis yang akan ditampilkan di bawah logo -->

            <nav class="nav mt-3">
                <a href="/home"
                    class="nav_link {{ Request::is('home') ? 'active' : '' }} btn btn-secondary mb-3">Beranda</a>
                <a href="/about"
                    class="nav_link  {{ Request::is('about') ? 'active' : '' }} btn btn-secondary mb-3">Tentang
                    Hotel</a>
                <a href="/tranksaksi"
                    class="nav_link {{ Request::is('riwayat') ? 'active' : '' }} btn btn-secondary mb-3">Riwayat
                    Tranksaksi</a>
                <a href="/pelayanan"
                    class="nav_link {{ Request::is('pelayanan') ? 'active' : '' }} btn btn-secondary mb-3">Pelayan</a>
                <hr class="sidebar_logo_line">
                <form action="/logout" method="post">
                    @csrf
                <div class="sidebar_footer">
                    <button type="submit" class="logout_link btn btn-secondary">Logout</button>
                </div>
            </form>
            </nav>

            <div class="close_button" id="close_button">✕</div>
        </aside>
        <main class="main-content">
            <h1>Halaman Tentang Hotel!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor ligula eget nisl dapibus, eu
                varius
                eros interdum.</p>
        </main>

        <script>
            const toggleButton = document.getElementById('header-toggle');
            const closeButton = document.getElementById('close_button');
            const sidebar = document.getElementById('sidebar');

            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });

            closeButton.addEventListener('click', function() {
                sidebar.classList.remove('active');
            });
        </script>
  
</body>

</html>
