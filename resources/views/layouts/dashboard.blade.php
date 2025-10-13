<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Voler</title>
    
    <link rel="stylesheet" href="{{ asset('voler/dist/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('voler/dist/assets/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('voler/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('voler/dist/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('voler/dist/assets/images/') }}" type="image/x-icon">
</head>
<body>
    <div id="app">
        {{-- Sidebar --}}
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{ asset('voler/dist/assets/images/') }}" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item active ">
                            <a href="{{ route('dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i> 
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class='sidebar-title'>Tim Project</li>
                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="users" width="20"></i> 
                                <span>Tim</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        {{-- Main Content --}}
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        {{-- Notification Dropdown --}}
                        <li class="dropdown nav-icon">
                            {{-- ... your notification dropdown code ... --}}
                        </li>
                        {{-- Mail Dropdown --}}
                        <li class="dropdown nav-icon me-2">
                             {{-- ... your mail dropdown code ... --}}
                        </li>
                        {{-- User Profile Dropdown --}}
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="{{ asset('voler/dist/assets/images/avatar/avatar-s-1.png') }}" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                   <button type="submit" class="dropdown-item"><i data-feather="log-out"></i> Logout</button>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
            {{-- This is where your page-specific content will be injected --}}
            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Voler</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script src="{{ asset('voler/dist/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/js/app.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('voler/dist/assets/js/main.js') }}"></script>
</body>
</html>