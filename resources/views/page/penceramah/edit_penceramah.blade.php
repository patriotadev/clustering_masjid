@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <form action="/penceramah/update" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="kode_penceramah" value="{{ $dataPenceramah['kode_penceramah'] }}">
            <div class="inputform">
                <div class="d-flex justify-content-end">
                    <span onclick="resetValue()" class="mr-2 badge badge-warning"><i class="ti-loop menu-icon"></i> Reset Data</span>
                </div>
                <h4 class="card-title text-center">Edit Data</h4>
                <div class="row mt-4">
                </div>    
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Nama Penceramah</label>
                        <input type="text" class="form-control" name="nama_penceramah" placeholder="Nama Penceramah" value="{{ $dataPenceramah['nama_penceramah'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Lintang</label>
                        <input type="text" class="form-control" name="garis_lintang" placeholder="Garis Lintang" value="{{ $dataPenceramah['garis_lintang'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Bujur</label>
                        <input type="text" class="form-control" name="garis_bujur" placeholder="Garis Bujur" value="{{ $dataPenceramah['garis_bujur'] }}" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP" value="{{ $dataPenceramah['no_hp'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $dataPenceramah['tanggal_lahir'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $dataPenceramah['tempat_lahir'] }}">
                    </div>
                   
                   
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Alamat Domisili Asal</label>
                        <input type="text" class="form-control" name="alamat_domisili_asal" placeholder="Alamat Domisili Asal" value="{{ $dataPenceramah['alamat_domisili_asal'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="{{ $dataPenceramah['pendidikan_terakhir'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Hafalan Al-Qur'an</label>
                        <input type="text" class="form-control" name="hafalan_alquran" placeholder="Hafalan Al-Qur'an" value="{{ $dataPenceramah['hafalan_alquran'] }}">
                    </div>
                  
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Prestasi</label>
                        <input type="text" class="form-control" name="prestasi" placeholder="Prestasi" value="{{ $dataPenceramah['prestasi'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Organisasi yang Pernah Diikuti</label>
                        <input type="text" class="form-control" name="organisasi" placeholder="Organisasi" value="{{ $dataPenceramah['organisasi'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Jurusan di Ijazah Terakhir</label>
                        <input type="text" class="form-control" name="jurusan_ijazah_terakhir" placeholder="Jurusan di Ijazah Terakhir" value="{{ $dataPenceramah['jurusan_ijazah_terakhir'] }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Kompetensi Ibadah</label>
                        <input type="text" class="form-control" name="kompetensi_ibadah" placeholder="Kompetensi Ibadah" value="{{ $dataPenceramah['kompetensi_ibadah'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Kompetensi Aqidah</label>
                        <input type="text" class="form-control" name="kompetensi_aqidah" placeholder="Kompetensi Aqidah" value="{{ $dataPenceramah['kompetensi_aqidah'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Kompetensi Bahasa</label>
                        <input type="text" class="form-control" name="kompetensi_bahasa" placeholder="Kompetensi Bahasa" value="{{ $dataPenceramah['kompetensi_bahasa'] }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Kompetensi Ekonomi</label>
                        <input type="text" class="form-control" name="kompetensi_ekonomi" placeholder="Kompetensi Ekonomi" value="{{ $dataPenceramah['kompetensi_ekonomi'] }}">
                    </div>    
                </div>
                <div class="row mt-4">
                </div>
            </div>

            <hr>

            <div class="checkbox-field">
                <div class="row">
                    <div class="col-md-4">
                        <span class="text-center font-weight-bold">Akses Lokasi</span>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['jalan_besar']  == 1 ? 'checked' : '' }} onclick="enableJalanBesar()" id="jalanBesarCheck" name="jalan_besar">
                            <label class="form-check-label" for="flexCheckDefault"> Hanya ingin mendatangi masjid yang terletak di tepi jalan besar</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['gang_sempit']  == 1 ? 'checked' : '' }} onclick="enableGangSempit()" id="gangSempitCheck" name="gang_sempit">
                            <label class="form-check-label" for="flexCheckDefault"> Hanya ingin mendatangi masjid yang terletak di gang sempit</label>
                        </div>
                        <span class="text-center font-weight-bold">Madzhab</span>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" {{ in_array('Hanafi', explode(', ', $dataPenceramah['madzhab_fiqih'])) ? 'checked' : '' }} value="Hanafi" name="hanafi">
                            <label class="form-check-label" for="flexCheckDefault"> Hanafi</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" {{ in_array('Maliki', explode(', ', $dataPenceramah['madzhab_fiqih'])) ? 'checked' : '' }} value="Maliki" name="maliki">
                            <label class="form-check-label" for="flexCheckDefault"> Maliki</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" {{ in_array("Syafi'i", explode(', ', $dataPenceramah['madzhab_fiqih'])) ? 'checked' : '' }} value="Syafi'i" name="syafii">
                            <label class="form-check-label" for="flexCheckDefault"> Syafi'i</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" {{ in_array('Hambali', explode(', ', $dataPenceramah['madzhab_fiqih'])) ? 'checked' : '' }} value="Hambali" name="hambali">
                            <label class="form-check-label" for="flexCheckDefault"> Hambali</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span class="text-center font-weight-bold">Kegiatan Penceramah</span>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['shalat_lima_waktu']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="shalat_lima_waktu">
                            <label class="form-check-label" for="flexCheckDefault"> Shalat Lima Waktu</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['khotbah']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="khotbah">
                            <label class="form-check-label" for="flexCheckDefault"> Khotbah</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['tabligh_akbar']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="tabligh_akbar">
                            <label class="form-check-label" for="flexCheckDefault"> Tabligh Akbar</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['ceramah_rutin']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="ceramah_rutin">
                            <label class="form-check-label" for="flexCheckDefault"> Ceramah Rutin</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['maghrib_mengaji']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="maghrib_mengaji">
                            <label class="form-check-label" for="flexCheckDefault"> Maghrib Mengaji</label>
                        </div>
                    </div>
                        <div class="col-md-4">
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['tahsin_alquran']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="tahsin_alquran">
                                <label class="form-check-label" for="flexCheckDefault"> Tahsin Alquran</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['tahfidz_quran']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="tahfidz_quran">
                                <label class="form-check-label" for="flexCheckDefault"> Tahfidz Quran</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['wirid_remaja']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="wirid_remaja">
                                <label class="form-check-label" for="flexCheckDefault"> Wirid Remaja</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['didikan_subuh']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="didikan_subuh">
                                <label class="form-check-label" for="flexCheckDefault"> Didikan Subuh</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataPenceramah['pelaksanaan_fardhu_kifayah']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="pelaksanaan_fardhu_kifayah">
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
            let enable = true
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

