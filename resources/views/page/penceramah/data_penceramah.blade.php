@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration'))->pluck('kelompok_data')->toArray() != App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration') - 1)->pluck('kelompok_data')->toArray() || App\Models\KmeansModel::all()->count() == 0)
        <div class="d-flex justify-content-end">
          <a href="/penceramah/tambah" style="border: none" type="submit" class="badge badge-warning"><i class="ti-plus menu-icon"></i>  Tambah</a>
        </div>
        @endif
        <h4 class="card-title">Data Penceramah</h4>
        <div class="table-responsive">
          <table class="table" id="table_penceramah">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Penceramah</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataPenceramah as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_penceramah }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->alamat_domisili_asal }}</td>
                <td>
                  <label href="#" class="btn btn-primary badge badge-primary" data-toggle="modal" data-target="#detail_penceramah{{ $data->id }}"><i class="ti-info-alt menu-icon"></i>Detail</label>
                  
                  @if (App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration'))->pluck('kelompok_data')->toArray() != App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration') - 1)->pluck('kelompok_data')->toArray())
                  <a href="/penceramah/edit/{{ base64_encode($data->id) }}"><label class="btn btn-info badge badge-info"><i class="ti-pencil menu-icon"></i> Ubah</label></a>
                  {{-- <a href="/penceramah/delete/{{ base64_encode($data->kode_penceramah) }}"><label class="btn btn-danger badge badge-danger"><i class="ti-trash menu-icon"></i> Hapus</label></a>  --}}
                  <a class="deleteButton" data-id="{{ base64_encode($data->kode_penceramah) }}"><label class="btn btn-danger badge badge-danger"><i class="ti-trash menu-icon"></i> Hapus</label></a> 
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  @foreach ($dataPenceramah as $data)
  <div class="modal" id="detail_penceramah{{ $data->id }}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detail_penceramah">{{ $data->nama_penceramah }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <ul>
            <li>
              <span><strong>No. HP : </strong>{{ $data->no_hp }}</span>
            </li>
            <li>
              <span><strong>Alamat : </strong>{{ $data->alamat_domisili_asal }}</span>
            </li>
            <li>
              <span><strong>Tempat / Tanggal Lahir : </strong>{{ $data->tempat_lahir }} / {{ $data->tanggal_lahir }}</span>
            </li>
            <li>
              <span><strong>Pendidikan Terakhir : </strong>{{ $data->pendidikan_terakhir }}</span>
            </li>
            <li>
              <span><strong>Madzhab : </strong>{{ $data->madzhab_fiqih }}</span>
            </li>
            <li>
              <span><strong>Organisasi : </strong>{{$data->organisasi}}</span>
            </li>
            <li>
              <span><strong>Hafalan Al-Qur'an : </strong>{{ $data->hafalan_quran }}</span>
            </li>
            <li>
              <span><strong>Kompetensi Ibadah : </strong>{{ $data->komepetensi_ibadah }}</span>
            </li>
            <li>
              <span><strong>Kompetensi Aqidah : </strong>{{ $data->kompetensi_aqidah }}</span>
            </li>
            <li>
              <span><strong>Kompetensi Bahasa : </strong>{{ $data->kompetensi_bahasa }}</span>
            </li>
            {{-- <li>
              <span><strong>Kompetensi Keterampilan : </strong>{{ $data->kompetensi_keterampilan }}</span>
            </li> --}}
            <li>
              <span><strong>Kompetensi Ekonomi : </strong>{{ $data->kompetensi_ekonomi }}</span>
            </li>
            <li>
              <span><strong>Prestasi : </strong>{{ $data->prestasi }}</span>
            </li>
            <li>
              <span><strong>Jurusan di Ijazah Terakhir : </strong>{{ $data->jurusan_terakhir }}</span>
            </li>
            <li>
              <span><strong>Alamat Domisili Asal : </strong>{{ $data->alamat_domisili_asal }}</span>
            </li>
            <li>
              <span><strong>Garis Lintang : </strong>{{ $data->garis_lintang }}</span>
            </li>
            <li>
              <span><strong>Garis Bujur : </strong>{{ $data->garis_bujur }}</span>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection

<?php if(session('tambah_data')) : ?>
<script>
      window.addEventListener('load', () => {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Data berhasil ditambahkan!',
          showConfirmButton: false,
          timer: 1500
        })
      })
</script>
<?php endif; ?>

<?php if(session('edit_data')) : ?>
<script>
      window.addEventListener('load', () => {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Data berhasil diubah!',
          showConfirmButton: false,
          timer: 1500
        })
      })
</script>
<?php endif; ?>

<?php if(session('hapus_data')) : ?>
<script>
      window.addEventListener('load', () => {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Data berhasil dihapus!',
          showConfirmButton: false,
          timer: 1500
        })
      })
</script>
<?php endif; ?>



@section('script')
    <script>
      $('.deleteButton').click(function(){
        __kode = $(this).attr('data-id')
        Swal.fire({
            title: 'Anda yakin menghapus data ini?',
            text: "Data yang dipilih akan terhapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus data!'
          }).then((result) => {
            if(result.value) {
              $.ajax({
                url: '/penceramah/delete/' + __kode,
                type: 'GET',
                success: function() {
                  Swal.fire({
                        title: 'Deleted!',
                        text: 'Data berhasil dihapus!',
                        icon: 'success',
                      }).then(function() {
                    location.reload();
                  });
                },
                error: function() {
                  Swal.fire({
                        title: 'Failed!',
                        text: 'Data gagal dihapus!',
                        icon: 'danger',
                      }).then(function() {
                    location.reload();
                  });
                }
              })
            }
          })
      })
    </script>
@endsection