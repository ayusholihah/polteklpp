@extends('layouts.adm-main')

@section('content')

<main class="main">

    <!-- Academic Administration Section -->
    <section id="academic-administration" class="academic-administration section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Header -->
            <div class="section-header text-center mb-5">
                <h2 class="unit-title">Bagian Administrasi Umum</h2>
            </div>

            <div class="row unit-carousel" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 align-items-center">
                    <div id="carouselExampleCaptions" class="unit-carousel carousel slide mt-4" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner unit-frame">
                            <div class="carousel-item active">
                                <img src="assets/img/unit/bau/bau 1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/unit/bau/bau 1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/unit/bau/bau 3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <p class="section-description">
                    Bagian Administrasi Umum di Politeknik LPP Yogyakarta memainkan peran penting dalam mendukung kelancaran operasional kampus, terutama dalam aspek non-akademik. Dengan fokus utama pada pengelolaan kepegawaian, keuangan, serta sarana dan prasarana kampus, bagian ini memastikan setiap elemen non-akademik berjalan sesuai dengan standar yang ditetapkan. Pengelolaan kepegawaian meliputi administrasi dan pengembangan sumber daya manusia, sedangkan aspek keuangan mencakup pengaturan anggaran, pembukuan, dan pelaporan keuangan secara transparan.
                    </p>
                    <p class="section-description">
                    Selain itu, Bagian Administrasi Umum juga bertanggung jawab atas perawatan fasilitas dan lingkungan kampus agar selalu kondusif untuk kegiatan belajar-mengajar. Dengan mendukung tata kelola yang efisien dan akuntabel, bagian ini berperan penting dalam menjaga stabilitas operasional kampus, memastikan kelangsungan layanan, serta meningkatkan kualitas keseluruhan pengalaman kampus di Politeknik LPP Yogyakarta.
                    </p>
                </div>
            </div>

            <div class="row prodi-box" data-aos="fade-up" data-aos-delay="100">
                <div class="col" data-aos="zoom-in" data-aos-delay="100">
                    <div class="visimisi-prodi">
                    <h3>VISI</h3>
                    <p class="fst-arial" align="center">
                    Menjadi Perguruan Tinggi terbaik bidang perkebunan di tingkat global yang mampu menghasilkan lulusan yang profesional dan berkarakter
                    </p>
                    </div>
                </div><!-- End Pricing Item -->
            </div>

            <div class="row prodi-box" data-aos="fade-up" data-aos-delay="100">
                <div class="col" data-aos="zoom-in" data-aos-delay="100">
                    <div class="visimisi-prodi">
                    <h3>MISI</h3>
                    <ul>
                        <li>Menyelenggarakan pendidikan vokasi yang relevan dengan perkembangan teknologi dan kebutuhan industri perkebunan, untuk menghasilkan lulusan yang profesional dan berkarakter</li>
                        <li>Menyelenggarakan penelitian terapan dan pengabdian masyarakat untuk mengembangkan dan menyebarluaskan ilmu pengetahuan yang menunjang proses belajar mengajar serta mendukung pengembangan teknologi industri perkebunan</li>
                        <li>Menjalin kerjasama yang harmonis dan berkesinambungan dengan pemangku kepentingan guna pengembangan keahlian dan keilmuan</li>
                        <li>Menyelenggarakan tata kelola perguruan tinggi yang efektif dan efisien berdasarkan pada prinsip-prinsip keadilan, transparan, tanggung jawab, kredibel, dan akuntabel</li>
                    </ul>
                    </div>
                </div><!-- End Pricing Item -->
            </div>
        </div>
    </section>
</main>

@endsection