<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Profil Masjid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%; /* Pastikan halaman menggunakan 100% tinggi viewport */
            margin: 0; /* Hapus margin default */
            display: flex;
            flex-direction: column; /* Susun header, main, footer secara vertikal */
        }

        main {
            flex: 1; /* Pastikan konten utama mengisi ruang kosong */
        }

        footer {
            margin-top: auto; /* Dorong footer ke bawah */
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1 class="text-center" id="masjid-name">@yield('masjid-name', 'Masjid Raya Al-Falah')</h1>
            <p class="text-center" id="masjid-address">@yield('masjid-address', 'Jl. Sukamaju No. 123, Palembang')</p>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Masjidku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kegiatann') }}">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cashinn') }}">Cashin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cashoutt') }}">Cashout</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-4">
        @yield('main')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Profil Masjid. All rights reserved.</p>
    </footer>
</body>
</html>
