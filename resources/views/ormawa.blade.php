@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Ormawa</h2>
          <ol>
            <li>Ormawa</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="survei" class="survei">
      <div class="container">
        <div class="section-title">
          <h2>Ormawa</h2>
          <p>Daftar Organisasi Mahasiswa</p>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 12px">No.</th>
                <th style="width: 80px">Logo</th>
                <th>Nama Organisasi</th>
                <th>Ketua</th>
                <th>Deskripsi</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align: center">1.</td>
                <td>
                  <img src="{{ asset('storage/uploads/image/logo-bidan.jpeg') }}" alt="" class="img-fluid"
                    width="60">
                </td>
                <td>HIMADAN - Himpunan Mahasiswa D-III Kebidanan</td>
                <td>-</td>
                <td></td>
                <td>Aktif</td>
              </tr>
              <tr>
                <td style="text-align: center">2.</td>
                <td>
                  <img src="{{ asset('storage/uploads/image/himika.jpeg') }}" alt="" class="img-fluid"
                    width="60">
                </td>
                <td>HIMIKA - Himpunan Mahasiswa S-1 Keperawatan</td>
                <td>-</td>
                <td></td>
                <td>Aktif</td>
              </tr>
              <tr>
                <td style="text-align: center">3.</td>
                <td>
                  <img src="{{ asset('storage/uploads/image/hifarda.jpeg') }}" alt="" class="img-fluid"
                    width="60">
                </td>
                <td>HIMAFARDA - Himpunan Mahasiswa S-1 Farmasi</td>
                <td>-</td>
                <td></td>
                <td>Aktif</td>
              </tr>
              <tr>
                <td style="text-align: center">4.</td>
                <td>
                  <img src="{{ asset('storage/uploads/image/himasada.jpeg') }}" alt="" class="img-fluid"
                    width="60">
                </td>
                <td>HIMASADA - Himpunan Mahasiswa D-IV K3</td>
                <td>-</td>
                <td></td>
                <td>Aktif</td>
              </tr>
            </tbody>
          </table>
          <div class="survei-pagination">
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
      </div>
    </section>
  </main>
@endsection
