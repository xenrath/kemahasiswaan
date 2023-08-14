@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Survei</h2>
          <ol>
            <li>
              <a href="{{ url('/') }}">Link</a>
            </li>
            <li>Survei</li>
          </ol>
        </div>
      </div>
    </section>

    <section id="survei" class="survei">
      <div class="container" data-aos="fade-up">
        <div class="entries">
          {{-- <article class="entry">
            <div class="entry-title">
              <h2>Selamat Datang di Survei Kepuasan Mahasiswa</h2>
              <p>Klik selanjutnya untuk mengisi survei</p>
            </div>
            <div class="entry-img">
              <img src="{{ asset('storage/uploads/image/survey.jpg') }}" alt="" class="img-fluid">
            </div>
          </article> --}}
          <article class="entry">
            <div class="entry-title">
              <h2>Data Diri Mahasiswa</h2>
            </div>
            <div class="entry-content">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form" autocomplete="off">
                <div class="form-group">
                  <label for="nama">Nama Mahasiswa</label>
                  <input type="text" class="form-control" name="nama" id="nama"
                    placeholder="masukan nama mahasiswa" required>
                </div>
                <div class="form-group">
                  <label for="nama">Jenis Kelamin</label>
                  <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="">Pilih</option>
                    <option value="">Laki-laki</option>
                    <option value="">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Mahasiswa</label>
                  <input type="text" class="form-control" name="nama" id="nama"
                    placeholder="masukan nama mahasiswa" required>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </article>
          <div class="float-right">
            <a href="#" class="btn-prev">Sebelumnya</a>
            <a href="#" class="btn-next">Selanjutnya</a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
