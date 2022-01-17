@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-end">
            {{-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> --}}
            <a style="cursor: pointer" data-toggle="modal" data-target="#import" class="mr-2 badge badge-success"><i class="ti-printer menu-icon"></i> Import excel</a>    
            <form action="/import_masjid" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal" id="import">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="import">Import Data Masjid</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <div>
                            <a href="{{asset('/excel/imapp_masjid.xlsx')}}">Download format file excel</a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                     </div>
                    </div>
                </div>
            </form>
        </div>
          <form action="/masjid/tambah" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="inputform">
                <h4 class="card-title text-center">Tambah Data</h4>
                <div class="row mt-4">
                </div>    
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Nama Masjid</label>
                        <input type="text" class="form-control @error('nama_masjid') is-invalid @enderror" name="nama_masjid" placeholder="Nama Masjid">
                        @error('nama_masjid')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Lintang</label>
                        <input type="text" class="form-control @error('garis_lintang') is-invalid @enderror" name="garis_lintang" placeholder="Garis Lintang">
                        @error('garis_lintang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Bujur</label>
                        <input type="text" class="form-control @error('garis_bujur') is-invalid @enderror" name="garis_bujur" placeholder="Garis Bujur">
                        @error('garis_bujur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat_lengkap" placeholder="Alamat Lengkap">
                    </div>
                    <div class="col-md-4">
                        <label class="">Tipe Masjid</label>
                        <input type="text" class="form-control" name="tipe_masjid" placeholder="Tipe Masjid">
                    </div>
                    <div class="col-md-4">
                        <label class="">Daya Tampung</label>
                        <input type="text" class="form-control" name="daya_tampung" placeholder="Daya Tampung">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Sarana Masjid</label>
                        <input type="text" class="form-control" name="sarana_masjid" placeholder="Sarana Masjid">
                    </div>
                    <div class="col-md-4">
                        <label class="">Lembaga Sosial</label>
                        <input type="text" class="form-control" name="lembaga_sosial" placeholder="Lembaga Sosial">
                    </div>
                    <div class="col-md-4">
                        <label class="">Infaq Perbulan</label>
                        <input type="text" class="form-control" name="infaq_perbulan" placeholder="Infaq Perbulan">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Nama Ketua</label>
                        <input type="text" class="form-control" name="nama_ketua" placeholder="Nama Ketua">
                    </div>
                    <div class="col-md-4">
                        <label class="">Nama Bendahara</label>
                        <input type="text" class="form-control" name="nama_bendahara" placeholder="Nama Bendahara">
                    </div>
                    <div class="col-md-4">
                        <label class="">Nama Sekretaris</label>
                        <input type="text" class="form-control" name="nama_sekretaris" placeholder="Nama Sekretaris">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Aktifitas Kajian Khusus</label>
                        <input type="text" class="form-control" name="aktivitas_kajian_khusus" placeholder="Aktivitas Kajian Khusus">
                    </div>
                    <div class="col-md-4">
                        <label class="">Aktivitas Ekonomi</label>
                        <input type="text" class="form-control" name="aktivitas_ekonomi" placeholder="Aktivitas Ekonomi">
                    </div>
                </div>
            </div>
            <hr>

            <div class="checkbox-field">
                <div class="row">
                    <div class="col-md-4">
                        <span class="text-center font-weight-bold">Lokasi Masjid</span>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" onclick="enableJalanBesar()" id="jalanBesarCheck" value="1" name="jalan_besar">
                            <label class="form-check-label" for="flexCheckDefault"> Masjid berada di jalan besar</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" onclick="enableGangSempit()" id="gangSempitCheck" value="1" name="gang_sempit">
                            <label class="form-check-label" for="flexCheckDefault"> Masjid berada di gang sempit</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span class="text-center font-weight-bold">Kegiatan Masjid</span>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="shalat_lima_waktu">
                            <label class="form-check-label" for="flexCheckDefault"> Shalat Lima Waktu</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="khotbah">
                            <label class="form-check-label" for="flexCheckDefault"> Khotbah</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="tabligh_akbar">
                            <label class="form-check-label" for="flexCheckDefault"> Tabligh Akbar</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="ceramah_rutin">
                            <label class="form-check-label" for="flexCheckDefault"> Ceramah Rutin</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="maghrib_mengaji">
                            <label class="form-check-label" for="flexCheckDefault"> Maghrib Mengaji</label>
                        </div>
                    </div>
                        <div class="col-md-4">
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="tahsin_alquran">
                                <label class="form-check-label" for="flexCheckDefault"> Tahsin Alquran</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="tahfidz_quran">
                                <label class="form-check-label" for="flexCheckDefault"> Tahfidz Quran</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="wirid_remaja">
                                <label class="form-check-label" for="flexCheckDefault"> Wirid Remaja</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="didikan_subuh">
                                <label class="form-check-label" for="flexCheckDefault"> Didikan Subuh</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="pelaksanaan_fardhu_kifayah">
                                <label class="form-check-label" for="flexCheckDefault"> Pelaksanaan Fardhu Kifayah</label>
                            </div>
                        </div>
                </div>
            </div>

            <div class="submitBtn d-flex justify-content-center mt-5">
                <button class="btn btn-primary">Simpan</button>
            </div>
          </form>
      </div>
    </div>
  </div>

@endsection

@section('script')
    <script>
            let enable
            const enableJalanBesar = () => {
                    enable = !enable
                    if(enable) {
                        $('#gangSempitCheck').attr('disabled', true)
                    }
                    else{
                        $('#gangSempitCheck').removeAttr('disabled')
                    }
            }

            const enableGangSempit = () => {
                enable = !enable
                    if(enable) {
                        $('#jalanBesarCheck').attr('disabled', true)
                    }
                    else{
                        $('#jalanBesarCheck').removeAttr('disabled')
                    }
            }      
    </script>    
@endsection

<?php if(session('fail_import')) : ?>
<script>
      window.addEventListener('load', () => {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?= session('fail_import'); ?>',
        })
      })
</script>
<?php endif; ?>

