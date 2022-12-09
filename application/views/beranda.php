<div class="content-padder content-background">
    <div class="uk-section-small uk-section-default header">
        <div class="uk-container uk-container-large">
            <h2><span class="ion-speedometer"></span> Beranda</h2>
            <p>
                Selamat Datang, <?= $this->session->userdata('nama') ?>, <?= $judul ?>
            </p>
        </div>
    </div>
    <div class="uk-section-small">
        <div class="uk-container uk-container-large">
            <div id="mapid"></div>
        </div>
    </div>


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
            zoom: 10,
            center: new L.latLng(-7.8518553, 113.0054501),
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

        for (i in data) {
            var kecamatan = data[i].kecamatan;
            var lokasi = data[i].lokasi;
            var tempat = data[i].tempat;
            var keterangan = data[i].keterangan;
            var kategori = data[i].kategori;
            var radius = data[i].radius;

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
                radius: radius
            }).addTo(map);

            circle.bindPopup("Zona, dengan radius " + radius);

            var marker = new L.Marker(new L.latLng(lokasi), {
                title: kecamatan,
            });

            marker.bindPopup(
                '<b>Kecamatan:</b> ' + kecamatan +

                ' <br> <b>Lokasi:</b> ' + tempat);



            markersLayer.addLayer(marker);

        }
    </script>