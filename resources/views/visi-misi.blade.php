@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Visi dan Misi</h2>
          <ol>
            <li>
              <a href="{{ url('/') }}">Profile</a>
            </li>
            <li>Visi dan Misi</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Kemahasiswaan Bhamada</h2>
          <p>Visi</p>
        </div>
        <div class="row content">
          <div class="col">
            <p>Berperan aktif dalam pengembangan pembinaan kemahasiswaan yang memiliki karakter unggul, kompetitif,
              profesional, mandiri, menguasai teknologi dan berjiwa enterpreneurship</p>
          </div>
        </div>
        <div class="section-title">
          <h2>Kemahasiswaan Bhamada</h2>
          <p>Misi</p>
        </div>
        <div class="row content">
          <div class="col">
            <ul>
              <li>
                <span>1.</span>
                Memberikan pendidikan karakter mahasiswa melalui kegiatan ekstrakurikuler mahasiswa dibidang
                penalaran, olahraga, sosial, seni budaya dan kewirausahaan
              </li>
              <li>
                <span>2.</span>
                Memberikan layanan kesejahteraan secara optimal dan profesional
              </li>
              <li>
                <span>3.</span>
                Mengembangkan sistem tata kelola mahasiswa yang terintegrasi
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection