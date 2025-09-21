@extends('layouts.app')

{{-- Mengatur judul khusus untuk halaman ini --}}
@section('title', 'Home - WHY Interior & Architect Design')

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

  <section id="stats" class="stats section-padding">
      {{-- Konten stats bisa ditambahkan di sini --}}
  </section>

@endsection