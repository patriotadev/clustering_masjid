@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="d-flex justify-content-end">
              {{-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> --}}
              <a style="cursor: pointer" data-toggle="modal" data-target="#import" class="mr-2 badge badge-success"><i class="ti-printer menu-icon"></i> Import excel</a>    
              <form action="/import_penceramah" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="modal" id="import">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="import">Import Data Penceramah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body ">
                          <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
                      </div>
                      <div class="modal-footer d-flex justify-content-between">
                        <div>
                            <a href="{{asset('/excel/imapp_penceramah.xlsx')}}">Download format file excel</a>
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
          <form action="/penceramah/tambah" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="inputform">
                <h4 class="card-title text-center">Tambah Data</h4>
                <div class="row mt-4">
                </div>    
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Nama Penceramah</label>
                        <input type="text" class="form-control @error('nama_penceramah') is-invalid @enderror" value="{{ old('nama_penceramah') }}" name="nama_penceramah" placeholder="Nama Penceramah">
                        @error('nama_penceramah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Lintang</label>
                        <input type="text" class="form-control  @error('garis_lintang') is-invalid @enderror" value="{{ old('garis_lintang') }}" name="garis_lintang" placeholder="Garis Lintang">
                        @error('garis_lintang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Bujur</label>
                        <input type="text" class="form-control  @error('garis_bujur') is-invalid @enderror" value="{{ old('garis_bujur') }}" name="garis_bujur" placeholder="Garis Bujur">
                        @error('garis_bujur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP">
                    </div>
                    <div class="col-md-4">
                        <label class="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="col-md-4">
                        <label class="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Alamat Domisili Asal</label>
                        <input type="text" class="form-control" name="alamat_domisili_asal" placeholder="Alamat Domisili Asal">
                    </div>
                    <div class="col-md-4">
                        <label class="">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
                    </div>
                    <div class="col-md-4">
                        <label class="">Hafalan Al-Qur'an</label>
                        <input type="text" class="form-control" name="hafalan_alquran" placeholder="Hafalan Al-Qur'an">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Prestasi</label>
                        <input type="text" class="form-control" name="prestasi" placeholder="Prestasi">
                    </div>
                    <div class="col-md-4">
                        <label class="">Organisasi yang Pernah Diikuti</label>
                        <input type="text" class="form-control" name="organisasi" placeholder="Organisasi">
                    </div>
                    <div class="col-md-4">
                        <label class="">Jurusan di Ijazah Terakhir</label>
                        <input type="text" class="form-control" name="jurusan_ijazah_terakhir" placeholder="Jurusan di Ijazah Terakhir">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Kompetensi Ibadah</label>
                        <input type="text" class="form-control" name="kompetensi_ibadah" placeholder="Kompetensi Ibadah">
                    </div>
                    <div class="col-md-4">
                        <label class="">Kompetensi Aqidah</label>
                        <input type="text" class="form-control" name="kompetensi_aqidah" placeholder="Kompetensi Aqidah">
                    </div>
                    <div class="col-md-4">
                        <label class="">Kompetensi Bahasa</label>
                        <input type="text" class="form-control" name="kompetensi_bahasa" placeholder="Kompetensi Bahasa">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Kompetensi Ekonomi</label>
                        <input type="text" class="form-control" name="kompetensi_ekonomi" placeholder="Kompetensi Ekonomi">
                    </div> 
                    
                </div>
                <div class="row mt-4">
                </div>
            </div>

            <hr>

            {{-- <div class="container"> --}}
                <div class="checkbox-field">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="text-center font-weight-bold">Akses Lokasi</span>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" onclick="enableJalanBesar()" id="jalanBesarCheck" name="jalan_besar">
                                <label class="form-check-label" for="flexCheckDefault"> Hanya ingin mendatangi masjid yang terletak di tepi jalan besar</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" onclick="enableGangSempit()" id="gangSempitCheck" name="gang_sempit">
                                <label class="form-check-label" for="flexCheckDefault"> Hanya ingin mendatangi masjid yang terletak di gang sempit</label>
                            </div>
                            <span class="text-center font-weight-bold">Madzhab</span>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="Hanafi" name="hanafi">
                                <label class="form-check-label" for="flexCheckDefault"> Hanafi</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="Maliki" name="maliki">
                                <label class="form-check-label" for="flexCheckDefault"> Maliki</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="Syafi'i" name="syafii">
                                <label class="form-check-label" for="flexCheckDefault"> Syafi'i</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="Hambali" name="hambali">
                                <label class="form-check-label" for="flexCheckDefault"> Hambali</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span class="text-center font-weight-bold">Kegiatan Penceramah</span>
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
            {{-- </div> --}}

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

