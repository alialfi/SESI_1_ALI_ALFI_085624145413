<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            position: relative;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('leuwitex.jpg') }}') no-repeat center center/cover;
            filter: blur(6px);
            transform: scale(1.1);
            z-index: -2;
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); 
            z-index: -1;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(3px);
            border-radius: 12px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.25);
        }

        .btn-primary {
            width: 100%;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card p-4" style="width: 360px;">
        <h4 class="mb-4 text-center">Login</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email"
                       value="{{ old('email') }}"
                       class="form-control @error('email') is-invalid @enderror"
                       required autofocus autocomplete="off">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required autocomplete="off">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>

    </div>
</body>
</html>
