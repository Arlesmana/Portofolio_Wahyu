<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('voler/dist/assets/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('voler/dist/assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('voler/dist/assets/css/app.css') }}">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="{{ asset('voler/dist/assets/images/favicon.svg') }}" height="48" class='mb-4'>
                                <h3>Sign In</h3>
                                <p>Please sign in to continue to Voler.</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group position-relative has-icon-left">
                                    <label for="email">Email</label>
                                    <div class="position-relative">
                                        <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group position-relative has-icon-left mt-4">
                                    <label for="password">Password</label>
                                    <div class="position-relative">
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-start">
                                        <input type="checkbox" id="remember_me" class='form-check-input' name="remember">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                    <div class="float-end">
                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <button class="btn btn-primary float-end">Log in</button>
                                </div>
                            </form>

                            {{-- <div class="divider">
                                <div class="divider-text">OR</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-primary">
                                        <i data-feather="facebook"></i> Facebook
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-secondary">
                                        <i data-feather="github"></i> Github
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('voler/dist/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/js/app.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/js/main.js') }}"></script>
</body>

</html>
