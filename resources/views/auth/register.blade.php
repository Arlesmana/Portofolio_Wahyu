<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    {{-- Ikon bisa disesuaikan atau dihapus jika tidak ada --}}
    <link rel="shortcut icon" href="{{ asset('voler/dist/assets/images/') }}" type="image/x-icon">
    
    {{-- PENAMBAHAN: Link untuk ikon Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    {{-- CSS Kustom untuk Tampilan Simple & Animasi --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        /* Reset Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .auth-container {
            width: 100%;
            max-width: 450px;
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .auth-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-header img {
            height: 48px;
            margin-bottom: 1rem;
        }

        .auth-header h3 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #1a202c;
        }

        .auth-header p {
            color: #718096;
            font-size: 0.95rem;
        }

        .input-group {
            margin-bottom: 1.25rem;
            /* PENAMBAHAN: Diperlukan untuk posisi ikon */
            position: relative; 
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.9rem;
            color: #4a5568;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #4A90E2;
            box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
        }
        
        .form-control.is-invalid {
            border-color: #e53e3e;
        }
        
        .invalid-feedback {
            color: #e53e3e;
            font-size: 0.875em;
            margin-top: 0.25rem;
            display: block;
        }

        .password-row {
            display: flex;
            gap: 1rem;
        }
        
        .password-row .input-group {
            flex: 1;
        }

        /* PENAMBAHAN: CSS untuk Ikon Show/Hide Password */
        .toggle-password {
            position: absolute;
            top: 42px; /* Sesuaikan posisi vertikal ikon */
            right: 15px;
            cursor: pointer;
            color: #a0aec0; /* Warna ikon abu-abu */
            z-index: 2;
        }
        
        .toggle-password:hover {
            color: #4A90E2; /* Warna ikon saat di-hover */
        }
        
        /* Penyesuaian padding agar teks input tidak tertimpa ikon */
        input[type="password"], input[type="text"] {
            padding-right: 40px !important; 
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: #4A90E2;
            border: none;
            border-radius: 8px;
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 1.5rem;
        }

        .btn-submit:hover {
            background-color: #357ABD;
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            text-decoration: underline;
            color: #357ABD;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <div class="auth-header">
            <img src="{{ asset('voler/dist/assets/images/') }}" alt="logo">
            <h3>{{ __('Buat Akun Baru') }}</h3>
            <p>Silakan isi formulir untuk mendaftar.</p>
        </div>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            {{-- Nama Lengkap --}}
            <div class="input-group">
                <label for="name">{{ __('Nama Lengkap') }}</label>
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Contoh: Ari Dwi Lesmana">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Alamat Email --}}
            <div class="input-group">
                <label for="email">{{ __('Alamat Email') }}</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Contoh: aridwi@gmail.com">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 
            </div>
            
            {{-- Baris untuk input password dan konfirmasi --}}
            <div class="password-row">
                {{-- Password --}}
                <div class="input-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="••••••••">
                    
                    {{-- PENAMBAHAN: Ikon mata untuk password --}}
                    <i class="fas fa-eye-slash toggle-password" data-target="password"></i>

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                {{-- Konfirmasi Password --}}
                <div class="input-group">
                    <label for="password_confirmation">{{ __('Konfirmasi Password') }}</label>
                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">

                    {{-- PENAMBAHAN: Ikon mata untuk konfirmasi password --}}
                    <i class="fas fa-eye-slash toggle-password" data-target="password_confirmation"></i>
                </div>
            </div>

            <button type="submit" class="btn-submit">{{ __('Daftar') }}</button>

            <div class="login-link">
                <p>{{ __('Sudah punya akun?') }} <a href="{{ route('login') }}">{{ __('Masuk di sini') }}</a></p>
            </div>
        </form>
    </div>

    {{-- PENAMBAHAN: JavaScript untuk fungsionalitas show/hide --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePasswordIcons = document.querySelectorAll('.toggle-password');

            togglePasswordIcons.forEach(icon => {
                icon.addEventListener('click', function () {
                    const targetId = this.getAttribute('data-target');
                    const passwordField = document.getElementById(targetId);

                    // Ganti tipe input dari 'password' ke 'text' atau sebaliknya
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        this.classList.remove('fa-eye-slash');
                        this.classList.add('fa-eye');
                    } else {
                        passwordField.type = 'password';
                        this.classList.remove('fa-eye');
                        this.classList.add('fa-eye-slash');
                    }
                });
            });
        });
    </script>
</body>
</html>