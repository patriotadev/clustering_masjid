@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration'))->pluck('kelompok_data')->toArray() != App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration') - 1)->pluck('kelompok_data')->toArray() || App\Models\KmeansModel::all()->count() == 0)
        <div class="d-flex justify-content-end">
          <a href="/masjid/tambah" style="border: none" type="submit" class="badge badge-warning"><i class="ti-plus menu-icon"></i>  Tambah</a>
        </div>
        @endif
        <h4 class="card-title">Data Masjid</h4>
        {{-- <p class="card-description">
          Add class <code>.table</code>
        </p> --}}
        <div class="table-responsive">
          <table class="table" id="table_masjid">
            <thead>
              <tr>
                  {{-- nama, nama ketua, nama bendahara, sarana mesjid, tipe masjid, daya tampung, alamat, nama sekretaris, lembaga sosial milik masjid,  --}}
                <th>No.</th>
                <th>Nama Masjid</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataMasjid as $data) 
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_masjid }}</td>
                <td>{{ $data->alamat_lengkap }}</td>
                <td>
                  <label href="#" class="btn btn-primary badge badge-primary" data-toggle="modal" data-target="#detail_masjid{{ $data->id }}"><i class="ti-info-alt menu-icon"></i> Detail</label>
                  
                  @if (App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration'))->pluck('kelompok_data')->toArray() != App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration') - 1)->pluck('kelompok_data')->toArray())
                  <a href="/masjid/edit/{{ base64_encode($data->id) }}"><label class="btn btn-info badge badge-info"><i class="ti-pencil menu-icon"></i> Ubah</label></a>
                  <a class="deleteButton" data-id="{{ base64_encode($data->kode_masjid) }}"><label class="btn btn-danger badge badge-danger"><i class="ti-trash menu-icon"></i> Hapus</label></a>    
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

  @foreach ($dataMasjid as $data)
  <div class="modal" id="detail_masjid{{ $data->id }}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detail_masjid">{{ $data->nama_masjid }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <ul>
              <li>
                <span><strong>Nama Ketua : </strong>{{ $data->nama_ketua }}</span>
              </li>
              <li>
                <span><strong>Nama Bendahara : </strong>{{ $data->nama_bendahara }}</span>
              </li>
              <li>
                <span><strong>Tipe Masjid : </strong>{{ $data->tipe_masjid }}</span>
              </li>
              <li>
                <span><strong>Sarana Masjid : </strong>{{ $data->sarana_masjid }}</span>
              </li>
              <li>
                <span><strong>Lokasi Masjid : </strong>{{ $data->lokasi_masjid }}</span>
              </li>
              <li>
                <span><strong>Daya Tampung : </strong>{{ $data->daya_tampung }}</span>
              </li>
              {{-- <li>
                <span><strong>Aktivitas Masjid : </strong>{{ $data->aktivitas_masjid }}</span>
              </li> --}}
              <li>
                <span><strong>Alamat Lengkap : </strong>{{ $data->alamat_lengkap }}</span>
              </li>
              <li>
                <span><strong>Nama Sekretaris : </strong>{{ $data->nama_sekretaris }}</span>
              </li>
              <li>
                <span><strong>Aktivitas Kajian Khusus : </strong>{{ $data->aktivitas_kajian_khusus }}</span>
              </li>
              <li>
                <span><strong>Aktivitas Ekonomi : </strong>{{ $data->aktivitas_ekonomi }}</span>
              </li>
              <li>
                <span><strong>Lembaga Sosial : </strong>{{ $data->lembaga_sosial }}</span>
              </li>
              <li>
                <span><strong>Infaq Perbulan : </strong>{{ $data->infaq_perbulan }}</span>
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
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
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
                url: '/masjid/delete/' + __kode,
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