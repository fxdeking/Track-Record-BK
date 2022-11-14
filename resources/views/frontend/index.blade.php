<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Track record BK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo-light.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template-frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template-frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template-frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template-frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template-frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <img src="img/logo-light.png" style="width: 100px;">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">Track Record BK</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="{{ route('tentang') }}" class="nav-item nav-link">Tentang Kami</a>
                <a href="{{ route('dashboard') }}" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/guru-bk.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Selamat datang ke website</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Bimbingan Konselimg</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/gedung-tzuchi.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Berfokus pada</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">pengembangan perilaku baik siswa</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">BK</h1>
                                <small class="fs-5 fw-bold">- Tzu Chi -</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="img/bk3.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="img/bk22.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="img/deket-bk.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About</p>
                    <h1 class="mb-4">Bimbingan Konseling</h1>
                    <span></span>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/service.png" alt="">
                            <h5 class="mb-3">Bimbingan</h5>
                            <span>pada prinsipnya merupakan pemberian pertolongan atau bantuan. Bimbingan merupakan suatu tuntunan, artinya bahwa dalam memberikan bimbingan, sang pembimbing harus memberikan arahan.</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/award.png" alt="">
                            <h5 class="mb-3">Konseling</h5>
                            <span>merupakan bantuan yang diberikan kepada individu atau kelompok untuk menyelesaikan suatu masalah melalui wawancara dengan cara yang sesuai dengan keadaan yang tengah dihadapi untuk mencapai kesejahteraan dalam hidup.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Bimbingan Konseling</p>
                    <h1 class="mb-4">Tujuan</h1>
                    <p><i class="fa fa-check text-primary me-3"></i>Merencanakan kegiatan penyelesaian studi, perkembangan karir, dan juga kehidupan peserta didik di masa depan.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Menyesuaikan diri dengan lingkungan pendidikan dan juga lingkungan masyarakat</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Mengetahui kesulitan dan juga hambatan yang dihadapi oleh siswa dalam studi, penyesuaian diri dengan lingkungan pendidikan yang ada di masyarakat</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href=""></a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/experience.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">22.6</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Anak sekolah mengalami gejala depresi </span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/award.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">18.9</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Anak sekolah mengalami gangguan kecemasan</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/service.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up"> 2.330</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Sampel anak sekolah yang diambil untuk penelitian</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/client.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">14.3</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Orang tua melaporkan memburuknya perilaku anak</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

        <!-- Product Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Bimbingan Konseling</p>
                    <h1 class="mb-5">Fungsi</h1>
                </div>
                <div class="row gx-4">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/fungsi1.jpeg" alt="">
                                
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href=""></a>
                                <span class="text-primary me-1">Memberikan kemudahan bagi peserta didik untuk memperoleh perkembangan yang optimal dan seimbang dalam kepribadian diri seorang peserta didik.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/fungsi2.jpeg" alt="">
                                
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href=""></a>
                                <span class="text-primary me-1">Membantu peserta didik untuk menentukan minat, bakat dan potensi</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/fungsi3.jpeg" alt="">
                                
                            </div>
                            <div class="text-center p-4">
                                <span class="text-primary me-1">Membantu dalam mengantisipasi atau pencegahan masalah yang dapat terjadi pada peserta didik dan membantu mereka dalam mengatasinya</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/fungsi4.jpeg" alt="">
                                
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href=""></a>
                                <span class="text-primary me-1">Membantu untuk turut meluruskan pemikiran, tindakan dan dalam meluapkan perasaan peserta didik yang kurang baik</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->

    <!-- Banner Start -->
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">Bimbingan Konseling</p>
        <h1 class="mb-5">Staf Kami</h1>
    </div>
    <div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="img/gedung-tzuchi.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="img/pakrizky.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Rizky Mulyadi, S.PD.</h2>
                            <p class="text-white mb-4">Guru BK</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="img/bunesta.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Ernesta Panjaitan, S.TH</h2>
                            <p class="text-white mb-4">Guru BP</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Bimbingan Konseling</p>
                <h1 class="mb-5">Menurut Para Ahli</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/buku_2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/syamsuyusuf.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Syamsu Yusuf</h4>
                            <p class="mb-4">proses pemberian bantuan konselor kepada para individu atau konseli secara berkesinambungan supaya bisa memahami potensi yang ada di dalam diri dan juga lingkungannya, menerima diri sendiri, mengembangkan diri secara maksimal, dan menyesuaikan diri secara positif.</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/frank2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/frank parson.jpeg" alt="">
                            </div>
                            <h5 class="mb-3">Frank Parson</h5>
                            <p class="mb-4">Bimbingan sebagai bantuan yang diberikan kepada individu untuk dapat memilih, mempersiapkan diri dan memangku suatu jabatan dan mendapat kemajuan dalam jabatan yang dipilihnya.</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/kemendikbud.png" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/nadiem.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Menteri Pendidikan dan Kebudayaan</h5>
                            <p class="mb-4">suatu upaya sistematis, logis, objektif, dan juga berkelanjutan serta terprogram yang dilakukan oleh para konselor atau guru bimbingan dan konseling</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="{{ route('tentang') }}">Cinta Kasih Tzu Chi</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template-frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template-frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template-frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template-frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template-frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template-frontend/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('template-frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template-frontend/js/main.js') }}"></script>
</body>

</html>