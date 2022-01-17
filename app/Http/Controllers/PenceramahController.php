<?php

namespace App\Http\Controllers;

use App\Models\KmeansModel;
use App\Models\PenceramahModel;
use Illuminate\Http\Request;

class PenceramahController extends Controller
{
    public function tambahPenceramah(Request $request)
    {

        $request->validate(
            [
                'nama_penceramah' => 'required',
                'garis_lintang' => 'required|numeric',
                'garis_bujur' => 'required|numeric'
            ],
            [
                'nama_penceramah.required' => 'Nama Penceramah tidak boleh kosong!',
                'garis_lintang.required' => 'Garis Lintang tidak boleh kosong!',
                'garis_lintang.numeric' => 'Garis Lintang harus angka/numeric!',
                'garis_bujur.required' => 'Garis Bujur tidak boleh kosong!',
                'garis_bujur.numeric' => 'Garis Bujur harus angka/numeric!'
            ]
        );

        $hanafi = $request->hanafi;
        $syafii = $request->syafii;
        $hambali = $request->hambali;
        $maliki = $request->maliki;

        $madzhab = [$hanafi, $syafii, $hambali, $maliki];

        $data = [
            'kode_penceramah' => 'P-' . base64_encode($request->nama_penceramah),
            'nama_penceramah' => $request->nama_penceramah,
            'no_hp' => $request->no_hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            // 'kendaraan' => $request->kendaraan,
            'madzhab_fiqih' => implode(', ', $madzhab),
            'organisasi' => $request->organisasi,
            'hafalan_alquran' => $request->hafalan_alquran,
            'kompetensi_ibadah' => $request->kompetensi_ibadah,
            'kompetensi_aqidah' => $request->kompetensi_aqidah,
            'kompetensi_bahasa' => $request->kompetensi_bahasa,
            'kompetensi_keterampilan' => $request->kompetensi_keterampilan,
            'kompetensi_ekonomi' => $request->kompetensi_ekonomi,
            'prestasi' => $request->prestasi,
            'jurusan_ijazah_terakhir' => $request->jurusan_ijazah_terakhir,
            'alamat_domisili_asal' => $request->alamat_domisili_asal,
            'garis_lintang' => $request->garis_lintang,
            'garis_bujur' => $request->garis_bujur,
            'geo_address' => $request->geo_address,
            'category' => 1,
            'jalan_besar' => $request->jalan_besar == '1' ? 1 : 0,
            'gang_sempit' => $request->gang_sempit == '1' ? 1 : 0,
            'shalat_lima_waktu' => $request->shalat_lima_waktu == '1' ? 1 : 0,
            'khotbah' => $request->khotbah == '1' ? 1 : 0,
            'tabligh_akbar' => $request->tabligh_akbar == '1' ? 1 : 0,
            'ceramah_rutin' => $request->ceramah_rutin == '1' ? 1 : 0,
            'maghrib_mengaji' => $request->maghrib_mengaji == '1' ? 1 : 0,
            'tahsin_alquran' => $request->tahsin_alquran == '1' ? 1 : 0,
            'tahfidz_quran' => $request->tahfidz_quran == '1' ? 1 : 0,
            'wirid_remaja' => $request->wirid_remaja == '1' ? 1 : 0,
            'didikan_subuh' => $request->didikan_subuh == '1' ? 1 : 0,
            'pelaksanaan_fardhu_kifayah' => $request->pelaksanaan_fardhu_kifayah == '1' ? 1 : 0,
        ];

        PenceramahModel::create($data);
        KmeansModel::create([
            'kode_masjid_penceramah' => 'P-' . base64_encode($request->nama_penceramah),
            'nama_masjid_penceramah' => $request->nama_penceramah,
            'garis_lintang' => $request->garis_lintang,
            'garis_bujur' => $request->garis_bujur,
            // 'kendaraan' => $request->kendaraan,
            'C1' => '',
            'C2' => '',
            'C3' => '',
            'C4' => '',
            'C5' => '',
            'jarak_terdekat' => '',
            'kelompok_data' => '',
            'category' => 1,
            'centroid' => false,
            'iteration' => 1,
            'jalan_besar' => $request->jalan_besar == '1' ? 1 : 0,
            'gang_sempit' => $request->gang_sempit == '1' ? 1 : 0,
            'shalat_lima_waktu' => $request->shalat_lima_waktu == '1' ? 1 : 0,
            'khotbah' => $request->khotbah == '1' ? 1 : 0,
            'tabligh_akbar' => $request->tabligh_akbar == '1' ? 1 : 0,
            'ceramah_rutin' => $request->ceramah_rutin == '1' ? 1 : 0,
            'maghrib_mengaji' => $request->maghrib_mengaji == '1' ? 1 : 0,
            'tahsin_alquran' => $request->tahsin_alquran == '1' ? 1 : 0,
            'tahfidz_quran' => $request->tahfidz_quran == '1' ? 1 : 0,
            'wirid_remaja' => $request->wirid_remaja == '1' ? 1 : 0,
            'didikan_subuh' => $request->didikan_subuh == '1' ? 1 : 0,
            'pelaksanaan_fardhu_kifayah' => $request->pelaksanaan_fardhu_kifayah == '1' ? 1 : 0,
        ]);

        return redirect('/penceramah')->with([
            $request->session()->flash('tambah_data')
        ]);
    }

    public function updatePenceramah(Request $request)
    {

        $hanafi = $request->hanafi;
        $syafii = $request->syafii;
        $hambali = $request->hambali;
        $maliki = $request->maliki;

        $madzhab = [$hanafi, $syafii, $hambali, $maliki];
        $kode_penceramah = $request->kode_penceramah;

        $data = [
            'nama_penceramah' => $request->nama_penceramah,
            'no_hp' => $request->no_hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'madzhab_fiqih' => implode(', ', $madzhab),
            'organisasi' => $request->organisasi,
            'hafalan_alquran' => $request->hafalan_alquran,
            'kompetensi_ibadah' => $request->kompetensi_ibadah,
            'kompetensi_aqidah' => $request->kompetensi_aqidah,
            'kompetensi_bahasa' => $request->kompetensi_bahasa,
            'kompetensi_keterampilan' => $request->kompetensi_keterampilan,
            'kompetensi_ekonomi' => $request->kompetensi_ekonomi,
            'prestasi' => $request->prestasi,
            'jurusan_ijazah_terakhir' => $request->jurusan_ijazah_terakhir,
            'alamat_domisili_asal' => $request->alamat_domisili_asal,
            'garis_lintang' => $request->garis_lintang,
            'garis_bujur' => $request->garis_bujur,
            'geo_address' => $request->geo_address,
            'category' => 1,
            'jalan_besar' => $request->jalan_besar == '1' ? 1 : 0,
            'gang_sempit' => $request->gang_sempit == '1' ? 1 : 0,
            'shalat_lima_waktu' => $request->shalat_lima_waktu == '1' ? 1 : 0,
            'khotbah' => $request->khotbah == '1' ? 1 : 0,
            'tabligh_akbar' => $request->tabligh_akbar == '1' ? 1 : 0,
            'ceramah_rutin' => $request->ceramah_rutin == '1' ? 1 : 0,
            'maghrib_mengaji' => $request->maghrib_mengaji == '1' ? 1 : 0,
            'tahsin_alquran' => $request->tahsin_alquran == '1' ? 1 : 0,
            'tahfidz_quran' => $request->tahfidz_quran == '1' ? 1 : 0,
            'wirid_remaja' => $request->wirid_remaja == '1' ? 1 : 0,
            'didikan_subuh' => $request->didikan_subuh == '1' ? 1 : 0,
            'pelaksanaan_fardhu_kifayah' => $request->pelaksanaan_fardhu_kifayah == '1' ? 1 : 0,
        ];

        PenceramahModel::where('kode_penceramah', $kode_penceramah)->update($data);
        KmeansModel::where('kode_masjid_penceramah', $kode_penceramah)->update([
            'nama_masjid_penceramah' => $request->nama_penceramah,
            'garis_lintang' => $request->garis_lintang,
            'garis_bujur' => $request->garis_bujur,
            'jalan_besar' => $request->jalan_besar == '1' ? 1 : 0,
            'gang_sempit' => $request->gang_sempit == '1' ? 1 : 0,
            'shalat_lima_waktu' => $request->shalat_lima_waktu == '1' ? 1 : 0,
            'khotbah' => $request->khotbah == '1' ? 1 : 0,
            'tabligh_akbar' => $request->tabligh_akbar == '1' ? 1 : 0,
            'ceramah_rutin' => $request->ceramah_rutin == '1' ? 1 : 0,
            'maghrib_mengaji' => $request->maghrib_mengaji == '1' ? 1 : 0,
            'tahsin_alquran' => $request->tahsin_alquran == '1' ? 1 : 0,
            'tahfidz_quran' => $request->tahfidz_quran == '1' ? 1 : 0,
            'wirid_remaja' => $request->wirid_remaja == '1' ? 1 : 0,
            'didikan_subuh' => $request->didikan_subuh == '1' ? 1 : 0,
            'pelaksanaan_fardhu_kifayah' => $request->pelaksanaan_fardhu_kifayah == '1' ? 1 : 0,
        ]);
        return redirect('/penceramah')->with([
            $request->session()->flash('edit_data')
        ]);
    }

    public function deletePenceramah(Request $request, $kode)
    {
        PenceramahModel::where('kode_penceramah', base64_decode($kode))->delete();
        KmeansModel::where('kode_masjid_penceramah', base64_decode($kode))->where('iteration', 1)->delete();
        return redirect('/penceramah')->with([
            $request->session()->flash('hapus_data')
        ]);
    }
}
