@extends('layout/template')

@section('content')


     <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">


          <div class="carousel-item active">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SpenyosiLite</span></h2>
              <p class="animate__animated animate__fadeInUp">LITERASI dalam Kamus Besar Bahasa Indonesia (KBBI) diartikan sebagai kemampuan menulis dan membaca kemampuan individu dalam mengolah informasi dan pengetahuan kecakapan hidup.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>


          <div class="carousel-item">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown">UNESCO</h2>
              <p class="animate__animated animate__fadeInUp">Literasi ialah seperangkat keterampilan nyata, terutama ketrampilan dalam membaca dan menulis yang terlepas dari konteks yang mana ketrampilan itu diperoleh serta siapa yang memperolehnya.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown">EDC</h2>
              <p class="animate__animated animate__fadeInUp">Literasi adalah kemampuan individu untuk menggunakan segenap potensi dan skill yang dimiliki dalam hidupnya.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
          </a>

        </div>
    </section>

    <section id="icon-boxes" class="icon-boxes d-flex justify-content-center align-items-center">
      <div class="container ">

        <div class="">
          <div class="row ">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-house-door"></i></i></div>
                <h4 class="title"><a href="/">Home</a></h4>
                <p class="description">Halaman Home Utama Website Spenyosilite.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-book"></i></i></div>
                <h4 class="title"><a href="/literasi">Literasi</a></h4>
                <p class="description">Halaman Kumpulan Literasi Website Spenyosilite.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-pen"></i></i></div>
                <h4 class="title"><a href="/setor">Setor</a></h4>
                <p class="description">Halaman Setor Website Spenyosilite.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></i></div>
                <h4 class="title"><a href="/setor">Spenyosi</a></h4>
                <p class="description">Website Utamas SMPN 1 Yosowilangun</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Spenyosi Lite</h2>
          <p>Sepenyosi Literasi, adalah gerakan literasi yang dipeloposi oleh pemerintah dan didukung sepenuhnya oleh pendidikan terutama di SMP Negri 1 Yosowilangun sehubungan dengan merendahnya minat baca yang ada di Indonesia</p>
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="http://smp1yoso.blogspot.com/" target="_blank">Spenyosi Blog</a></h4>
              <p>Website Utama SMP Negri 1 Yosowilangun Dapat di Kunjungi di sini</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="https://www.indonesiana.id/read/62891/satria-dharma-pahlawan-literasi-dari-surabaya" target="_blank">Literasi Indonesia</a></h4>
              <p>Info Tentang Literasi Indonesia Dapat Dikungi di sini</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>SpenyosiLIte</h3>
            <p> Bersama-sama meningkatkan minat baca siswa dan seluruh warga Indonesia dengan literasi pagi</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="/literasi">Bacas</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.4470993889236!2d113.30783371415959!3d-8.23451728495489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd66397cd176545%3A0x74c2d901c5c6d94c!2sSMP%20Negeri%201%20Yosowilangun!5e1!3m2!1sid!2sid!4v1621354174777!5m2!1sid!2sid" width="100%" height="340" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          </div>

        </div>

      </div>
    </section>

@endsection
