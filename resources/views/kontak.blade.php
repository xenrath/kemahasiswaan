@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Kontak</h2>
          <p>Kemahasiswaan</p>
        </div>
        <div class="info">
          <div>
            <h4>Bidang Kemahasiswaan</h4>
            <p>Gedung Rektorat STIKes Bhamada Lt.2</p>
            <p>Jl. Cut Nyak Dhien No.16, Kelurahan Kalisapu, Kecamatan Slawi</p>
          </div>
        </div>
        <div class="mt-5">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.1522489777435!2d109.11981835310614!3d-6.991342107592096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbef42471658d%3A0x883656d1325ef066!2sUniversitas%20Bhamada%20Slawi!5e0!3m2!1sid!2sid!4v1691982299459!5m2!1sid!2sid"
            style="border:0; width: 100%; height: 320px;" allowfullscreen="" loading="lazy" frameborder="0"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </main>
@endsection
