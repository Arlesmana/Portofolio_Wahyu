
@extends('layouts.app')

{{-- Mengatur judul khusus untuk halaman blog --}}
@section('title', 'Blog - Yurivai Code')

{{-- Mendefinisikan konten yang akan dimasukkan ke dalam @yield('content') di layout --}}
@section('content')

{{-- Bagian Header Halaman Blog --}}
<section class="blog-header section-padding bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-white" data-aos="fade-up">Our Blog</h1>
                <p class="text-white-50" data-aos="fade-up" data-aos-delay="100">
                    Get the latest insights, tips, and trends in the world of interior design and architecture.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Bagian Konten Blog dengan Pagination --}}
<section id="blog-page" class="blog section-padding">
    <div class="container">
        {{-- Daftar Postingan Blog --}}
        <div class="row g-4">
            {{-- Postingan 1 --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image">
                    <div class="card-body">
                        <p class="post-category">Inspiration</p>
                        <h4 class="post-title"><a href="#" class="stretched-link">5 Timeless Color Palettes for Your Living Room</a></h4>
                        <div class="post-meta"><span>September 5, 2025</span></div>
                    </div>
                </div>
            </div>
            {{-- Postingan 2 --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image">
                    <div class="card-body">
                        <p class="post-category">Tips & Tricks</p>
                        <h4 class="post-title"><a href="#" class="stretched-link">How to Maximize Space in a Small Apartment</a></h4>
                        <div class="post-meta"><span>September 2, 2025</span></div>
                    </div>
                </div>
            </div>
            {{-- Postingan 3 --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image">
                    <div class="card-body">
                        <p class="post-category">Design News</p>
                        <h4 class="post-title"><a href="#" class="stretched-link">The Rise of Sustainable Materials in Architecture</a></h4>
                        <div class="post-meta"><span>August 28, 2025</span></div>
                    </div>
                </div>
            </div>
            {{-- Postingan 4 --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image">
                    <div class="card-body">
                        <p class="post-category">Guides</p>
                        <h4 class="post-title"><a href="#" class="stretched-link">Choosing the Right Flooring for Every Room</a></h4>
                        <div class="post-meta"><span>August 25, 2025</span></div>
                    </div>
                </div>
            </div>
            {{-- Postingan 5 --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image">
                    <div class="card-body">
                        <p class="post-category">Inspiration</p>
                        <h4 class="post-title"><a href="#" class="stretched-link">Biophilic Design: Bringing Nature Indoors</a></h4>
                        <div class="post-meta"><span>August 22, 2025</span></div>
                    </div>
                </div>
            </div>
            {{-- Postingan 6 --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Blog post image">
                    <div class="card-body">
                        <p class="post-category">Tips & Tricks</p>
                        <h4 class="post-title"><a href="#" class="stretched-link">The Art of Lighting: Transforming Your Home's Ambiance</a></h4>
                        <div class="post-meta"><span>August 19, 2025</span></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navigasi Halaman / Pagination --}}
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</section>

@endsection