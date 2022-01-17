@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-end">
          @if (App\Models\PengujianModel::all()->count() > 1)
          <button data-toggle="modal" data-target="#hasil_uji" style="border: none" class="badge badge-success"><i class="ti-eye menu-icon"></i>  Lihat Hasil Pengujian</button>
          @else    
            <form action="pengujian" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <button style="border: none" class="badge badge-danger"><i class="ti-filter menu-icon"></i>  Lakukan Pengujian</button>
              </form>
          @endif
          {{-- <a href="/penceramah/tambah" style="border: none" type="submit" class="badge badge-success"><i class="ti-filter menu-icon"></i>  Lakukan Pengujian</a> --}}
        </div>
        <h4 class="card-title">Pengujian Silhoutte Coefficient</h4>
        <div class="table-responsive">
          <table class="table" id="table_pengujian">
            <thead>
              <tr>
                  {{-- nama, nama ketua, nama bendahara, sarana mesjid, tipe masjid, daya tampung, alamat, nama sekretaris, lembaga sosial milik masjid,  --}}
                <th>No.</th>
                <th>Cluster</th>
                <th>Nama Masjid & Penceramah</th>
                <th class="font-italic">a(i)</th>
                <th class="font-italic">d(1)</th>
                <th class="font-italic">d(2)</th>
                <th class="font-italic">d(3)</th>
                <th class="font-italic">d(4)</th>
                <th class="font-italic">d(5)</th>
                <th class="font-italic">b(i)</th>
                <th class="font-italic">s(i)</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataPengujian as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td style="background-color: blanchedalmond">{{ $data->cluster }}</td>
                <td>{{ $data->nama_masjid_penceramah }}</td>
                <td>{{ $data->a_i }}</td>
                @if ($data->d_1 == null)
                  <td>-</td>
                @else
                  <td>{{ $data->d_1 }}</td>
                @endif
                @if ($data->d_2 == null)
                  <td>-</td>
                @else
                  <td>{{ $data->d_2 }}</td>
                @endif
                @if ($data->d_3 == null)
                  <td>-</td>
                @else
                  <td>{{ $data->d_3 }}</td>
                @endif
                @if ($data->d_4 == null)
                  <td>-</td>
                @else
                  <td>{{ $data->d_4 }}</td>
                @endif
                @if ($data->d_5 == null)
                  <td>-</td>
                @else
                  <td>{{ $data->d_5 }}</td>
                @endif
                <td>{{ $data->b_i }}</td>
                <td>{{ $data->s_i }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="hasil_uji">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="hasil">Silhoutte Coefficient</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body ">
          {{-- <span>Hasil Pengujian : </span> --}}
          {{-- <br> --}}
          <strong>{{ App\Models\AverageModel::pluck('average_value')->first() }} &rarr;</strong>
          @if ((float)App\Models\AverageModel::pluck('average_value')->first() <= 1 && (float)App\Models\AverageModel::pluck('average_value')->first() > 0.7)
            <span class="badge badge-success">Strong Cluster</span>
          @elseif((float)App\Models\AverageModel::pluck('average_value')->first() <= 0.7 && (float)App\Models\AverageModel::pluck('average_value')->first() > 0.5)
            <span class="badge badge-success">Medium Cluster</span>
          @elseif((float)App\Models\AverageModel::pluck('average_value')->first() <= 0.5 && (float)App\Models\AverageModel::pluck('average_value')->first() > 0.25)
            <span class="badge badge-warning">Weak Cluster</span>
          @else
          <span class="badge badge-danger">Bad Cluster</span>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
@endsection


<?php if(session('hasil')) : ?>
<script>
      window.addEventListener('load', () => {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Hasil Pengujian : ' + <?= session('hasil'); ?>,
          showConfirmButton: false,
          timer: 1500
        })
      })
</script>
<?php endif; ?>