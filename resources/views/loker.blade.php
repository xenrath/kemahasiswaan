@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Loker</h2>
          <ol>
            <li>Loker</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="loker" class="loker">
      <div class="container">
        <div class="section-title">
          <h2>Loker</h2>
          <p>Daftar Lowongan Pekerjaan</p>
        </div>
        <div class="icon-box">
          <h4>
            <a href="#">[ 12 Juni 2023 ] Kota Tegal, Kabupaten Tegal dan Kabupaten Brebes - Lowongan PT.BPR
              Arthapuspa Mega</a>
          </h4>
          <p>Dalam rangka menjalankan misi ke-5 yaitu menjadi tempat bagi karyawan untuk pengembangan karir dan
            peningkatan kesejahteraan. Dari Bank Arthapuspa Mega sedang mengembangkan wila...</p>
        </div>
        <div class="icon-box">
          <h4>
            <a href="#">[ 28 Juni 2021 ] Pemalang - Klinik Pratama Assalam Medika Warungpring Pemalang (UGD 24 Jam,
              Rawat Inap, Persalinan, Laboratorium, Farmasi)</a>
          </h4>
          <p>Kami membuka kesempatan berkarir bagi anda yang ingin bergabung bersama kami dengan kualifikasi dan
            persyaratan sbb:</p>
        </div>
        <div class="icon-box">
          <h4>
            <a href="#">[ 24 Juni 2021 ] SLAWI KAB.TEGAL - PENGADAAN TENAGA HARIAN LEPAS (THL) RSUD Dr. SOESELO
              SLAWI KAB. TEGAL 2021</a>
          </h4>
          <p>Berdasarkan Kondisi kedaruratan Covid-19 di RSUD dr Soeselo Slawi Kebapaten Tegal dan meningkatnya pasien
            Covid-19, maka mendesak untuk segera dilakukan pemenuhan Tenaga Kesehat...</p>
        </div>
        <div class="loker-pagination">
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
    </section>
  </main>
@endsection
