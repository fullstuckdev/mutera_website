<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mutera</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="<?= base_url('public/') ?>css/style1copy.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <p> Mutera </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#animejs">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="zakat">Zakat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="peta">Maps</a>
                </ul>
                <a href="login" class="btn btn-brand ms-lg-3">Login</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="animejs" id="animejs">
        <img src="<?= base_url('public/') ?>images/1.png" id="sky">
        <img src="<?= base_url('public/') ?>images/2.png" id="sun">
        <img src="<?= base_url('public/') ?>images/3.png" id="mountain_behind">
        <h2 id="text"> Apa Itu <span> Mutera? </span></h2>
        <a href="#" id="btn"> Pengen Tau :3 </a>
        <img src="<?= base_url('public/') ?>images/4.png" id="mountain_front">
        <h2 id="text2"> Aplikasi Pembayaran <br><span> Zakat Berbasis </span> <br> <span> Geospasial </span>  </h2>
    </section>


    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Kenapa Mutera</h1>
                        <div class="line"></div>
                        <p>Mutera Adalah Aplikasi Berbasis geospasial yang mendata data terupdate tentang keadaan perekonomian di indonesia yang nantinya akan digunakan sebagai preferensi dalam mengadakan santunan,bantuan dana, ataupun zakat supaya nantinya tidak akan salah sasaran.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="<?= base_url('public/') ?>images/about.jpg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>About Mutera</h1>
                    <p class="mt-3 mb-4">Mutera juga bermanfaat untuk para investor/pedagang untuk mengetahui zona zona lokasi yang nantinya akan berguna untuk planning dimana untuk berdagang agar tidak salah prediksi dikala kemungkinan terburuknya mereka malah berada di area dengan perekonomian rendah.</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>Terupdate</h5>
                            <p>Ya terupdate</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                            <h5>Amanah</h5>
                            <p>Ya Amanah</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5>Efisien</h5>
                            <p>Ya Efisien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Fitur Mutera</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pen-nib-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Zakat</h5>
                        <p>Solusi Bagi Para donator Jika berkenan menyisihkan Rezekinya untuk pembangunan bangsa</p>
                        <a href="#" id="btnsec"> Selengkapnya </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-stack-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Poverty Map Data</h5>
                        <p>
                            Peta Terupdate Tentang lokasi dengan tingkat perekonomian rendah hingga tinggi</p>
                        <a href="#" id="btnsec"> Selengkapnya </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-ruler-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">About</h5>
                        <p>Ketahui Mutera Lebih Lanjut, Kita Terbukan Akan Adanya Kerjasama Sesama Donator</p>
                        <a href="#contact" id="btnsec"> Selengkapnya </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                    <div class="section-title">
                        <h1 class="countertext">Hingga Saat Ini Sudah Terdata</h1>
                        <div class="line"></div>
                     </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4">16</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Zona Merah</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4">33</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Zona Kuning</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4">51</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Zona Hijau</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <h1 class="text-white display-4">100+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Request Donator</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Team Members</h1>
                        <div class="line"></div>
                        <p>Karya Anak Bangsa Untuk Pembangunan Masa Depan Bangsa.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('public/') ?>images/person-1.jpg" alt="">
                        </div>
                        <a href="https://www.linkedin.com/in/taufik-mulyawan-904a6b246/">
                        <div class="team-member-content">
                            <h4 class="text-white">Taufik Mulyawan</h4>
                            <p class="mb-0 text-white">Universitas Mercu Buana</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('public/') ?>images/person-2.jpg" alt="">
                        </div>
                        <a href="https://www.linkedin.com/in/kitsuzune/">
                        <div class="team-member-content" >
                            <h4 class="text-white">Teguh Wibowo</h4>
                            <p class="mb-0 text-white">UIN Syarif Hidayatullah Jakarta</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="<?= base_url('public/') ?>images/yuyuyuyu.jpg" alt="">
                        </div>
                        <a href="https://www.linkedin.com/in/efdy-dwi-saputra-22b359167/">
                        <div class="team-member-content">
                            <h4 class="text-white">Wiwit Widayanti</h4>
                            <p class="mb-0 text-white">Universitas Mercu Buana</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Hubungi Kami</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white"> Kami Terbuka Akan Adanya Kerjasama </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Enter first name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Enter last name">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" placeholder="Enter Email address">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button class="btn btn-brand">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright Mutera 2018 All Rights Reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0"> Reworked With <a href="https://getbootstrap.com/"> Bootstrp 5 For Node.Js</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script type="module" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="<?= base_url('public/') ?>js/main.js"></script>
    <script src="<?= base_url('public/') ?>js/anime.min.js"></script>
    <script> 
    var animation = anime.timeline({
    autoplay: false
});

animation.add ({
    targets: '#btn',
    top: '1000px',
    duration: 500,
    easing: 'easeInOutSine'
})

.add ({
    targets: '#text',
    marginRight: -5000,
    duration: 1000,
    easing: 'easeInOutSine'
})


.add ({
    targets: '#sky',
    top: '0px',
    duration: 1000,
    easing: 'easeInOutSine'
})

.add ({
    targets: '#mountain_behind',
    bottom: '0px',
    duration: 1000,
    easing: 'easeInOutSine'
})

.add ({
    targets: '#sun',
    top: '0px',
    duration: 1000,
    easing: 'easeInOutSine'
})

.add ({
    targets: '#text2',
    marginRight: 200,
    bottom: '205',
    duration: 1000,
    easing: 'easeInOutSine'
})

.add ({
    targets: '#mountain_front',
    bottom: '0px',
    duration: 1000,
    easing: 'easeInOutSine'
})

.add ({
    targets: '#btn',
    top: '60%',
    left: '38%',
    duration: 500,
    easing: 'easeInOutBack'
})


document.querySelector('#btn').onclick = animation.play;
    </script>
</body>

</html>