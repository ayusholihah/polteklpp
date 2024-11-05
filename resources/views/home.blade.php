@extends('layouts.adm-main')

@section('content')

<main class="main">
  
  <!-- Home Section -->
  <section id="home" >
    <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
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

  <!-- Why Us Section -->
  <section id="why-us" class="section why-us light-background" data-builder="section">

    <div class="container-fluid">

      <div class="row gy-4">

        <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

          <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
            <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut nihil</strong></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>

          <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-item faq-active">

              <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
              <div class="faq-content">
                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
              <div class="faq-content">
                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
              <div class="faq-content">
                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div>

        <div class="col-lg-5 order-1 order-lg-2 why-us-img">
          <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
        </div>
      </div>

    </div>

  </section><!-- /Why Us Section -->

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

           <h4><a href="https://www.instagram.com/politekniklpp/">@politekniklpp</a></h4>
           <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
           <iframe src="//lightwidget.com/widgets/ed5e5c81a5cb50dc94ca90bbafad3906.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
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

  <!-- Team Section -->
  <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->

  <!-- Pricing Section -->
  <section id="pricing" class="pricing section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pricing</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Free Plan</h3>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item featured">
            <h3>Business Plan</h3>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="pricing-item">
            <h3>Developer Plan</h3>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>

  </section><!-- /Pricing Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <!-- Faq 2 Section -->
  <section id="faq-2" class="faq-2 section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Frequently Asked Questions</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10">

          <div class="faq-container">

            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Non consectetur a erat nam at lectus urna duis?</h3>
              <div class="faq-content">
                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
              <div class="faq-content">
                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
              <div class="faq-content">
                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
              <div class="faq-content">
                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
              <div class="faq-content">
                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div>

      </div>

    </div>

  </section><!-- /Faq 2 Section -->

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