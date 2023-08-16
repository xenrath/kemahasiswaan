@extends('layout.app')

@section('content')
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Survei</h2>
          <ol>
            <li>
              <a href="{{ url('/') }}">Survei</a>
            </li>
            <li>Hasil Survei</li>
          </ol>
        </div>
      </div>
    </section>

    <section id="survei" class="survei">
      <div class="container" data-aos="fade-up">
        <div class="entries">
          <div class="slideshow-container">
            <article class="entry">
              <div class="entry-title">
                <h2>Hasil Survei Kepuasan Mahasiswa</h2>
              </div>
              <div class="entry-content">
                <table>
                  <tr>
                    <th rowspan="2" style="width: 20px; text-align: center">No.</th>
                    <th rowspan="2">Aspek yang diatur</th>
                    <th colspan="4">Tingkat Kepuasan Mahasiswa</th>
                  </tr>
                  <tr>
                    <th style="width: 100px">Sangat Baik</th>
                    <th style="width: 100px">Baik</th>
                    <th style="width: 100px">Cukup</th>
                    <th style="width: 100px">Kurang</th>
                  </tr>
                  <tr>
                    <td style="text-align: center"><i>1</i></td>
                    <td style="text-align: center"><i>2</i></td>
                    <td style="text-align: center"><i>3</i></td>
                    <td style="text-align: center"><i>4</i></td>
                    <td style="text-align: center"><i>5</i></td>
                    <td style="text-align: center"><i>6</i></td>
                  </tr>
                  <tr>
                    <td style="text-align: center">1</td>
                    <td>Dosen:
                      <ul>
                        <li>Keandalan dan kemampuan dosen dalam memberikan pelayanan terhadap mahasiswa.</li>
                        <li>Daya tanggap dosen dalam membantu mahasiswa dan memberikan jasa dengan cepat.</li>
                        <li>Kepastian bahwa pelayanan dosen sesuai dengan ketentuan.</li>
                        <li>Kepedulian dosen dalam memberi perhasian kepada mahasiswa.</li>
                      </ul>
                    </td>
                    <td>53.7 %</td>
                    <td>38.8 %</td>
                    <td>4.6 %</td>
                    <td>0.4 %</td>
                  </tr>
                  <tr>
                    <td style="text-align: center">1</td>
                    <td>Tenaga Kependidikan:
                      <ul>
                        <li>Keandalan tenaga kependidikan dalam memberikan pelayanan terhadap mahasiswa.</li>
                        <li>Daya tanggap tenaga kependidikan dalam membantu mahasiswa dan memberikan jasa dengan cepat.</li>
                        <li>Kepastian bahwa pelayanan tenaga kependidikan sesuai dengan ketentuan.</li>
                        <li>Kepedulian tenaga kependidikan dalam memberi perhasian kepada mahasiswa.</li>
                      </ul>
                    </td>
                    <td>56.7 %</td>
                    <td>36.1 %</td>
                    <td>4.4 %</td>
                    <td>0.4 %</td>
                  </tr>
                  <tr>
                    <td style="text-align: center">1</td>
                    <td>Pengelola:
                      <ul>
                        <li>Keandalan pengelola dalam memberikan pelayanan terhadap mahasiswa.</li>
                        <li>Daya tanggap pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.</li>
                        <li>Kepastian bahwa pelayanan pengelola sesuai dengan ketentuan.</li>
                        <li>Kepedulian pengelola dalam memberi perhasian kepada mahasiswa.</li>
                      </ul>
                    </td>
                    <td>53.5 %</td>
                    <td>34.9 %</td>
                    <td>8.7 %</td>
                    <td>0.4 %</td>
                  </tr>
                  <tr>
                    <td style="text-align: center">1</td>
                    <td>Sarana dan Prasarana:
                      <ul>
                        <li>Kecukupan.</li>
                        <li>Aksesibilitas.</li>
                        <li>Kualitas sarana dan prasarana.</li>
                      </ul>
                    </td>
                    <td>55.5 %</td>
                    <td>34 %</td>
                    <td>7.7 %</td>
                    <td>0.4 %</td>
                  </tr>
                  <tr>
                    <th colspan="2" style="text-align: center">Jumlah</th>
                    <td>(a) = 219</td>
                    <td>(b) = 144</td>
                    <td>(c) = 25</td>
                    <td>(d) = 2</td>
                  </tr>
                </table>
                <div class="mt-3">
                  <p>1. Grafik Responden Kepuasan Mahasiswa Terhadap Dosen</p>
                </div>
              </div>
            </article>
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
