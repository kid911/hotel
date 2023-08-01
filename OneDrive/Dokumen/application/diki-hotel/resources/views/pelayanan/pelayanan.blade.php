<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet">
</head>

<body>

    <form action="/logout" method="post">
        @csrf
        <header class="header">
            <div class="header_toggle" id="header-toggle">☰</div>
            <div class="header_user">Welcome, {{ auth()->user()->username }}</div>
        </header>
        <aside class="sidebar" id="sidebar">
            <!-- Tambahkan teks sebagai logo di sini -->
            <h1 class="sidebar_logo">Hotel Forest-Hymn</h1>
            <hr class="sidebar_logo_line"> <!-- Garis yang akan ditampilkan di bawah logo -->

            <nav class="nav mt-3">
                <a href="/home"
                    class="nav_link {{ Request::is('home') ? 'active' : '' }} btn btn-secondary mb-3">Beranda</a>
                <a href="/about"
                    class="nav_link {{ Request::is('about') ? 'active' : '' }} btn btn-secondary mb-3">Tentang Hotel</a>
                <a href="/tranksaksi" class="nav_link {{ Request::is('riwayat') }} btn btn-secondary mb-3">Riwayat Tranksaksi</a>
                <a href="/pelayanan"
                    class="nav_link {{ Request::is('pelayanan') ? 'active' : '' }} btn btn-secondary mb-3">Pelayan</a>
                <hr class="sidebar_logo_line">
                <div class="sidebar_footer">
                    <button type="submit" class="logout_link btn btn-secondary">Logout</button>
                </div>
            </nav>

            <div class="close_button" id="close_button">✕</div>
        </aside>
        <main class="main-content">
            <div class="container">
                <table id="myTable" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
  
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </form>



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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

</body>

</html>
