@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-end">
          <a href="/hasil/export" class="badge badge-success"><i class="ti-printer menu-icon"></i> Export excel</a>
        </div>
        <h4 class="card-title">Hasil Cluster Masjid & Penceramah</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_getCluster">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kelompok Data</th>
                <th>Nama Masjid & Penceramah</th>
                <th>Garis Lintang</th>
                <th>Garis Bujur</th>
                <th>Jalan Besar</th>
                <th>Gang Sempit</th>
                <th>Shalat Lima Waktu</th>
                <th>Khotbah</th>
                <th>Tabligh Akbar</th>
                <th>Ceramah Rutin</th>
                <th>Maghrib Mengaji</th>
                <th>Tahsin Alquran</th>
                <th>Tahfidz Quran</th>
                <th>Wirid Remaja</th>
                <th>Didikan Subuh</th>
                <th>pelaksanaan_fardhu_kifayah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataCluster as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td style="background-color: blanchedalmond">{{ $data->kelompok_data }}</td>
                  <td>{{ $data->nama_masjid_penceramah }}</td>
                  <td>{{ $data->garis_lintang }}</td>
                  <td>{{ $data->garis_bujur }}</td>
                  <td>{{ $data->jalan_besar }}</td>
                  <td>{{ $data->gang_sempit }}</td>
                  <td>{{ $data->shalat_lima_waktu }}</td>
                  <td>{{ $data->khotbah }}</td>
                  <td>{{ $data->tabligh_akbar }}</td>
                  <td>{{ $data->ceramah_rutin }}</td>
                  <td>{{ $data->maghrib_mengaji }}</td>
                  <td>{{ $data->tahsin_alquran }}</td>
                  <td>{{ $data->tahfidz_quran }}</td>
                  <td>{{ $data->wirid_remaja }}</td>
                  <td>{{ $data->didikan_subuh }}</td>
                  <td>{{ $data->pelaksanaan_fardhu_kifayah }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-end">
          {{-- <a href="/hasil/export" class="badge badge-success"><i class="ti-printer menu-icon"></i> Export excel</a> --}}
        </div>
        <h4 class="card-title">Hasil Cluster Masjid</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_getCluster_masjid">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kelompok Data</th>
                <th>Nama Masjid</th>
                <th>Garis Lintang</th>
                <th>Garis Bujur</th>
                <th>Jalan Besar</th>
                <th>Gang Sempit</th>
                <th>Shalat Lima Waktu</th>
                <th>Khotbah</th>
                <th>Tabligh Akbar</th>
                <th>Ceramah Rutin</th>
                <th>Maghrib Mengaji</th>
                <th>Tahsin Alquran</th>
                <th>Tahfidz Quran</th>
                <th>Wirid Remaja</th>
                <th>Didikan Subuh</th>
                <th>pelaksanaan_fardhu_kifayah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataClusterMasjid as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td style="background-color: blanchedalmond">{{ $data->kelompok_data }}</td>
                  <td>{{ $data->nama_masjid_penceramah }}</td>
                  <td>{{ $data->garis_lintang }}</td>
                  <td>{{ $data->garis_bujur }}</td>
                  <td>{{ $data->jalan_besar }}</td>
                  <td>{{ $data->gang_sempit }}</td>
                  <td>{{ $data->shalat_lima_waktu }}</td>
                  <td>{{ $data->khotbah }}</td>
                  <td>{{ $data->tabligh_akbar }}</td>
                  <td>{{ $data->ceramah_rutin }}</td>
                  <td>{{ $data->maghrib_mengaji }}</td>
                  <td>{{ $data->tahsin_alquran }}</td>
                  <td>{{ $data->tahfidz_quran }}</td>
                  <td>{{ $data->wirid_remaja }}</td>
                  <td>{{ $data->didikan_subuh }}</td>
                  <td>{{ $data->pelaksanaan_fardhu_kifayah }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-end">
          {{-- <a href="/hasil/export" class="badge badge-success"><i class="ti-printer menu-icon"></i> Export excel</a> --}}
        </div>
        <h4 class="card-title">Hasil Cluster Penceramah</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_getCluster_penceramah">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kelompok Data</th>
                <th>Nama Penceramah</th>
                <th>Garis Lintang</th>
                <th>Garis Bujur</th>
                <th>Jalan Besar</th>
                <th>Gang Sempit</th>
                <th>Shalat Lima Waktu</th>
                <th>Khotbah</th>
                <th>Tabligh Akbar</th>
                <th>Ceramah Rutin</th>
                <th>Maghrib Mengaji</th>
                <th>Tahsin Alquran</th>
                <th>Tahfidz Quran</th>
                <th>Wirid Remaja</th>
                <th>Didikan Subuh</th>
                <th>pelaksanaan_fardhu_kifayah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataClusterPenceramah as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td style="background-color: blanchedalmond">{{ $data->kelompok_data }}</td>
                  <td>{{ $data->nama_masjid_penceramah }}</td>
                  <td>{{ $data->garis_lintang }}</td>
                  <td>{{ $data->garis_bujur }}</td>
                  <td>{{ $data->jalan_besar }}</td>
                  <td>{{ $data->gang_sempit }}</td>
                  <td>{{ $data->shalat_lima_waktu }}</td>
                  <td>{{ $data->khotbah }}</td>
                  <td>{{ $data->tabligh_akbar }}</td>
                  <td>{{ $data->ceramah_rutin }}</td>
                  <td>{{ $data->maghrib_mengaji }}</td>
                  <td>{{ $data->tahsin_alquran }}</td>
                  <td>{{ $data->tahfidz_quran }}</td>
                  <td>{{ $data->wirid_remaja }}</td>
                  <td>{{ $data->didikan_subuh }}</td>
                  <td>{{ $data->pelaksanaan_fardhu_kifayah }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection