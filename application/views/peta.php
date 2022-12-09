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
    <link href="<?= base_url('public/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('public/') ?>css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?= base_url('public/') ?>css/swiper.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="<?= base_url('public/') ?>css/style1copy.css" rel="stylesheet">

    <!-- Favicon  -->

    <script src="<?= base_url('public/') ?>js/uikit.min.js"></script>
    <script src="<?= base_url('public/') ?>js/uikit-icons.min.js"></script>
    <!-- leaflet koneksi -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>leaflet/leaflet.css" />
    <script src="<?= base_url('public/') ?>leaflet/leaflet.js"></script>
    <link rel="stylesheet" href="<?= base_url('public/') ?>leaflet-cari/src/leaflet-search.css" />
    <script src="<?= base_url('public/') ?>leaflet-cari/src/leaflet-search.js"></script>
    <!-- Pencarian GIS -->

    <style typle="text/css">
        #mapid {
            height: 700px;
        }
    </style>
</head>

<body>


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
                        <a class="nav-link" href="utama">Home</a>
                    </li>
                </ul>
                <a href="pagelogin/login.html" class="btn btn-brand ms-lg-3">Zakat</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="utama">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="zakat">Zakat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mapsiuuuuuuu">Maps</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h4>Peta</h4>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5" id="mapsiuuuuuuu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="mapid"></div>
                        </div>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->



    <script type="text/javascript">
        var data = [
            <?php
            foreach ($bencana as $key => $r) { ?> {
                    "lokasi": [<?= $r->latitudeBencana ?>, <?= $r->longitudeBencana ?>],
                    "kecamatan": "<?= $r->kecamatanBencana ?>",
                    "keterangan": "<?= $r->keteranganBencana ?>",
                    "tempat": "<?= $r->lokasiBencana ?>",
                    "kategori": "<?= $r->kategoriBencana ?>",
                    "radius": "<?= $r->radius ?>",
                },
            <?php } ?>
        ];

        var map = new L.Map('mapid', {
            zoom: 5,
            center: new L.latLng(-6.9032739, 107.5731165),
            attributionControl: false
        });
        map.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        }));

        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            initial: false,
            zoom: 25,
            marker: false
        });

        map.addControl(new L.Control.Search({

            layer: markersLayer,
            initial: false,
            collapsed: true,
        }));

        var Biru = L.icon({
            iconUrl: '<?= base_url('public/marker/biru2.png') ?>',
            iconSize: [38, 95],
        });

        var Hitam = L.icon({
            iconUrl: '<?= base_url('public/icon/hitam.png') ?>',
            iconSize: [25, 41]
        });

        var Emas = L.icon({
            iconUrl: '<?= base_url('public/icon/emas.png') ?>',
            iconSize: [25, 41]
        });

        var Hijau = L.icon({
            iconUrl: '<?= base_url('public/icon/hijau.png') ?>',
            iconSize: [25, 41]
        });

        var Orange = L.icon({
            iconUrl: '<?= base_url('public/icon/orange.png') ?>',
            iconSize: [25, 41]
        });

        var Merah = L.icon({
            iconUrl: '<?= base_url('public/icon/merah.png') ?>',
            iconSize: [25, 41]
        });

        var Ungu = L.icon({
            iconUrl: '<?= base_url('public/icon/ungu.png') ?>',
            iconSize: [25, 41]
        });

        var Kuning = L.icon({
            iconUrl: '<?= base_url('public/icon/kuning.png') ?>',
            iconSize: [25, 41]
        });

        var icons = "";
        var zona = "";
        var merah = 0;
        var kuning = 0;
        var hijau = 0;

        for (i in data) {
            var kecamatan = data[i].kecamatan;
            var lokasi = data[i].lokasi;
            var tempat = data[i].tempat;
            var keterangan = data[i].keterangan;
            var kategori = data[i].kategori;
            var radius = data[i].radius;


            if (keterangan == "Yellow") {
                kuning += 1;
            }
            if (keterangan == "Red") {
                merah += 1;
            }
            if (keterangan == "Green") {
                hijau += 1;
            }
            if (kategori == "Biru") {
                icons = Biru;
            }

            if (keterangan == "Red") {
                zona = 'red';
            } else if (keterangan == "Yellow") {
                zona = 'yellow';
            } else if (keterangan == "Green") {
                zona = 'green';
            } else if (keterangan == "Black") {
                zona = '';
            }

            var circle = L.circle(lokasi, {
                color: zona,
                fillOpacity: 0.5,
                radius: radius
            }).addTo(map);

            circle.bindPopup("Zona dengan radius " + radius);

            var marker = new L.Marker(new L.latLng(lokasi), {
                title: kecamatan,
            });

            marker.bindPopup(
                '<b>Kecamatan:</b> ' + kecamatan +

                ' <br><br> <b>Lokasi:</b> ' + tempat);



            markersLayer.addLayer(marker);

        }
    </script>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-danger mb-4" style="max-width: 18rem;">
                    <div class="card-header">Zona Merah</div>
                    <div class="card-body text-primary">
                        <h6 class="card-title">Merupakan zona dengan ekonomi rendah</h6>
                        <p class="card-text">
                            <script>
                                document.write(merah);
                            </script> data.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-danger">Diambil dari Database Mutera</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-warning mb-4" style="max-width: 18rem;">
                    <div class="card-header">Zona Kuning</div>
                    <div class="card-body text-primary">
                        <h6 class="card-title">Merupakan zona dengan ekonomi menengah</h6>
                        <p class="card-text">
                            <script>
                                document.write(kuning);
                            </script> data.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-warning">Diambil dari Database Mutera</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success mb-4" style="max-width: 18rem;">
                    <div class="card-header">Zona Hijau</div>
                    <div class="card-body text-primary">
                        <h6 class="card-title">Merupakan zona dengan ekonomi tinggi</h6>
                        <p class="card-text">
                            <script>
                                document.write(hijau);
                            </script> data.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-success">Diambil dari Database Mutera</div>
                </div>
            </div>
        </div>
    </div>
    <br>
      





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


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?= base_url('public/') ?>images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="<?= base_url('public/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url('public/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url('public/') ?>js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?= base_url('public/') ?>js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?= base_url('public/') ?>js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>