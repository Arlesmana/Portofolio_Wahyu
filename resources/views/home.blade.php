\<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WHY- Interior & Architect Design</title>

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    :root {
      --bg-light: #FDFBFA;      
      --bg-secondary: #F6F1EC;  
      --text-dark: #2B2A29;     
      --text-muted: #7A7A7A;    
      --accent-color: #5C4B42;  
      --border-color: #EAE0D5;  
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-light);
      color: var(--text-dark);
    }
    
    h1, h2, h3, h4, h5, h6 { font-weight: 700; }
    .section-padding { padding: 100px 0; }
    .section-heading { font-size: 2.5rem; margin-bottom: 1rem; }
    .section-subheading { color: var(--text-muted); max-width: 600px; margin: 0 auto 3rem auto; }
    .btn-custom { background-color: var(--accent-color); color: white; border-radius: 12px; padding: 12px 28px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; }
    .btn-custom:hover { background-color: #4a3c35; color: white; }
    .btn-outline-custom { background-color: transparent; color: var(--accent-color); border: 2px solid var(--accent-color); border-radius: 12px; padding: 12px 28px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; }
    .btn-outline-custom:hover { background-color: var(--accent-color); color: white; }

    /* Header */
    .navbar { background-color: var(--bg-light); padding: 1.5rem 0; border-bottom: 1px solid var(--border-color); }
    .navbar-brand { font-weight: 700; font-size: 1.8rem; }
    .navbar .nav-link { color: var(--text-dark); font-weight: 500; margin: 0 1rem; }
    .navbar .nav-link:hover, .navbar .nav-link.active { color: var(--accent-color); }

    /* Hero Slider */
    .hero { position: relative; height: 90vh; display: flex; align-items: center; justify-content: center; padding: 0; }
    .hero-slider.swiper { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    .hero-slider .swiper-slide { position: relative; background-size: cover; background-position: center; }
    .hero-slider .swiper-slide::after { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); }
    .hero-text { position: relative; z-index: 10; text-align: center; color: white; font-size: 4rem; font-weight: 700; text-shadow: 2px 2px 8px rgba(0,0,0,0.6); }
    .hero .swiper-pagination-bullet { background-color: rgba(255, 255, 255, 0.7); width: 10px; height: 10px; opacity: 1; transition: all 0.3s ease; }
    .hero .swiper-pagination-bullet-active { background-color: white; width: 25px; border-radius: 5px; }

    /* About Section (V2) */
    .about-v2 .about-text-centered { max-width: 700px; margin-left: auto; margin-right: auto; }
    .about-v2 .about-text-centered h2 { font-size: 2.2rem; }
    .about-service-item { text-align: center; margin-bottom: 2rem; }
    .about-service-item .icon { font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem; }
    .about-service-item h5 { font-weight: 600; font-size: 1.1rem; }
    
    /* Services Section (V2) */
    .bg-secondary { background-color: var(--bg-secondary); }
    .service-card-v2 { position: relative; height: 350px; border-radius: 15px; overflow: hidden; color: white; background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 25px; transition: all 0.4s ease; }
    .service-card-v2::after { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85), transparent 50%); transition: background 0.4s ease; }
    .service-card-v2:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
    .service-card-v2:hover::after { background: linear-gradient(to top, rgba(0,0,0,0.95), transparent 40%); }
    .service-card-v2 .card-content { position: relative; z-index: 2; transition: transform 0.4s ease; }
    .service-card-v2:hover .card-content { transform: translateY(-10px); }
    .service-card-v2 h4 { font-weight: 600; font-size: 1.5rem; margin: 0; }

    /* Project Section */
    .project-filters { list-style: none; padding: 0; margin: 0 auto 2.5rem auto; text-align: center; }
    .project-filters li { display: inline-block; margin: 0 15px; font-weight: 600; cursor: pointer; transition: color 0.3s ease; color: var(--text-muted); }
    .project-filters li:hover, .project-filters li.active { color: var(--accent-color); }
    .project-item { position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    .project-item img { transition: transform 0.4s ease; }
    .project-item:hover img { transform: scale(1.05); }
    .project-item .project-info { position: absolute; bottom: 0; left: 0; width: 100%; padding: 25px 20px; background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); color: white; transform: translateY(100%); transition: transform 0.4s ease; }
    .project-item:hover .project-info { transform: translateY(0); }
    .project-info h4 { font-weight: 600; font-size: 1.3rem; }
    .project-info p { margin-bottom: 0; opacity: 0.8; font-size: 0.9rem; }
    
    /* Blog Section */
    .blog-card { background-color: white; border: 1px solid var(--border-color); border-radius: 15px; overflow: hidden; transition: all 0.3s ease; height: 100%; position: relative; }
    .blog-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.07); }
    .blog-card .card-body { padding: 25px; }
    .blog-card .post-category { font-size: 0.8rem; font-weight: 600; color: var(--accent-color); text-transform: uppercase; letter-spacing: 0.5px; }
    .blog-card .post-title { font-size: 1.3rem; font-weight: 600; margin: 0.5rem 0 1rem 0; }
    .blog-card .post-title a { text-decoration: none; color: var(--text-dark); transition: color 0.3s ease; }
    .blog-card .post-title a:hover { color: var(--accent-color); }
    .blog-card .post-meta { margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--border-color); display: flex; align-items: center; font-size: 0.9rem; color: var(--text-muted); }

    /* Footer */
    .footer { background-color: var(--bg-secondary); padding: 80px 0 0 0; font-size: 0.9rem; color: var(--text-muted); }
    .footer .footer-brand { font-weight: 700; font-size: 1.8rem; color: var(--text-dark); text-decoration: none; margin-bottom: 1rem; display: block; }
    .footer .footer-heading { font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1.5rem; }
    .footer .footer-links a { display: block; margin-bottom: 0.8rem; color: var(--text-muted); text-decoration: none; transition: color 0.3s ease; }
    .footer .footer-links a:hover { color: var(--accent-color); }
    .footer .social-links a { font-size: 1.5rem; color: var(--text-muted); text-decoration: none; margin-right: 1rem; transition: color 0.3s ease; }
    .footer .social-links a:hover { color: var(--accent-color); }
    .footer .newsletter-form .form-control { border-radius: 10px; border: 1px solid var(--border-color); padding: 10px; }
    .footer .newsletter-form .btn-submit { background: var(--accent-color); color: white; border: 0; border-radius: 10px; padding: 10px 20px; transition: background-color 0.3s; }
    .footer .newsletter-form .btn-submit:hover { background: #4a3c35; }
    .footer .copyright { border-top: 1px solid var(--border-color); padding: 2rem 0; margin-top: 4rem; text-align: center; }
    
  </style>
</head>

<body>

  <header id="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Why Design</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <a href="#contact" class="btn-custom d-none d-lg-block">Contact Now</a>
            </div>
        </div>
    </nav>
  </header>

  <main>

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
    
    <section id="services" class="services section-padding bg-secondary">
      <div class="container">
        <div class="row"><div class="col-12 text-center" data-aos="fade-up"><h2 class="section-heading">Our Speciality Services</h2></div></div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="service-card-v2" style="background-image: url('images/service-1.jpg');"><div class="card-content"><h4>Design Creation</h4></div></div></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="service-card-v2" style="background-image: url('images/service-2.jpg');"><div class="card-content"><h4>Custom Work</h4></div></div></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300"><div class="service-card-v2" style="background-image: url('images/service-3.jpg');"><div class="card-content"><h4>Renovation</h4></div></div></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400"><div class="service-card-v2" style="background-image: url('images/service-4.jpg');"><div class="card-content"><h4>Architect Design</h4></div></div></div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up"><a href="#" class="btn-outline-custom">See all Services</a></div>
      </div>
    </section>

    <section id="projects" class="projects section-padding">
        <div class="container">
            <div class="row"><div class="col-12 text-center" data-aos="fade-up"><h2 class="section-heading">Latest Project</h2></div></div>
            <div class="row"><div class="col-12"><ul class="project-filters" data-aos="fade-up"><li class="active">All Projects</li><li>Building</li><li>Interior</li><li>Renovation</li></ul></div></div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="project-item"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 1"><div class="project-info"><h4>Minimalist Bedroom</h4><p>Interior</p></div></div></div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="project-item"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 2"><div class="project-info"><h4>Modern Villa</h4><p>Building</p></div></div></div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300"><div class="project-item"><img src="https://images.unsplash.com/photo-1505691938895-1758d7FEB511?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Project 3"><div class="project-info"><h4>Cozy Living Room</h4><p>Renovation</p></div></div></div>
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
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="blog-card"><img src="https://images.unsplash.com/photo-1556702585-A5786c13523d?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image"><div class="card-body"><p class="post-category">Tips & Tricks</p><h4 class="post-title"><a href="blog-post-2.html" class="stretched-link">How to Maximize Space in a Small Apartment</a></h4><div class="post-meta"><span>September 2, 2025</span></div></div></div></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300"><div class="blog-card"><img src="https://images.unsplash.com/photo-1596178065887-1198b614c8b2?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image"><div class="card-body"><p class="post-category">Design News</p><h4 class="post-title"><a href="blog-post-3.html" class="stretched-link">The Rise of Sustainable Materials in Architecture</a></h4><div class="post-meta"><span>August 28, 2025</span></div></div></div></div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up"><a href="blog.html" class="btn-custom">Visit Our Blog</a></div>
      </div>
    </section>

    <section id="stats" class="stats section-padding">
        </section>

  </main>
  
  <footer id="contact" class="footer">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <a href="#" class="footer-brand">Why</a>
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
                      <a href="#blog">Blog</a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <h5 class="footer-heading">Contact Us</h5>
                  <p>
                      123 Design Street,<br>
                      Jakarta, 12345<br>
                      Indonesia <br><br>
                      <strong>Phone:</strong> +62 812 3456 7890<br>
                      <strong>Email:</strong> contact@elevate.com<br>
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
              &copy; Copyright <strong><span>Elevate</span></strong>. All Rights Reserved
          </div>
      </div>
  </footer>

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