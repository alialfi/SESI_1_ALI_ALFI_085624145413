<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leuwitex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color: #0d5cab !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Leuwitex</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang.index') }}" style="color: white;">Master Barang</a>
                    </li>
                    <li class="nav-item"><form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-link nav-link" type="submit" style="color: white;">Logout</button>
                    </form></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
