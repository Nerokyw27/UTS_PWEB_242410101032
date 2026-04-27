<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Nero Gaming Shop Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/nero.css') }}">
</head>
<body>

<div class="mg-login-bg">
    <div class="mg-login-card fade-up">

        <div class="mg-login-brand">
            <h1>NERO ADMIN</h1>
            <p>Masuk untuk mengelola produk top up game</p>
        </div>

        {{-- Error --}}
        @if ($errors->any())
            <div class="mg-alert-error">
                <i class="bi bi-exclamation-triangle me-2"></i>{{ $errors->first() }}
            </div>
        @endif

        {{-- Form --}}
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf

            <div class="mg-form-group">
                <label class="mg-label" for="username">
                    <i class="bi bi-person me-1"></i>Username
                </label>
                <input type="text" id="username" name="username" class="mg-input"
                    placeholder="Masukkan username"
                    value="{{ old('username') }}" autocomplete="off" required>
            </div>

            <div class="mg-form-group">
                <label class="mg-label" for="password">
                    <i class="bi bi-lock me-1"></i>Password
                </label>
                <input type="password" id="password" name="password" class="mg-input"
                    placeholder="••••••••">
            </div>

            <button type="submit" class="mg-btn-login mt-2">
                <i></i>Masuk ke Panel Admin
            </button>
        </form>

        <p style="text-align:center; font-size:0.75rem; color:var(--faint); margin-top:1.5rem; line-height:1.5;">
            🎮 Nero Gaming Shop &mdash; Top Up Cepat, Mudah, Terpercaya 24 Jam
        </p>

    </div>
</div>

</body>
</html>
