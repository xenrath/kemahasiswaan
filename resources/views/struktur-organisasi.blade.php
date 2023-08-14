@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Struktur Organisasi</h2>
          <ol>
            <li>
              <a href="{{ url('/') }}">Profile</a>
            </li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>Kemahasiswaan Bhamada</h2>
          <p>Struktur Organisasi</p>
        </div>
        <div class="portfolio-container">
          <div class="portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/uploads/image/struktur.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/uploads/image/struktur.png') }}" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
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
