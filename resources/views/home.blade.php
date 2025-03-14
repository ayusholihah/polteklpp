@extends('layouts.adm-main')

@section('content')

<main class="main">
  
  <!-- Home Section -->
  <section id="home" >
    <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/carousel/slider1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/slider2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/slider3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/slider4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/slider5.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

  </section><!-- /Home Section -->

  <!-- About Section -->
  <section id="about" class="about section">/

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>KEUNGGULAN POLITEKNIK LPP</h2>
    </div><!-- End Section Title -->

    <div class="section-fullwidth">

      <div class="row">

        <div class="col" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/keunggulan/ixx.png" alt="">
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/keunggulan/ixx1.png" alt="">
        </div>
        
        <div class="col" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/keunggulan/ixx2.png" alt="">
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/keunggulan/ixx3.png" alt="">
        </div>

      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section dark-background">

    <img src="assets/img/gedung.jpg" alt="">

    <div class="container">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-9 text-center text-xl-start">
          <h3>Politeknik LPP Yogyakarta</h3>
          <p>Politeknik LPP berasal dari Lembaga Pendidikan Perkebunan (LPP), yang merupakan pengembangan dari Collage Gula Negara (CGN) yang didirikan pada tahun 1950 untuk menyiapkan Ahli Gula Indonesia. Pada tahun 1960, CGN bertransformasi menjadi Akademi Gula Negara (AGN), sebelum akhirnya pada tahun 1970 beralih menjadi LPP untuk mengembangkan SDM di berbagai sektor perkebunan, termasuk kelapa sawit, teh, kopi, dan lainnya.</p>
        </div>
        <div class="col-xl-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="/profile">Read More</a>
        </div>
      </div>

    </div>

  </section>
  <!-- /Call To Action Section -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>SERVICE</h2>
    </div><!-- End Section Title -->

    <div class="service-item">

      <div class="row">

        <div class="col" data-aos="fade-up" data-aos-delay="100">
          <a href="https://karir.polteklpp.ac.id/"><img src="assets/img/service/CAREER.png" alt=""></a>
          <h4><a href="https://karir.polteklpp.ac.id/" class="stretched-link">CAREER</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="200">
          <a href="http://edlink.id/login"><img src="assets/img/service/ELEARNING.png" alt="">
          <h4><a href="http://edlink.id/login" class="stretched-link">ELEARNING</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="300">
          <a href="https://lsp.polteklpp.ac.id/"><img src="assets/img/service/LSP.png" alt="">
          <h4><a href="https://lsp.polteklpp.ac.id/" class="stretched-link">LSP</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="400">
          <a href="http://103.129.174.20/mhs/"><img src="assets/img/service/PKL.png" alt="">
          <h4><a href="http://103.129.174.20/mhs/" class="stretched-link">PKL</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="500">
          <a href="http://103.129.174.19/slimslpp/"><img src="assets/img/service/PERPUSTAKAAN.png" alt="">
          <h4><a href="http://103.129.174.19/slimslpp/" class="stretched-link">PERPUSTAKAAN</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="600">
          <a href=https://pmb.polteklpp.ac.id/"><img src="assets/img/service/PMB.png" alt="">
          <h4><a href="https://pmb.polteklpp.ac.id/" class="stretched-link">PMB</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="700">
          <a href="http://siakad.polteklpp.ac.id"><img src="assets/img/service/SIAKAD.png" alt="">
          <h4><a href="http://siakad.polteklpp.ac.id" class="stretched-link">SIAKAD</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="800">
          <a href="http://103.129.174.20:8000/login"><img src="assets/img/service/SIM LEGALISIR.png" alt="">
          <h4><a href="http://103.129.174.20:8000/login" class="stretched-link">SIM LEGALISIR</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="900">
          <a href="http://103.129.174.20:8080/"><img src="assets/img/service/SIM UJIAN PERBAIKAN.png" alt="">
          <h4><a href="http://103.129.174.20:8080/" class="stretched-link">SIM UJIAN PERBAIKAN</a></h4>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="1000">
          <a href="http://tracer.polteklpp.ac.id"><img src="assets/img/service/TRACER STUDY.png" alt="">
          <h4><a href="http://tracer.polteklpp.ac.id" class="stretched-link">TRACER STUDY</a></h4>
        </div>
      </div>

    </div>
    
  </section><!-- /Services Section -->

  <section id="instagram">
    
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>GALERI INSTAGRAM</h2>
    </div><!-- End Section Title -->
    
    <div class="container">
      <div id="instagram-gallery">
          <!-- Embed code from Elfsight -->
          <!-- <script src="https://static.elfsight.com/platform/platform.js" async></script>
          <div class="elfsight-app-799e2b78-939e-4ac8-8c8e-f2c9c893f4ab" data-elfsight-app-lazy></div> -->
        <h4 class="instagram-text">
            <span class="instagram-icon">
              <a href="https://www.instagram.com/politekniklpp/" target="_blank"><i class="bi bi-instagram"></i>
            </span>
            <a href="https://www.instagram.com/politekniklpp/" target="_blank">@politekniklpp</a>
        </h4>
         <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
         <iframe src="//lightwidget.com/widgets/4aa6b26f386756af8e3992c0c988a491.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
      </div>
    </div>

  </section>
  
  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Portfolio</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-product">Card</li>
          <li data-filter=".filter-branding">Web</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Product 1</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Branding 1</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Product 2</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Branding 2</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Product 3</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Branding 3</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>KERJASAMA</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="zoom-in">

      <?php
      $imageDir = 'assets/img/kerjasama/';
      $images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
      ?>

      <div class="swiper init-swiper clients">
          <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": { "delay": 800 },
                "slidesPerView": 1,
                "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": false },
                "breakpoints": {
                  "320": { "slidesPerView": 2, "spaceBetween": 20 },
                  "480": { "slidesPerView": 3, "spaceBetween": 30 },
                  "640": { "slidesPerView": 4, "spaceBetween": 40 },
                  "768": { "slidesPerView": 5, "spaceBetween": 50 },
                  "992": { "slidesPerView": 6, "spaceBetween": 60 },
                  "1200": { "slidesPerView": 6, "spaceBetween": 80 }
                }
              }
          </script>
          <div class="swiper-wrapper align-items-center">
              <?php foreach ($images as $image): ?>
                  <div class="swiper-slide">
                      <img src="<?php echo $image; ?>" class="img-fluid" alt="">
                  </div>
              <?php endforeach; ?>
          </div>
      </div>

    </div>

  </section><!-- /Clients Section -->

  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>INFO KONTAK</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-5">

          <div class="info-wrap">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. LPP No. 1A, Klitren, Gondokusuman, Yogyakarta</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>(0274) 555776</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-globe2 flex-shrink-0"></i>
              <div>
                <h3>Fax</h3>
                <p> (0274) 585274</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>surat@polteklpp.ac.id</p>
              </div>
            </div><!-- End Info Item -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d988.2633625824435!2d110.38499!3d-7.784158!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ce091cd7bd%3A0x3f703fca89367d14!2sPoliteknik%20LPP!5e0!3m2!1sen!2sid!4v1729566996968!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-7">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

@endsection