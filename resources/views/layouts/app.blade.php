<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  {{-- Judul halaman akan dinamis sesuai halaman yang dibuka --}}
  <title>@yield('title', 'WHY- Interior & Architect Design')</title>

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('voler/dist/assets/images/') }}" type="image/x-icon">
  
  
  {{-- Pastikan path CSS ini benar atau gunakan asset() helper --}}
  <link href="{{ asset('OnePage/css/style.css') }}" rel="stylesheet">

</head>

<body>

  {{-- BAGIAN HEADER (Sama untuk semua halaman) --}}
  <header id="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Yurivai Code</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
                <a href="#contact" class="btn-custom d-none d-lg-block">Contact Now</a>
            </div>
        </div>
    </nav>
  </header>

  {{-- BAGIAN KONTEN UTAMA (Akan diisi oleh file lain) --}}
  <main>
    @yield('content')
  </main>

  
  
  {{-- BAGIAN FOOTER (Sama untuk semua halaman) --}}
  <footer id="contact" class="footer">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <a href="#" class="footer-brand">Yurivai Code</a>
                  <p class="mt-3">A passionate team of designers and architects dedicated to creating spaces that inspire and elevate the human experience.</p>
                  <div class="social-links mt-4">
                      <a href="#"><i class="bi bi-facebook"></i></a>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <h5 class="footer-heading">Navigation</h5>
                  <div class="footer-links">
                      <a href="#about">About Us</a>
                      <a href="#services">Services</a>
                      <a href="#projects">Projects</a>
                      <a href="{{route('blog')}}">Blog</a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <h5 class="footer-heading">Contact Us</h5>
                  <p>
                      Yurivai Code,<br>
                      Karawang<br>
                      Indonesia <br><br>
                      <strong>Phone:</strong> +62 812 3456 7890<br>
                      <strong>Email:</strong> yurivai.code@gmail.com<br>
                  </p>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <h5 class="footer-heading">Join Our Newsletter</h5>
                  <p>Get the latest news, trends, and special offers.</p>
                  <form action="#" class="newsletter-form">
                      <div class="input-group">
                          <input type="email" class="form-control" placeholder="Your email address">
                          <button class="btn-submit" type="submit"><i class="bi bi-arrow-right"></i></button>
                      </div>
                  </form>
              </div>
          </div>

          <div class="copyright">
              &copy; Copyright <strong><span>Arfisa Code</span></strong>. All Rights Reserved
          </div>
      </div>
  </footer>

  {{-- SCRIPT JS (Sama untuk semua halaman) --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      new Swiper('.hero-slider', {
        loop: true, speed: 800, effect: 'fade',
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
      });
      AOS.init({ duration: 800, once: true });
    });
  </script>

</body>

</html>