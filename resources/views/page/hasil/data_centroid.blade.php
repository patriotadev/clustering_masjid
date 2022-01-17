@extends('layout.template')


@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="border: grey 3px solid">
      <div class="card-body">
        <h4 class="card-title text-center">Centroid Iterasi Ke-1</h4>
        <form method="POST" action="/kmeans/clustering/2" enctype="multipart/form-data">
            {{ csrf_field() }}
            <p class="font-weight-bold">Centroid 1</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <td>{{$centroid1->garis_lintang}}</td>
                     <td>{{$centroid1->garis_bujur}}</td>
                     <td>{{$centroid1->jalan_besar}}</td>
                     <td>{{$centroid1->gang_sempit}}</td>
                     <td>{{$centroid1->shalat_lima_waktu}}</td>
                     <td>{{$centroid1->khotbah}}</td>
                     <td>{{$centroid1->tabligh_akbar}}</td>
                     <td>{{$centroid1->ceramah_rutin}}</td>
                     <td>{{$centroid1->maghrib_mengaji}}</td>
                     <td>{{$centroid1->tahsin_alquran}}</td>
                     <td>{{$centroid1->tahfidz_quran}}</td>
                     <td>{{$centroid1->wirid_remaja}}</td>
                     <td>{{$centroid1->didikan_subuh}}</td>
                     <td>{{$centroid1->pelaksanaan_fardhu_kifayah}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 2</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{$centroid2->garis_lintang}}</td>
                        <td>{{$centroid2->garis_bujur}}</td>
                        <td>{{$centroid2->jalan_besar}}</td>
                        <td>{{$centroid2->gang_sempit}}</td>
                        <td>{{$centroid2->shalat_lima_waktu}}</td>
                        <td>{{$centroid2->khotbah}}</td>
                        <td>{{$centroid2->tabligh_akbar}}</td>
                        <td>{{$centroid2->ceramah_rutin}}</td>
                        <td>{{$centroid2->maghrib_mengaji}}</td>
                        <td>{{$centroid2->tahsin_alquran}}</td>
                        <td>{{$centroid2->tahfidz_quran}}</td>
                        <td>{{$centroid2->wirid_remaja}}</td>
                        <td>{{$centroid2->didikan_subuh}}</td>
                        <td>{{$centroid2->pelaksanaan_fardhu_kifayah}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 3</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{$centroid3->garis_lintang}}</td>
                        <td>{{$centroid3->garis_bujur}}</td>
                        <td>{{$centroid3->jalan_besar}}</td>
                        <td>{{$centroid3->gang_sempit}}</td>
                        <td>{{$centroid3->shalat_lima_waktu}}</td>
                        <td>{{$centroid3->khotbah}}</td>
                        <td>{{$centroid3->tabligh_akbar}}</td>
                        <td>{{$centroid3->ceramah_rutin}}</td>
                        <td>{{$centroid3->maghrib_mengaji}}</td>
                        <td>{{$centroid3->tahsin_alquran}}</td>
                        <td>{{$centroid3->tahfidz_quran}}</td>
                        <td>{{$centroid3->wirid_remaja}}</td>
                        <td>{{$centroid3->didikan_subuh}}</td>
                        <td>{{$centroid3->pelaksanaan_fardhu_kifayah}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 4</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{$centroid4->garis_lintang}}</td>
                        <td>{{$centroid4->garis_bujur}}</td>
                        <td>{{$centroid4->jalan_besar}}</td>
                        <td>{{$centroid4->gang_sempit}}</td>
                        <td>{{$centroid4->shalat_lima_waktu}}</td>
                        <td>{{$centroid4->khotbah}}</td>
                        <td>{{$centroid4->tabligh_akbar}}</td>
                        <td>{{$centroid4->ceramah_rutin}}</td>
                        <td>{{$centroid4->maghrib_mengaji}}</td>
                        <td>{{$centroid4->tahsin_alquran}}</td>
                        <td>{{$centroid4->tahfidz_quran}}</td>
                        <td>{{$centroid4->wirid_remaja}}</td>
                        <td>{{$centroid4->didikan_subuh}}</td>
                        <td>{{$centroid4->pelaksanaan_fardhu_kifayah}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 5</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{$centroid5->garis_lintang}}</td>
                        <td>{{$centroid5->garis_bujur}}</td>
                        <td>{{$centroid5->jalan_besar}}</td>
                        <td>{{$centroid5->gang_sempit}}</td>
                        <td>{{$centroid5->shalat_lima_waktu}}</td>
                        <td>{{$centroid5->khotbah}}</td>
                        <td>{{$centroid5->tabligh_akbar}}</td>
                        <td>{{$centroid5->ceramah_rutin}}</td>
                        <td>{{$centroid5->maghrib_mengaji}}</td>
                        <td>{{$centroid5->tahsin_alquran}}</td>
                        <td>{{$centroid5->tahfidz_quran}}</td>
                        <td>{{$centroid5->wirid_remaja}}</td>
                        <td>{{$centroid5->didikan_subuh}}</td>
                        <td>{{$centroid5->pelaksanaan_fardhu_kifayah}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
        </form>
      </div>
    </div>
  </div>






{{-- Iterasi 2 --}}
<div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="border: grey 3px solid">
      <div class="card-body">
        <h4 class="card-title text-center">Centroid Iterasi Ke-2</h4>
        <form method="POST" action="/kmeans/clustering/2" enctype="multipart/form-data">
            {{ csrf_field() }}
            <p class="font-weight-bold">Centroid 1</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 2</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 3</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 4</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 5</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
          {{-- <div class="mt-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary center mr-2">Hitung Iterasi Ke-2</button>
          </div> --}}
        </form>
      </div>
    </div>
  </div>


{{-- iterasi > 2 --}}
@for ($i = 1; $i < $iterationCount; $i++)
<div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="border: grey 3px solid">
      <div class="card-body">
        <h4 class="card-title text-center">Centroid Iterasi Ke-{{ $i + 2 }}</h4>
        <form method="POST" action="/kmeans/clustering/iteration/count" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $i + 2 }}" name="iterationCount">
            <p class="font-weight-bold">Centroid 1</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 2</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 3</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 4</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <p class="font-weight-bold">Centroid 5</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
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
                      <th>Pelaksanaan Fardhu Kifayah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('garis_lintang') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('garis_bujur') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('jalan_besar') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('gang_sempit') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('shalat_lima_waktu') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('khotbah') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('tabligh_akbar') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('ceramah_rutin') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('maghrib_mengaji') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('tahsin_alquran') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('tahfidz_quran') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('wirid_remaja') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('didikan_subuh') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                      <td>{{ App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->sum('pelaksanaan_fardhu_kifayah') / App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 1)->count() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
        </form>
      </div>
    </div>
  </div>
@endfor

@endsection