@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri</h2>
          <ol>
            <li>Galeri</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/uploads/image/image-1.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Galeri 1</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/uploads/image/image-1.jpeg') }}" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Galeri 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/uploads/image/image-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Galeri 2</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/uploads/image/image-2.jpg') }}" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Galeri 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/uploads/image/image-3.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Galeri 3</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/uploads/image/image-3.jpeg') }}" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Galeri 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/uploads/image/image-4.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Galeri 4</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/uploads/image/image-4.jpg') }}" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Galeri 4"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
