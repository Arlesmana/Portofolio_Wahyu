<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Yurivai Code</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('voler/dist/assets/images/') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        .main-container {
            min-height: 100vh;
        }

        /* Panel Kiri (Gambar Ilustrasi) */
        .image-panel {
            background-color: #f8f9fa; /* Warna abu-abu sangat muda */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
        }
        
        .image-panel img {
            max-width: 80%;
            height: auto;
        }

        /* Panel Kanan (Form) */
        .form-panel {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-wrapper {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }

        .form-wrapper h3 {
            font-weight: 600;
            font-size: 1.8rem;
            color: #333;
        }

        .form-wrapper .form-label {
            font-weight: 500;
            color: #555;
        }

        .form-control {
            border-radius: 0.5rem;
            padding: 0.8rem 1rem;
            border: 1px solid #ced4da;
        }
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .btn-login {
            font-weight: 500;
            padding: 0.8rem;
            border-radius: 0.5rem;
        }

        .forgot-link {
            font-size: 0.9rem;
            color: #6c757d;
            text-decoration: none;
        }
        .forgot-link:hover {
            color: #0d6efd;
        }

        /* PENAMBAHAN: CSS untuk memberi ruang bagi ikon di input password */
        #password {
            padding-right: 40px; 
        }

    </style>
</head>
<body>

    <div class="container-fluid main-container p-0">
        <div class="row g-0 h-100">

            <div class="col-md-6 d-none d-md-block image-panel">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/login-3305943-2757111.png" alt="Login Illustration">
            </div>

            <div class="col-md-6 col-12 form-panel">
                <div class="form-wrapper">
                    <div class="mb-5">
                        <h3>Welcome Back!</h3>
                        <p class="text-muted">Please sign in to continue.</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
                        </div>

                        <div class="mb-4 position-relative">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                            <i class="fas fa-eye-slash" id="togglePassword" style="position: absolute; right: 15px; top: 43px; cursor: pointer; color: #6c757d;"></i>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                <label class="form-check-label" for="remember_me">
                                    Remember me
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="forgot-link">Forgot password?</a>
                        </div>

                        <div class="text-center mb-4">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-login">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function (e) {
                // Toggle tipe input
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                // Toggle ikon mata
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>
</html>