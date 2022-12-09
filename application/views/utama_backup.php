<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="description" content="Your description">
    <meta name="author" content="Your name">


    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="twitter:card" content="summary_large_image">

    <!-- Webpage Title -->
    <title>Mutera</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="<?= base_url('public/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('public/') ?>css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?= base_url('public/') ?>css/swiper.css" rel="stylesheet">
    <link href="<?= base_url('public/') ?>css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>


 
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-text" href="/">Mutera</a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>




                </ul>

            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->

    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">Selamat datang, di Mutera!</div>
                        <h1 class="h1-large">Mutera</h1>
                        <p class="p-large">Karya Anak Bangsa Untuk Pembangunan Masa Depan Bangsa.</p>
                        <a class="btn-solid-lg" href="peta">Buka Maps</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url('public/') ?>images/zakatfront.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon blue">
                            <span class="far fa-file-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Zakat</h5>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Solusi Bagi Para donator</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Jika berkenan menyisihkan</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Rezekinya untuk pembangunan bangsa</div>
                                </li>

                            </ul>
                            <br>
                            <a class="btn-solid-lg" href="zakat">Selengkapnya</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon yellow">
                            <span class="fas fa-solar-panel"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Poverty Map Data</h5>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Peta Interaktif Terupdate</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Tentang lokasi lokasi dengan
                                        tingkat perekonomian rendah hingga tinggi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Memanfaatkan teknologi js dengan basis
                                        data realtime menngunakan format zona sehingga memudahkan user dalam menentukan ​lokasi</div>
                                </li>
                                <br>
                                <a class="btn-solid-lg" href="peta">Selengkapnya</a>

                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <span class="fas fa-chart-bar"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Statistik Ekonomi</h5>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Memperlihatkan data daerah daerah di
                                        indonesia yang memiliki masalah perekonomian akut sampai menengah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Dibungkus dengan tabel stats compact</div>
                                </li>

                            </ul>
                            <br>
                            <a class="btn-solid-lg" href="stats">Selengkapnya</a>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url('public/') ?>images/details-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Apa itu</span><br> Mutera?</h2>
                        <p>Mutera Adalah Aplikasi Berbasis geospasial yang
                            mendata data terupdate tentang keadaan perekonomian di
                            indonesia yang nantinya akan digunakan sebagai preferensi
                            dalam mengadakan santunan,bantuan dana, ataupun zakat
                            supaya nantinya tidak akan salah sasaran.</p>
                        <p>Mutera juga bermanfaat untuk para investor/pedagang untuk
                            mengetahui zona zona lokasi yang nantinya akan berguna
                            untuk planning dimana untuk berdagang agar tidak salah prediksi
                            dikala kemungkinan terburuknya mereka malah berada di area
                            dengan perekonomian rendah
                        </p>
                        <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buka Peta</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->



    <!-- Details Modal -->
    <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <br><br><br>
                            <img class="img-fluid" src="<?= base_url('public/') ?>images/mutera.JPG" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Tujuan</h3>
                        <hr>
                        <p>Mutera Adalah Aplikasi Berbasis geospasial yang mendata data terupdate tentang keadaan perekonomian di indonesia yang nantinya akan digunakan sebagai preferensi dalam mengadakan santunan,bantuan dana, ataupun zakat supaya nantinya tidak akan salah sasaran.</p>

                        <h4>Layanan</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Zakat</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Poverty Map Data</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Statistik Ekonomi</div>
                            </li>

                        </ul>
                        <a id="modalCtaBtn" class="btn-solid-reg" href="peta">Buka Peta</a>
                        <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of modal-content -->
        </div> <!-- end of modal-dialog -->
    </div> <!-- end of modal -->
    <!-- end of details modal -->









    <!-- Projects -->

    <!-- end of projects -->

    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Halo nama saya Taufik</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="<?= base_url('public/') ?>images/taufik.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Taufik Mulyawan</div>
                                                    <div class="occupation">Developer - Mutera</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Halo nama saya Teguh</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="<?= base_url('public/') ?>images/teguh.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Teguh Wibowo</div>
                                                    <div class="occupation">Developer - Mutera</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Halo nama saya Efdy</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="<?= base_url('public/') ?>images/efdy.jpeg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Efdy Saputra</div>
                                                    <div class="occupation">Writer - Mutera</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Halo nama saya Arta</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="<?= base_url('public/') ?>images/artha1.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Artha Prima Pradhana</div>
                                                    <div class="occupation">Poster Design - Mutera</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Pricing -->

    <!-- end of card -->

    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Invitation -->
    <div class="basic-2">
        <div class="container">

            <div class="row">
                <div class="col-md-2">
                    <img src="<?= base_url('public/') ?>images/mercu.png" width="200px" class="img-fluid" alt="Mercu">
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <img src="<?= base_url('public/') ?>images/upn.png" width="200px" class="img-fluid" alt="UPN">
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <img src="<?= base_url('public/') ?>images/unnes.png" width="200px" class="img-fluid" alt="UNNES">
                </div> <!-- end of col -->
                <div class="col-md-6">
                    <p class="lh-lg">
                        <strong> Mutera </strong> Adalah Aplikasi Berbasis geospasial yang mendata data terupdate tentang keadaan perekonomian di indonesia yang nantinya akan digunakan sebagai preferensi dalam mengadakan santunan,bantuan dana, ataupun zakat supaya nantinya tidak akan salah sasaran.
                    </p>
                </div>
            </div> <!-- end of row -->



        </div> <!-- end of container -->

    </div>
    </div>
    </div> <!-- end of basic-2 -->
    <!-- end of invitation -->


    </div>
    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-city" src="<?= base_url('public/') ?>images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="/">Mutera</a></p>
                </div> <!-- end of col -->

            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?= base_url('public/') ?>images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="<?= base_url('public/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <!-- jQuery -->
    <script type="text/javascript" src="<?= base_url('public/') ?>js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('public/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('public/') ?>js/bootstrap2.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url('public/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url('public/') ?>js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?= base_url('public/') ?>js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?= base_url('public/') ?>js/scripts.js"></script> <!-- Custom scripts -->
    <script src="<?= base_url('public/') ?>js/stats.js"></script> <!-- Custom scripts -->





</body>

</html>