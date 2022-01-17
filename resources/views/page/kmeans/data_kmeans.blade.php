@extends('layout.template')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <style>
    .main-card {
      transition: 0.5s ease-in-out
    }
    .main-card:hover {
      transform: translateY(-15px);
      box-shadow: 0px 2px 5px 5px rgb(196, 202, 238);
    }
  </style>
    <div class="card main-card" style="border: grey 3px solid">
      <div class="card-body">
        <form action="/kmeans/clustering/clean" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="d-flex justify-content-end">
            <button style="border: none" type="submit" class="badge badge-warning"><i class="ti-reload menu-icon"></i>  Bersihkan Data</button>
          </div>
        </form>
          {{-- <p>{{$centroid1->nama_masjid_penceramah}}</p> --}}
        <h4 class="card-title">Centroid Iterasi Ke-1</h4>
        <form method="POST" action="/perhitungan" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group">
            <select class="form-control" name="centroid1" id="centroid1" required>
              @if ($centroid1 == !null)
                    <option selected disabled value="">{{ $centroid1->nama_masjid_penceramah }}</option>
              @else
              <option value="">== Pilih Centroid 1 ==</option>
              @foreach ($dataCluster as $dataCentroid)
                <option value="{{ $dataCentroid->id }}" id="dataCentroid1">{{ $dataCentroid->nama_masjid_penceramah }}</option>
              @endforeach
              @endif
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="centroid2" id="centroid2" required>
              @if ($centroid2 == !null)
                    <option selected disabled value="">{{ $centroid2->nama_masjid_penceramah }}</option>
              @else
              <option value="">== Pilih Centroid 2 ==</option>
              @foreach ($dataCluster as $dataCentroid)
                <option value="{{ $dataCentroid->id }}" id="dataCentroid2">{{ $dataCentroid->nama_masjid_penceramah }}</option>
              @endforeach
              @endif
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="centroid3" id="centroid3" required>
              @if ($centroid3 == !null)
              <option selected disabled value="">{{ $centroid3->nama_masjid_penceramah }}</option>
              @else
              <option value="">== Pilih Centroid 3 ==</option>
              @foreach ($dataCluster as $dataCentroid)
                <option value="{{ $dataCentroid->id }}" id="dataCentroid3">{{ $dataCentroid->nama_masjid_penceramah }}</option>
              @endforeach
              @endif
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="centroid4" id="centroid4" required>
              @if ($centroid4 == !null)
              <option selected disabled value="">{{ $centroid4->nama_masjid_penceramah }}</option>
              @else
              <option value="">== Pilih Centroid 4 ==</option>
              @foreach ($dataCluster as $dataCentroid)
                <option value="{{ $dataCentroid->id }}" id="dataCentroid4">{{ $dataCentroid->nama_masjid_penceramah }}</option>
              @endforeach
              @endif
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="centroid5" id="centroid5" required>
              @if ($centroid5 == !null)
              <option selected disabled value="">{{ $centroid5->nama_masjid_penceramah }}</option>
              @else
              <option value="">== Pilih Centroid 5 ==</option>
              @foreach ($dataCluster as $dataCentroid)
                <option value="{{ $dataCentroid->id }}" id="dataCentroid5">{{ $dataCentroid->nama_masjid_penceramah }}</option>
              @endforeach
              @endif
            </select>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary center mr-2">Hitung Iterasi Ke-1</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="d-flex justify-content-end">
          <small>Update Terakhir &rarr; {{ $tgl_update->format('d/m/Y H:i') }} WIB</small>
          </div>
          <div class="mt-3 d-flex justify-content-end">
            @if ($centroidValidate != null)
                @if ($clusterGroup == null)
                <form action="/kmeans/clustering/group" method="POST">
                    {{ csrf_field() }}
                        <button style="border: none" type="submit" class="badge badge-danger"><i class="ti-pin2 menu-icon"></i> Cari Jarak Terdekat</button>
                </form>
                @else 
                  <button style="border: none" class="badge badge-success" data-toggle="modal" data-target="#hasil_iterasi1"><i class=" menu-icon"></i> Lihat Hasil</button>
                @endif
            @else
            @endif
          </div>
        <h4 class="card-title">Data Clustering - Iterasi ke-1</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_cluster1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kelompok</th>
                    <th>Nama Penceramah dan Masjid</th>
                    <th>Garis Lintang</th>
                    <th>Garis Bujur</th>
                    {{-- <th>Kendaraan</th> --}}
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>Jarak Terdekat</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dataCluster as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                @if ($data->kelompok_data == null)
                <td>-</td>
                @else      
                <td style="background-color: blanchedalmond">{{ $data->kelompok_data }}</td>
                @endif
                <td>{{ $data->nama_masjid_penceramah }}</td>
                <td>{{ $data->garis_lintang }}</td>
                <td>{{ $data->garis_bujur }}</td>
                {{-- <td>{{ $data->kendaraan }}</td> --}}
                @if ($data->C1 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C1 }}</td>
                @endif
                @if ($data->C2 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C2 }}</td>
                @endif
                @if ($data->C3 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C3 }}</td>
                @endif
                @if ($data->C4 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C4 }}</td>
                @endif
                @if ($data->C5 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C5 }}</td>
                @endif
                @if ($data->jarak_terdekat == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->jarak_terdekat }}</td>
                @endif
               
              </tr>
            @endforeach
            </tbody>
            <tfoot>
               
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="hasil_iterasi1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detail_masjid">Hasil Iterasi ke-1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="font-weight-bold">C1</p>
          <span>
            {{  App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 1)->count() }} data
          </span>
            <br>
            <br>
            <p class="font-weight-bold">C2</p>
            <span>
              {{  App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 1)->count() }} data
            </span>
            <br>
            <br>
            <p class="font-weight-bold">C3</p>
            <span>
              {{  App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 1)->count() }} data
            </span>
              <br>
              <br>
              <p class="font-weight-bold">C4</p>
              <span>
                {{  App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 1)->count() }} data
              </span>
              <br>
              <br>
              <p class="font-weight-bold">C5</p>
              <span>
                {{  App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 1)->count() }} data
              </span>
              <br>
              <br>
        </div>
        <div class="modal-footer">
          <form action="/kmeans/clustering/iteration" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            @if ($dataSingleIteration2 == null)
            <button type="submit" class="btn btn-danger">Lanjut Iterasi ke-2</button>
            @else
            <a class="btn btn-success center mr-2" data-dismiss="modal">&#10004;</a>
            @endif    
          </form>
        </div>
      </div>
    </div>
  </div>

  @if ($dataSingleIteration2 != null )
  <hr>
  <br>
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="border: grey 3px solid">
      <div class="card-body">
        <h4 class="card-title">Centroid Iterasi Ke-2</h4>
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
          <div class="mt-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary center mr-2">Hitung Iterasi Ke-2</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- Iterasi ke-2 --}}
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-end">

          @if ($centroid2Validate == null)
              @if ($clusterGroup2 == null)
              <form action="/kmeans/clustering/group/2" method="POST">
                  {{ csrf_field() }}
                      <button style="border: none" type="submit" class="badge badge-danger"><i class="ti-pin2 menu-icon"></i> Cari Jarak Terdekat</button>
              </form>
              @else 
                <button style="border: none" class="badge badge-success" data-toggle="modal" data-target="#hasil_iterasi2"><i class="ti-eye menu-icon"></i> Lihat Hasil</button>
              @endif
          @else
          @endif
        </div>
        <h4 class="card-title">Data Clustering - Iterasi ke-2</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_cluster2">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Kelompok</th>
                  <th>Nama Penceramah dan Masjid</th>
                  <th>Garis Lintang</th>
                  <th>Garis Bujur</th>
                  {{-- <th>Kendaraan</th> --}}
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                  <th>Jarak Terdekat</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($dataClusterIteration2 as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                @if ($data->kelompok_data == null)
                <td>-</td>
                 @else      
                <td style="background-color: blanchedalmond">{{ $data->kelompok_data }}</td>
                @endif
                <td>{{ $data->nama_masjid_penceramah }}</td>
                <td>{{ $data->garis_lintang }}</td>
                <td>{{ $data->garis_bujur }}</td>
                {{-- <td>{{ $data->kendaraan }}</td> --}}
                @if ($data->C1 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C1 }}</td>
                @endif
                @if ($data->C2 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C2 }}</td>
                @endif
                @if ($data->C3 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C3 }}</td>
                @endif
                @if ($data->C4 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C4 }}</td>
                @endif
                @if ($data->C5 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C5 }}</td>
                @endif
                @if ($data->jarak_terdekat == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->jarak_terdekat }}</td>
                @endif
               
              </tr>
            @endforeach
            </tbody>
            <tfoot>
          </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="hasil_iterasi2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detail_masjid">Hasil Iterasi ke-2</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="font-weight-bold">C1</p>
          <span>
            {{  App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', 2)->count() }} data
          </span>
            <br>
            <br>
            <p class="font-weight-bold">C2</p>
            <span>
              {{  App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', 2)->count() }} data
            </span>
            <br>
            <br>
            <p class="font-weight-bold">C3</p>
            <span>
              {{  App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', 2)->count() }} data
            </span>
              <br>
              <br>
              <p class="font-weight-bold">C4</p>
              <span>
                {{  App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', 2)->count() }} data
              </span>
              <br>
              <br>
              <p class="font-weight-bold">C5</p>
              <span>
                {{  App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', 2)->count() }} data
              </span>
              <br>
              <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <form action="/kmeans/clustering/initial" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" value="{{ $iterationCount + 1 }}" name="iterationCount">
            @if ($iteration2 == $iteration1 && $dataSingleIteration != null)
            <a class="btn btn-success center mr-2" data-dismiss="modal">&#10004; Selesai</a>
            @else
            <button type="submit" class="btn btn-danger">Lanjut Iterasi ke-3</button>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
  @else
  @endif

  {{-- ITERASI > 2 --}}
@if ($lastIteration != $iteration1 && $iterationCount > 2)
  @for ($i = 1; $i < $iterationCount - 1; $i++)
  {{-- @foreach ($dataClusterIteration as $data) --}}
  @if ($dataSingleIteration != null )
  <hr>
  <br>
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="border: grey 3px solid">
      <div class="card-body">
        <h4 class="card-title">Centroid Iterasi Ke-{{ $i + 2 }}</h4>
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
          <div class="mt-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary center mr-2">Hitung Iterasi Ke-{{ $i + 2 }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- Iterasi ke-2 --}}
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-end">
          @if (App\Models\KmeansModel::where('C1', '')->where('iteration', $i + 2)->first() == null)
              @if (App\Models\KmeansModel::where('iteration', $i + 2)->pluck('jarak_terdekat')->first() == null)
              <form action="/kmeans/clustering/group/iteration" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" value="{{ $i + 2 }}" name="iterationCount">
                  <button style="border: none" type="submit" class="badge badge-danger"><i class="ti-pin2 menu-icon"></i> Cari Jarak Terdekat</button>
              </form>
              @else 
                <button style="border: none" class="badge badge-success" data-toggle="modal" data-target="#hasil_iterasi{{ $i + 2 }}"><i class="ti-eye menu-icon"></i> Lihat Hasil</button>
              @endif
          @else
          @endif
        </div>
        <h4 class="card-title">Data Clustering - Iterasi ke-{{ $i + 2 }}</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_cluster{{ $i + 2 }}">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Kelompok</th>
                  <th>Nama Penceramah dan Masjid</th>
                  <th>Garis Lintang</th>
                  <th>Garis Bujur</th>
                  {{-- <th>Kendaraan</th> --}}
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                  <th>Jarak Terdekat</th>
                </tr>
            </thead>
            <tbody>
              @foreach (App\Models\KmeansModel::where('iteration', $i + 2)->get() as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                @if ($data->kelompok_data == null)
                <td>-</td>
                @else      
                <td style="background-color: blanchedalmond">{{ $data->kelompok_data }}</td>
                @endif
                <td>{{ $data->nama_masjid_penceramah }}</td>
                <td>{{ $data->garis_lintang }}</td>
                <td>{{ $data->garis_bujur }}</td>
                {{-- <td>{{ $data->kendaraan }}</td> --}}
                @if ($data->C1 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C1 }}</td>
                @endif
                @if ($data->C2 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C2 }}</td>
                @endif
                @if ($data->C3 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C3 }}</td>
                @endif
                @if ($data->C4 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C4 }}</td>
                @endif
                @if ($data->C5 == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->C5 }}</td>
                @endif
                @if ($data->jarak_terdekat == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->jarak_terdekat }}</td>
                @endif
              </tr>
            @endforeach
            </tbody>
            <tfoot>
          </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="hasil_iterasi{{  $i + 2 }}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detail_masjid">Hasil Iterasi ke-{{  $i + 2 }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="font-weight-bold">C1</p>
          <span>
            {{  App\Models\KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i + 2)->count() }} data
          </span>
            <br>
            <br>
            <p class="font-weight-bold">C2</p>
            <span>
              {{  App\Models\KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i + 2)->count() }} data
            </span>
            <br>
            <br>
            <p class="font-weight-bold">C3</p>
            <span>
              {{  App\Models\KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i + 2)->count() }} data
            </span>
              <br>
              <br>
              <p class="font-weight-bold">C4</p>
              <span>
                {{  App\Models\KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i + 2)->count() }} data
              </span>
              <br>
              <br>
              <p class="font-weight-bold">C5</p>
              <span>
                {{  App\Models\KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i + 2)->count() }} data
              </span>
              <br>
              <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <form action="/kmeans/clustering/initial" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" value="{{  $i + 3 }}" name="iterationCount">
            @if (App\Models\KmeansModel::where('iteration',  $i + 2)->pluck('kelompok_data')->toArray() == App\Models\KmeansModel::where('iteration',  $i + 1)->pluck('kelompok_data')->toArray())
            <a class="btn btn-success center mr-2" data-dismiss="modal">&#10004; Selesai</a>
            @else
            <button type="submit" class="btn btn-danger">Lanjut Iterasi ke-{{  $i + 3 }}</button>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
  @else
  @endif
  @endfor
  {{-- @endforeach --}}
@endif

@endsection

@section('script')
  <script>
    document.addEventListener("DOMContentLoaded", function(event) { 
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
  </script>
@endsection
