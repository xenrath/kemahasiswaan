<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan | Universitas Bhamada Slawi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('sailor/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('sailor/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('sailor/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('sailor/assets/css/style.css') }}" rel="stylesheet">
  

</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto">
        <img src="{{ asset('storage/uploads/logo.png') }}" alt="" class="img-fluid">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>
          </li>
          <li class="dropdown">
            <a href="#"
              class="{{ request()->is('visi-misi') || request()->is('struktur-organisasi') ? 'active' : '' }}">
              <span>Profile</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li>
                <a href="{{ url('visi-misi') }}" class="{{ request()->is('visi-misi') ? 'active' : '' }}">Visi dan
                  Misi</a>
              </li>
              <li>
                <a href="{{ url('struktur-organisasi') }}"
                  class="{{ request()->is('struktur-organisasi') ? 'active' : '' }}">Struktur Organisasi</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="{{ request()->is('survei') ? 'active' : '' }}">
              <span>Link</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li>
                <a href="http://kemahasiswaan.bhamada.ac.id/tak/" target="_blank">TAK Mahasiswa</a>
              </li>
              <li>
                <a href="http://kemahasiswaan.bhamada.ac.id/beasiswa/" target="_blank">Beasiswa</a>
              </li>
              <li>
                <a href="http://kemahasiswaan.bhamada.ac.id/eproposal/" target="_blank">eProposal</a>
              </li>
              <li>
                <a href="https://tracer.bhamada.ac.id/?p=beranda" target="_blank">Tracer Study</a>
              </li>
              <li>
                <a href="{{ url('survei') }}" class="{{ request()->is('survei') ? 'active' : '' }}">Survei
                  Kepuasan</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{ url('ormawa') }}" class="{{ request()->is('ormawa') ? 'active' : '' }}">Ormawa</a>
          </li>
          <li>
            <a href="{{ url('loker') }}" class="{{ request()->is('loker') ? 'active' : '' }}">Loker</a>
          </li>
          <li>
            <a href="{{ url('kontak') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
          </li>
          <li>
            <a href="{{ url('galeri') }}" class="{{ request()->is('galeri') ? 'active' : '' }}">Galeri</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  @yield('content')

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>
                Kemahasiswaan
                <br>
                <p>Universitas Bhamada</p>
              </h3>
              <div class="social-links mt-3">
                <a href="https://twitter.com/bembhamada" class="twitter" target="_blank">
                  <i class="bx bxl-twitter"></i>
                </a>
                <a href="https://facebook.com" class="facebook" target="_blank">
                  <i class="bx bxl-facebook"></i>
                </a>
                <a href="https://www.instagram.com/bembhamada" class="instagram" target="_blank">
                  <i class="bx bxl-instagram"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCrhLdBve8yx3dNj747P4GfQ" class="youtube" target="_blank">
                  <i class="bx bxl-youtube"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Cepat</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('/') }}">Beranda</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('ormawa') }}">Ormawa</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('loker') }}">Loker</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('kontak') }}">Kontak</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('galeri') }}">Galeri</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Profile</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('visi-misi') }}">Visi dan Misi</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="http://kemahasiswaan.bhamada.ac.id/tak/" target="_blank">TAK Mahasiswa</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="http://kemahasiswaan.bhamada.ac.id/beasiswa/" target="_blank">Beasiswa</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="http://kemahasiswaan.bhamada.ac.id/eproposal/" target="_blank">eProposal</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="https://tracer.bhamada.ac.id/?p=beranda" target="_blank">Tracer Study</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ url('survei') }}" class="{{ request()->is('survei') ? 'active' : '' }}">Survei
                  Kepuasan</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright
        <a href="">
          <strong><span>IT Bhamada</span></strong>
        </a>
        . All Rights Reserved
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('sailor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('sailor/assets/js/main.js') }}"></script>

</body>

</html>
