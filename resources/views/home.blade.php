@extends('layouts.app')

{{-- Mengatur judul khusus untuk halaman ini --}}
@section('title', 'Home - Yurivai Code')

{{-- Mendefinisikan konten yang akan dimasukkan ke dalam @yield('content') di layout --}}
@section('content')

  <section id="hero" class="hero">
    <div class="swiper hero-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=2000&q=80);"></div>
        <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1616046229478-9901c5536a45?auto=format&fit=crop&w=2000&q=80);"></div>
        <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=2000&q=80);"></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <h1 class="hero-text" data-aos="zoom-in">We Create Amazing Designs</h1>
  </section>

  <section id="about" class="about section-padding">
    <div class="container about-v2">
      <div class="row"><div class="col-12 text-center" data-aos="fade-up"><div class="about-text-centered"><h2>We are creative Interior and Architect Design company</h2><p class="mt-3 text-muted">For over 10 years, we have been passionate about creating spaces that are not only beautiful but also functional and personal. Our team of experts works closely with each client to bring their vision to life.</p></div></div></div>
      <div class="row mt-5 pt-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="about-service-item"><i class="bi bi-bounding-box-circles icon"></i><h5>3D Space Designing</h5><p class="text-muted">Visualize your space with realistic 3D modeling and rendering.</p></div></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="about-service-item"><i class="bi bi-easel2 icon"></i><h5>Architectural Drawing</h5><p class="text-muted">Detailed and precise blueprints for a solid foundation.</p></div></div>
          <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300"><div class="about-service-item"><i class="bi bi-building-gear icon"></i><h5>Building The Space</h5><p class="text-muted">From concept to construction, we manage the entire process.</p></div></div>
      </div>
    </div>
  </section>
  
  {{-- <section id="services" class="services section-padding bg-secondary"> ... </section> --}}

  <section id="projects" class="projects section-padding">
      <div class="container">
          <div class="row"><div class="col-12 text-center" data-aos="fade-up"><h2 class="section-heading">Latest Project</h2></div></div>
          <div class="row"><div class="col-12"><ul class="project-filters" data-aos="fade-up"><li class="active">All Projects</li><li>Building</li><li>Interior</li><li>Renovation</li></ul></div></div>
          <div class="row g-4">
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="project-item"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 1"><div class="project-info"><h4>Minimalist Bedroom</h4><p>Interior</p></div></div></div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="project-item"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 2"><div class="project-info"><h4>Modern Villa</h4><p>Building</p></div></div></div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300"><div class="project-item"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 3"><div class="project-info"><h4>Cozy Living Room</h4><p>Renovation</p></div></div></div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="project-item"><img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 4"><div class="project-info"><h4>Luxury Residence</h4><p>Building</p></div></div></div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="project-item"><img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 5"><div class="project-info"><h4>Apartment Interior</h4><p>Interior</p></div></div></div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300"><div class="project-item"><img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 6"><div class="project-info"><h4>Kitchen Remodel</h4><p>Renovation</p></div></div></div>
          </div>
      </div>
  </section>
  
  <section id="blog" class="blog section-padding bg-secondary">
    <div class="container">
      <div class="row"><div class="col-12 text-center" data-aos="fade-up"><h2 class="section-heading">From Our Blog</h2><p class="section-subheading">Get the latest insights, tips, and trends in the world of interior design and architecture from our expert team.</p></div></div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="blog-card"><img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image"><div class="card-body"><p class="post-category">Inspiration</p><h4 class="post-title"><a href="blog-post-1.html" class="stretched-link">5 Timeless Color Palettes for Your Living Room</a></h4><div class="post-meta"><span>September 5, 2025</span></div></div></div></div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="blog-card"><img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image"><div class="card-body"><p class="post-category">Tips & Tricks</p><h4 class="post-title"><a href="blog-post-2.html" class="stretched-link">How to Maximize Space in a Small Apartment</a></h4><div class="post-meta"><span>September 2, 2025</span></div></div></div></div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300"><div class="blog-card"><img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image"><div class="card-body"><p class="post-category">Design News</p><h4 class="post-title"><a href="blog-post-3.html" class="stretched-link">The Rise of Sustainable Materials in Architecture</a></h4><div class="post-meta"><span>August 28, 2025</span></div></div></div></div>
      </div>
      <div class="text-center mt-5" data-aos="fade-up"><a href="{{route('blog')}}" class="btn-custom">Visit Our Blog</a></div>
    </div>
  </section>

  <section id="contact" class="contact section-padding bg-secondary">
    <div class="container" data-aos="fade-up">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                <h2 class="section-heading">Let's Build Your Dream Space</h2>
                <p class="text-muted mt-3 mb-4">Punya ide atau pertanyaan? Kami siap membantu. Hubungi kami melalui detail di bawah ini atau isi formulir di samping.</p>
                <div class="contact-info">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box-contact"><i class="bi bi-geo-alt-fill"></i></div>
                        <div class="ms-3"><strong>Alamat:</strong><br>Jl. Desain Utama No. 123, Jakarta, Indonesia</div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box-contact"><i class="bi bi-envelope-fill"></i></div>
                        <div class="ms-3"><strong>Email:</strong><br>contact@why-interior.com</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box-contact"><i class="bi bi-telephone-fill"></i></div>
                        <div class="ms-3"><strong>Telepon:</strong><br>+62 812 3456 7890</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                <div class="card border-0 shadow-sm p-4">
                    <form action="{{ route('massage.store') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                            <label for="name">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"  name="email" placeholder="Alamat Email" required>
                            <label for="email">Alamat Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control"  name="no_telp" placeholder="Nomor Telepon" required>
                            <label for="phone">Nomor Telepon</label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Tuliskan pesan Anda"  name="pesan" style="height: 150px" required></textarea>
                            <label for="message">Pesan / Detail Proyek</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg btn-custom-submit" type="submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>

@endsection

@push('styles')
<style>
    .icon-box-contact {
        width: 50px;
        height: 50px;
        background-color: #f8f9fa; /* Warna terang */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #0d6efd; /* Warna utama Bootstrap */
        flex-shrink: 0;
    }

    .form-floating > .form-control:focus,
    .form-floating > .form-control:not(:placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: .625rem;
    }
    
    .btn-custom-submit {
        background-color: #2c3e50; /* Warna gelap yang elegan */
        border-color: #2c3e50;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-custom-submit:hover {
        background-color: #34495e; /* Warna sedikit lebih terang saat hover */
        border-color: #34495e;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
</style>
@endpush