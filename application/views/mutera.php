<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Peta - Mutera</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="<?=base_url('public/')?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('public/')?>css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?=base_url('public/')?>css/swiper.css" rel="stylesheet">
    <link href="<?=base_url('public/')?>css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
</head>

<body>

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
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#services">Layanan</a>
                    </li>



                </ul>

            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h4>Melalui Mutera</h4>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <h5 class="h5-large">Siap bayar zakat? Pilih daerah untuk menyalurkan zakat.</h5>
            <br>
            
            <?php foreach($lokasi as $item) { ?>

            <div class="card mb-3" style="max-width: 1000px;">
                <div class="row g-0">
                    
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['namaLokasi'] ?></h5>
                            <form action="<?= base_url('riwayat/donasi/'.$item['idLokasi']) ?>" method="post">
                                <input class="form-control" type="text" name="jumlah" placeholder="Jumlah Donasi" id="">
                                <input type="submit" class="btn btn-primary btn-block btn-lg mr-auto" value="Donasi">
                            </form>
                            <br>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?= $item['banyak_riwayat']/1000000 ?>%;" aria-valuenow="<?= $item['banyak_riwayat']/1000000 ?>" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            
                            <p class="text-start">Terkumpul <?= $item['banyak_riwayat'] ?> </p>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div>

            <?php } ?>


        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->





    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-city" src="<?=base_url('public/')?>images/decoration-city.svg" alt="alternative">
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
        <img src="<?=base_url('public/')?>images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="<?=base_url('public/')?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?=base_url('public/')?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?=base_url('public/')?>js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?=base_url('public/')?>js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?=base_url('public/')?>js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>