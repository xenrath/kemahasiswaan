@extends('layout.app')

@section('content')
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        @php
          $slide = [
              [
                  'judul' => 'Universitas Bhamada Slawi Menggelar Pemotongan Hewan Kurban',
                  'gambar' => 'image/image-1.jpeg',
              ],
              [
                  'judul' => 'Lowongan Kerja RSU Dera As-Syifa',
                  'gambar' => 'image/image-2.jpg',
              ],
          ];
        @endphp
        @foreach ($slide as $key => $s)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
            style="background-image: url({{ asset('storage/uploads/' . $s['gambar']) }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">{{ $s['judul'] }}</h2>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca
                  Selengkapnya</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section>

  <main id="main">
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Pengumuman</h2>
          <p>Pengumuman Seputar Bhamada</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-megaphone"></i>
              <h4>
                <a href="#">Tracer Study Tahun 2021</a>
              </h4>
              <p>29 Mei 2020</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-megaphone"></i>
              <h4>
                <a href="#">Bantuan UKT/SPP Semester Genap</a>
              </h4>
              <p>29 Mei 2020</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-megaphone"></i>
              <h4>
                <a href="#">Webinar Bursa Kerja Khusus</a>
              </h4>
              <p>29 Mei 2020</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Berita</h2>
          <p>Berita Terkini</p>
        </div>
        <div class="row">
          <div class="col-lg-8 entries">
            @php
              $beritas = [
                  [
                      'judul' => 'Universitas Bhamada Slawi Menggelar Pemotongan Hewan Qurban',
                      'isi' => 'Dalam rangka merayakan Hari Raya Idul Adha 1444 Hijriyah, Universitas Bhamada Slawi  menggelar pemotongan hewan kurban,  pada  hari Sabtu (01/07/2023). Pemotongan hewan kurban sebanyak 2 ekor sapi dan 4 ekor kambing dilakukan di lapangan Universitas Bhamada Slawi. Daging kurban yang telah dicacah panitia dan menghasilkan sekitar 200 kantong dan kemudian dibagikan menggunakan kupon kepada ratusan warga termasuk tukang parkir & tukang becak yang ada di lingkungan kampus.',
                      'tanggal' => '2023-07-04',
                      'dibuat' => 'Admin',
                      'gambar' => 'image/image-1.jpeg',
                  ],
                  [
                      'judul' => 'Lowongan Kerja RSU Dera As-Syifa',
                      'isi' => 'Assalamualaikum wr.wb. Sehubungan dengan dibukanya perluasan ruang rawat inap dan kebutuhan tenaga perawat di RS Dera As-Syifa. RS Dera As-Syifa membuka lowongan pekerajaan, untuk curiculum vitae dan lamaran lengkap dapat dikirim email ke rsuderaassyifa@gmail.com dapat di kirimkan via kantor atau datang langsung ke RS Dera As-Syifa,Jl. Merdeka No.191 Banjarharjo Brebes, Telp 085786201307 (Retno Dwi Utami, S.Psi).',
                      'tanggal' => '2023-05-08',
                      'dibuat' => 'Admin',
                      'gambar' => 'image/image-2.jpg',
                  ],
              ];
            @endphp
            @foreach ($beritas as $berita)
              <article class="entry">
                <div class="entry-img">
                  <img src="{{ asset('storage/uploads/' . $berita['gambar']) }}" alt="" class="img-fluid">
                </div>
                <h2 class="entry-title">
                  <a href="">{{ $berita['judul'] }}</a>
                </h2>
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-person"></i>
                      <a href="">{{ $berita['dibuat'] }}</a>
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-clock"></i>
                      <a href="">
                        <time
                          datetime="{{ $berita['tanggal'] }}">{{ date('d M Y', strtotime($berita['tanggal'])) }}</time>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>{{ $berita['isi'] }}</p>
                  <div class="read-more">
                    <a href="blog-single.html">Baca Selengkapnya</a>
                  </div>
                </div>
              </article>
            @endforeach
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active">
                  <a href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Cari Berita</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit">
                    <i class="bi bi-search"></i>
                  </button>
                </form>
              </div>
              <h3 class="sidebar-title">Berita Lainnya</h3>
              <div class="sidebar-item recent-posts">
                @php
                  $lainnya = [
                      [
                          'judul' => 'Lomba Puisi Tingkat Nasional Untuk Mahasiswa Memperingati Hari Lahir Pancasila',
                          'gambar' => 'image/image-3.jpeg',
                          'tanggal' => '2023-05-20',
                      ],
                      [
                          'judul' => 'Zoom Webinar Dengan Tema Peran Emotional Intelligence dalam Public Speaking',
                          'gambar' => 'image/image-4.jpg',
                          'tanggal' => '2023-05-08',
                      ],
                  ];
                @endphp
                @foreach ($lainnya as $lain)
                  <div class="post-item clearfix">
                    <img src="{{ asset('storage/uploads/' . $lain['gambar']) }}" alt="" class="img-fluid">
                    <h4>
                      <a href="blog-single.html">{{ $lain['judul'] }}</a>
                    </h4>
                    <time datetime="{{ $lain['tanggal'] }}">{{ date('d M Y', strtotime($lain['tanggal'])) }}</time>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
