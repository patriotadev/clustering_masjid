@extends('layout.template')

@section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="d-flex justify-content-end">
          <small>Update Terakhir &rarr; {{ $tgl_update->format('Y-m-d H:i') }}</small>
          </div>
        <h4 class="card-title">Data Clustering</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Penceramah dan Masjid</th>
                    <th>Garis Lintang</th>
                    <th>Garis Bujur</th>
                    <th>Kendaraan</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>Jarak Terdekat</th>
                    <th>Kelompok Data</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dataCluster as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_masjid_penceramah }}</td>
                <td>{{ $data->garis_lintang }}</td>
                <td>{{ $data->garis_bujur }}</td>
                <td>{{ $data->kendaraan }}</td>
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
                @if ($data->jarak_terdekat == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->jarak_terdekat }}</td>
                @endif
                @if ($data->kelompok_data == null)
                    <td>-</td>
                @else      
                    <td>{{ $data->kelompok_data }}</td>
                @endif
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection