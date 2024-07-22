<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login</title>
    <div class="container-sm position-absolute top-50 start-50 translate-middle">
    <div class="card login-card shadow-sm">
        <div class="card-body">
            <h3 class="text-center mb-4">Login</h3>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                           name="email" placeholder="name@example.com" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-grid mb-3">
                    <input type="submit" class="btn btn-login text-white" value="Login">
                </div>
            </form>
            <p class="text-center">Belum memiliki akun? <a href="{{ route('register.form') }}" class="register-link">Daftar di sini</a></p>
        </div>
    </div>
</div>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-card {
            padding: 2rem;
            border-radius: 10px;
        }
        .btn-login {
            background-color: #007bff;
            border: none;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .register-link {
            color: #007bff;
            text-decoration: none;
        }
        .register-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>
