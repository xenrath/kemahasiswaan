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
        <div class="float-right">
          <a href="{{ url('hasil-survei') }}" class="btn-hasil">Lihat Hasil Survei</a>
        </div>
        <div class="entries">
          <div class="slideshow-container">
            <article class="entry">
              <div class="surveiSlides">
                <div class="entry-title">
                  <h2>Selamat Datang di Survei Kepuasan Mahasiswa</h2>
                  <p>Klik selanjutnya untuk mengisi survei</p>
                </div>
                <div class="entry-content">
                  <img src="{{ asset('storage/uploads/image/survey.jpg') }}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="surveiSlides">
                <div class="entry-title">
                  <h2>Data Diri Mahasiswa</h2>
                </div>
                <div class="entry-content">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                    autocomplete="off">
                    <div class="form-group">
                      <label for="nama">Nama Mahasiswa</label>
                      <input type="text" class="form-control" name="nama" id="nama"
                        placeholder="masukan nama mahasiswa" required>
                    </div>
                    <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <select class="form-select" name="jk" id="jk" required>
                        <option value="">- Pilih -</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="prodi">Program Studi</label>
                      <select class="form-select" name="prodi" id="prodi" required>
                        <option value="">- Pilih -</option>
                        <option value="1">S1 Ilmu Keperawatan</option>
                        <option value="2">S1 Farmasi</option>
                        <option value="3">D4 Kesehatan dan Keselamatan Kerja</option>
                        <option value="4">D3 Kebidanan</option>
                        <option value="5">D3 Keperawatan</option>
                        <option value="6">Profesi Ners</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" class="form-control" name="nim" id="nim" placeholder="masukan nim"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="semester">Semester</label>
                      <input type="text" class="form-control" name="semester" id="semester"
                        placeholder="masukan semester" required>
                    </div>
                    <div class="form-group">
                      <label for="thn_masuk">Angkatan / Tahun Masuk</label>
                      <input type="text" class="form-control" name="thn_masuk" id="thn_masuk"
                        placeholder="masukan angkatan / tahun masuk" required>
                    </div>
                  </form>
                </div>
              </div>
              <div class="surveiSlides">
                <div class="entry-title">
                  <h2>Petunjuk Umum</h2>
                </div>
                <div class="entry-content">
                  <ol>
                    <li>Angket ini digunakan dengan tujuan untuk mengukur tingkat kepuasan mahasiswa terhadap pelayanan
                      di
                      STIKES Bhamada Slawi dalam layanan akademik dan non akademik.</li>
                    <li>Saudara mendapatkan kepercayaan terpilih sebagai responden, dimohon untuk mengisi seluruh
                      instrumen
                      ini sesuai dengan pengalaman, pengetahuan, persepsi, dan keadaan yang sebenarnya.</li>
                    <li>Partisipasi Saudara untuk mengisi instrumen ini secara objektif sangat besar artinya bagi STIKES
                      Bhamada Slawi guna mendapatkan masukan yang akurat dalam rangka perbaikan dan peningkatan
                      pelayanan
                      kegiatan akademik dan kegiatan kemahasiswaan kedepan.</li>
                    <li>Jawaban Saudara dijamin kerahasiaan dan tidak memiliki dampak negatif dalam bentuk apapun.</li>
                    <li>Instrumen ini terdiri dari seperangkat pertanyaan atau pernyataan untuk mengukur: <i>(1)
                        tangibles
                        (2)
                        assurance (3) reliability (4). responsiveness (5) empathy (6) Information system</i></li>
                    <li>Pilihlah salah satu dari alternatif yang disediakan dengan cara memilih salau satu nilai pada
                      pilihan
                      yang tersedia.</li>
                    <li>Ada empat alternatif jawaban yang dapat saudara pilih, yaitu:
                      <br>
                      <ul>
                        <li>1 = Tidak Memuaskan</li>
                        <li>2 = Kurang Memuaskan</li>
                        <li>3 = Cukup Memuaskan</li>
                        <li>4 = Memuaskan</li>
                        <li>5 = Sangat Memuaskan</li>
                      </ul>
                      Pilihlah jawaban dengan ceramat dan teliti penuh dengan kejujuran.
                    </li>
                  </ol>
                </div>
              </div>
              <div class="surveiSlides">
                <div class="entry-title">
                  <h2>Survei Kepuasan Mahasiswa</h2>
                </div>
                <div class="entry-content">
                  <table>
                    <tr>
                      <th colspan="2">A. Dosen</th>
                    </tr>
                    <tr>
                      <th>Pertanyaan</th>
                      <th style="width: 300px">Pilihan</th>
                    </tr>
                    <tr>
                      <td>1. Keandalan dan kemampuan dosen dalam memberikan pelayanan terhadap mahasiswa.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2. Daya tanggap dosen dalam membantu mahasiswa dan memberikan jasa dengan cepat.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3. Kepastian bahwa pelayanan dosen sesuai dengan ketentuan.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4. Kepedulian dosen dalam memberi perhatian kepada mahasiswa.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th colspan="2">B. TENAGA KEPENDIDIKAN</th>
                    </tr>
                    <tr>
                      <th>Pertanyaan</th>
                      <th style="width: 300px">Pilihan</th>
                    </tr>
                    <tr>
                      <td>1. Keandalan dan kemampuan tenaga kependidikan dalam memberikan pelayanan terhadap mahasiswa.
                      </td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2. Daya tanggap tenaga kependidikan dalam membantu mahasiswa dan memberikan jasa dengan cepat.
                      </td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3. Kepastian bahwa pelayanan tenaga kependidikan sesuai dengan ketentuan.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4. Kepedulian tenaga kependidikan dalam memberi perhatian kepada mahasiswa.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th colspan="2">C. PENGELOLA</th>
                    </tr>
                    <tr>
                      <th>Pertanyaan</th>
                      <th style="width: 300px">Pilihan</th>
                    </tr>
                    <tr>
                      <td>1. Keandalan dan kemampuan pengelola dalam memberikan pelayanan terhadap mahasiswa.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2. Daya tanggap pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3. Kepastian bahwa pelayanan pengelola sesuai dengan ketentuan.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4. Kepedulian pengelola dalam memberi perhatian kepada mahasiswa.</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th colspan="2">D. SARANA & PRASARANA</th>
                    </tr>
                    <tr>
                      <th>Pertanyaan</th>
                      <th style="width: 300px">Pilihan</th>
                    </tr>
                    <tr>
                      <td>1. Kecukupan</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2. Aksesibilitas</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3. Kualitas Sarana Prasarana</td>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Tidak Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Kurang Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cukup Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Memuaskan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Sangat Memuaskan
                          </label>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </article>
          </div>
          <div class="float-right">
            <button type="button" class="btn-prev" onclick="plusSlides(-1)">Sebelumnya</button>
            <button type="button" class="btn-next" onclick="plusSlides(1)">Selanjutnya</button>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("surveiSlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
@endsection
