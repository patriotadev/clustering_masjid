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
          <div class="d-flex justify-content-end">
            <a href="/clustering" class="badge badge-warning"><i class="ti-loop menu-icon"></i> Refresh</a>
          </div>
        <h4 class="card-title">Data Clustering</h4>
        <form class="forms-sample" method="POST" action="/clustering/find" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <select class="form-control" name="kelompokData">
                <option value="">== Pilih Cluster ==</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
                <option value="C3">C3</option>
                <option value="C4">C4</option>
                <option value="C5">C5</option>
            </select>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary center mr-2">Cari</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Penceramah yang sesuai</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_getCluster1">
            <thead>
              <tr>
                <th>No.</th>
                {{-- <th>Kelompok</th> --}}
                <th>Nama</th>
                <th>Kelompok Data</th>
                <th>Garis Lintang</th>
                <th>Garis Bujur</th>
              </tr>
            </thead>
            <tbody>
              @if (session()->get('dataPenceramah') != null)  
                @foreach (session()->get('dataPenceramah') as $p)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  {{-- <td>{{ $p->kelompok_data }}</td> --}}
                  <td>{{ $p->nama_masjid_penceramah }}</td>
                  <td>{{ $p->kelompok_data }}</td>
                  <td>{{ $p->garis_lintang }}</td>
                  <td>{{ $p->garis_bujur }}</td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Masjid yang sesuai</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="table_getCluster2">
            <thead>
              <tr>
                <th>No.</th>
                {{-- <th>Kelompok</th> --}}
                <th>Nama</th>
                <th>Kelompok Data</th>
                <th>Garis Lintang</th>
                <th>Garis Bujur</th>
              </tr>
            </thead>
            <tbody>
              @if (session()->get('dataMasjid') != null)  
                @foreach (session()->get('dataMasjid') as $p)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  {{-- <td>{{ $p->kelompok_data }}</td> --}}
                  <td>{{ $p->nama_masjid_penceramah }}</td>
                  <td>{{ $p->kelompok_data }}</td>
                  <td>{{ $p->garis_lintang }}</td>
                  <td>{{ $p->garis_bujur }}</td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection