@extends('layout.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          {{-- @foreach ($dataMasjid as $data) --}}
          <form action="/masjid/update" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $dataMasjid['kode_masjid'] }}" name="kode_masjid">
            <div class="inputform">
                <div class="d-flex justify-content-end">
                    <span onclick="resetValue()" class="mr-2 badge badge-warning"><i class="ti-loop menu-icon"></i> Reset Data</span>
                </div>
                <h4 class="card-title text-center">Edit Data</h4>
                <div class="row mt-4">
                </div>    
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Nama Masjid</label>
                        <input type="text" class="form-control" name="nama_masjid" placeholder="Nama Masjid" value="{{ $dataMasjid['nama_masjid'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Lintang</label>
                        <input type="text" class="form-control" name="garis_lintang" placeholder="Garis Lintang" required value="{{ $dataMasjid['garis_lintang'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Garis Bujur</label>
                        <input type="text" class="form-control" name="garis_bujur" placeholder="Garis Bujur" required value="{{ $dataMasjid['garis_bujur'] }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat_lengkap" placeholder="Alamat Lengkap" value="{{ $dataMasjid['alamat_lengkap'] }}">
                    </div> 
                    <div class="col-md-4">
                        <label class="">Tipe Masjid</label>
                        <input type="text" class="form-control" name="tipe_masjid" placeholder="Tipe Masjid" value="{{ $dataMasjid['tipe_masjid'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Daya Tampung</label>
                        <input type="text" class="form-control" name="daya_tampung" placeholder="Daya Tampung" value="{{ $dataMasjid['daya_tampung'] }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Sarana Masjid</label>
                        <input type="text" class="form-control" name="sarana_masjid" placeholder="Sarana Masjid" value="{{ $dataMasjid['sarana_masjid'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Lembaga Sosial</label>
                        <input type="text" class="form-control" name="lembaga_sosial" placeholder="Lembaga Sosial" value="{{ $dataMasjid['lembaga_sosial'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Infaq Perbulan</label>
                        <input type="text" class="form-control" name="infaq_perbulan" placeholder="Infaq Perbulan" value="{{ $dataMasjid['infaq_perbulan'] }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Nama Ketua</label>
                        <input type="text" class="form-control" name="nama_ketua" placeholder="Nama Ketua" value="{{ $dataMasjid['nama_ketua'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Nama Bendahara</label>
                        <input type="text" class="form-control" name="nama_bendahara" placeholder="Nama Bendahara" value="{{ $dataMasjid['nama_bendahara'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Nama Sekretaris</label>
                        <input type="text" class="form-control" name="nama_sekretaris" placeholder="Nama Sekretaris" value="{{ $dataMasjid['nama_sekretaris'] }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="">Aktifitas Kajian Khusus</label>
                        <input type="text" class="form-control" name="aktivitas_kajian_khusus" placeholder="Aktivitas Kajian Khusus" value="{{ $dataMasjid['aktivitas_kajian_khusus'] }}">
                    </div>
                    <div class="col-md-4">
                        <label class="">Aktivitas Ekonomi</label>
                        <input type="text" class="form-control" name="aktivitas_ekonomi" placeholder="Aktivitas Ekonomi" value="{{ $dataMasjid['aktivitas_ekonomi'] }}">
                    </div>
                </div>
            </div>

            <hr>

            <div class="checkbox-field">
                <div class="row">
                    <div class="col-md-4">
                        <span class="text-center font-weight-bold">Lokasi Masjid</span>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" onclick="enableJalanBesar()" {{ $dataMasjid['jalan_besar']  == 1 ? 'checked' : '' }} id="jalanBesarCheck" name="jalan_besar">
                            <label class="form-check-label" for="flexCheckDefault"> Masjid berada di jalan besar</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" onclick="enableGangSempit()" {{ $dataMasjid['gang_sempit']  == 1 ? 'checked' : '' }} id="gangSempitCheck" name="gang_sempit">
                            <label class="form-check-label" for="flexCheckDefault"> Masjid berada di gang sempit</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span class="text-center font-weight-bold">Kegiatan Masjid</span>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['shalat_lima_waktu']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="shalat_lima_waktu">
                            <label class="form-check-label" for="flexCheckDefault"> Shalat Lima Waktu</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['khotbah']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="khotbah">
                            <label class="form-check-label" for="flexCheckDefault"> Khotbah</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['tabligh_akbar']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="tabligh_akbar">
                            <label class="form-check-label" for="flexCheckDefault"> Tabligh Akbar</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['ceramah_rutin']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="ceramah_rutin">
                            <label class="form-check-label" for="flexCheckDefault"> Ceramah Rutin</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['maghrib_mengaji']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="maghrib_mengaji">
                            <label class="form-check-label" for="flexCheckDefault"> Maghrib Mengaji</label>
                        </div>
                    </div>
                        <div class="col-md-4">
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['tahsin_alquran']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="tahsin_alquran">
                                <label class="form-check-label" for="flexCheckDefault"> Tahsin Alquran</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['tahfidz_quran']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="tahfidz_quran">
                                <label class="form-check-label" for="flexCheckDefault"> Tahfidz Quran</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['wirid_remaja']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="wirid_remaja">
                                <label class="form-check-label" for="flexCheckDefault"> Wirid Remaja</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['didikan_subuh']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="didikan_subuh">
                                <label class="form-check-label" for="flexCheckDefault"> Didikan Subuh</label>
                            </div>
                            <div class="ml-4 form-check">
                                <input class="form-check-input" type="checkbox" value="1" {{ $dataMasjid['pelaksanaan_fardhu_kifayah']  == 1 ? 'checked' : '' }} id="flexCheckDefault" name="pelaksanaan_fardhu_kifayah">
                                <label class="form-check-label" for="flexCheckDefault"> Pelaksanaan Fardhu Kifayah</label>
                            </div>
                        </div>
                </div>
            </div>
            <div class="submitBtn d-flex justify-content-center mt-5">
                <button class="btn btn-primary">Simpan</button>
            </div>
          </form>
          {{-- @endforeach --}}
      </div>
    </div>
  </div>

  <script>
      const resetValue = () => {
        let inputTagValue = document.querySelectorAll('input').value
        inputTagValue = ''
        console.log(inputTagValue)
      }
  </script>
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