@extends('layout.template')


@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Peta Data Masjid & Penceramah</h4>
        <div class="c1 d-flex justify-content-start mb-3">
            <div class="div rounded-circle mr-1" style="width: 15px; height: 15px; background-color: lightgreen">
            </div>  
            <small class="mr-3">C1</small>
            <div class="div rounded-circle mr-1" style="width: 15px; height: 15px; background-color: lightskyblue">
            </div>  
            <small class="mr-3">C2</small>
            <div class="div rounded-circle mr-1" style="width: 15px; height: 15px; background-color: lightcoral">
            </div>  
            <small class="mr-3">C3</small>
            <div class="div rounded-circle mr-1" style="width: 15px; height: 15px; background-color: yellow">
            </div>  
            <small class="mr-3">C4</small>
            <div class="div rounded-circle mr-1" style="width: 15px; height: 15px; background-color: violet">
            </div>  
            <small class="mr-3">C5</small>
        </div>
            <div id="map" style="width: 100%; height: 600px;"></div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    <script>
        var map = L.map('map').setView([0.5058517406501838, 101.44561454005184], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            // maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            // tileSize: 512,
            // zoomOffset: -1
        }).addTo(map);

        var greenIcon = L.icon({
            iconUrl: '<?= asset('/leaflet/images/marker-icon-green.png'); ?>',
            shadowUrl: '<?= asset('/leaflet/images/marker-shadow.png'); ?>',
            iconSize:     [25, 41], // size of the icon
            shadowSize:   [41, 41], // size of the shadow
            iconAnchor:   [12, 41], // point of the icon which will correspond to marker's location
            popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
            // shadowAnchor: [1, 34],  // the same for the shadow
        });

        var redIcon = L.icon({
            iconUrl: '<?= asset('/leaflet/images/marker-icon-red.png'); ?>',
            shadowUrl: '<?= asset('/leaflet/images/marker-shadow.png'); ?>',
            iconSize:     [25, 41], // size of the icon
            shadowSize:   [41, 41], // size of the shadow
            iconAnchor:   [12, 41], // point of the icon which will correspond to marker's location
            popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
            // shadowAnchor: [1, 34],  // the same for the shadow
        });

        var yellowIcon = L.icon({
            iconUrl: '<?= asset('/leaflet/images/marker-icon-yellow.png'); ?>',
            shadowUrl: '<?= asset('/leaflet/images/marker-shadow.png'); ?>',
            iconSize:     [25, 41], // size of the icon
            shadowSize:   [41, 41], // size of the shadow
            iconAnchor:   [12, 41], // point of the icon which will correspond to marker's location
            popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
            // shadowAnchor: [1, 34],  // the same for the shadow
        });

        var blueIcon = L.icon({
            iconUrl: '<?= asset('/leaflet/images/marker-icon-blue.png'); ?>',
            shadowUrl: '<?= asset('/leaflet/images/marker-shadow.png'); ?>',
            iconSize:     [25, 41], // size of the icon
            shadowSize:   [41, 41], // size of the shadow
            iconAnchor:   [12, 41], // point of the icon which will correspond to marker's location
            popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
            // shadowAnchor: [1, 34],  // the same for the shadow
        });

        var violetIcon = L.icon({
            iconUrl: '<?= asset('/leaflet/images/marker-icon-violet.png'); ?>',
            shadowUrl: '<?= asset('/leaflet/images/marker-shadow.png'); ?>',
            iconSize:     [25, 41], // size of the icon
            shadowSize:   [41, 41], // size of the shadow
            iconAnchor:   [12, 41], // point of the icon which will correspond to marker's location
            popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
            // shadowAnchor: [1, 34],  // the same for the shadow
        });
    </script>

        <?php foreach($dataCluster as $data) { ?>
            <?php if($data->kelompok_data == 'C1') : ?>
            <script>
                var marker = L.marker([<?= $data->garis_lintang; ?>, <?= $data->garis_bujur; ?>], {icon: greenIcon}).bindPopup('<?= $data->nama_masjid_penceramah; ?>' + ' - ' + '<?= $data->kelompok_data; ?>').addTo(map);
            </script>
            <?php elseif($data->kelompok_data == 'C2') : ?>
            <script>
                var marker = L.marker([<?= $data->garis_lintang; ?>, <?= $data->garis_bujur; ?>], {icon: blueIcon}).bindPopup('<?= $data->nama_masjid_penceramah; ?>' + ' - ' + '<?= $data->kelompok_data; ?>').addTo(map);
            </script>
            <?php elseif($data->kelompok_data == 'C3') : ?>
            <script>
                var marker = L.marker([<?= $data->garis_lintang; ?>, <?= $data->garis_bujur; ?>], {icon: redIcon}).bindPopup('<?= $data->nama_masjid_penceramah; ?>' + ' - ' + '<?= $data->kelompok_data; ?>').addTo(map);
            </script>
            <?php elseif($data->kelompok_data == 'C4') : ?>
            <script>
                var marker = L.marker([<?= $data->garis_lintang; ?>, <?= $data->garis_bujur; ?>], {icon: yellowIcon}).bindPopup('<?= $data->nama_masjid_penceramah; ?>' + ' - ' + '<?= $data->kelompok_data; ?>').addTo(map);
            </script>
            <?php elseif($data->kelompok_data == 'C5') : ?>
            <script>
                var marker = L.marker([<?= $data->garis_lintang; ?>, <?= $data->garis_bujur; ?>], {icon: violetIcon}).bindPopup('<?= $data->nama_masjid_penceramah; ?>' + ' - ' + '<?= $data->kelompok_data; ?>').addTo(map);
            </script>
            <?php endif; ?>
        <?php } ?>

@endsection