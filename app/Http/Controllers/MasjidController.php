<?php

namespace App\Http\Controllers;

use App\Models\KmeansModel;
use App\Models\MasjidModel;
use Illuminate\Http\Request;

class MasjidController extends Controller
{
    public function tambahData(Request $request)
    {

        $request->validate(
            [
                'nama_masjid' => 'required',
                'garis_lintang' => 'required|numeric',
                'garis_bujur' => 'required|numeric'
            ],
            [
                'nama_masjid.required' => 'Nama Masjid tidak boleh kosong!',
                'garis_lintang.required' => 'Garis Lintang tidak boleh kosong!',
                'garis_lintang.numeric' => 'Garis Lintang harus angka/numeric!',
                'garis_bujur.required' => 'Garis Bujur tidak boleh kosong!',
                'garis_bujur.numeric' => 'Garis Bujur harus angka/numeric!'
            ]
        );

        $data = [
            'kode_masjid' => 'M-' . base64_encode($request->nama_masjid),
            'nama_masjid' => $request->nama_masjid,
            'nama_ketua' => $request->nama_ketua,
            'nama_bendahara' => $request->nama_bendahara,
            'tipe_masjid' => $request->tipe_masjid,
            // 'lokasi_masjid' => $request->lokasi_masjid,
            'sarana_masjid' => $request->sarana_masjid,
            'daya_tampung' => $request->daya_tampung,
            'aktivitas_masjid' => $request->aktivitas_masjid,
            'alamat_lengkap' => $request->alamat_lengkap,
            'nama_sekretaris' => $request->nama_sekretaris,
            'aktivitas_kajian_khusus' => $request->aktivitas_kajian_khusus,
            'aktivitas_ekonomi' => $request->aktivitas_ekonomi,
            'lembaga_sosial' => $request->lembaga_sosial,
            'garis_lintang' => $request->garis_lintang,
            'garis_bujur' => $request->garis_bujur,
            'geo_address' => $request->geo_address,
            'infaq_perbulan' => $request->infaq_perbulan,
            'category' => 2,
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

        MasjidModel::create($data);
        KmeansModel::create([
            'kode_masjid_penceramah' => 'M-' . base64_encode($request->nama_masjid),
            'nama_masjid_penceramah' => $request->nama_masjid,
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
            // 'kendaraan' => $request->lokasi_masjid,
            'C1' => '',
            'C2' => '',
            'C3' => '',
            'C4' => '',
            'C5' => '',
            'jarak_terdekat' => '',
            'kelompok_data' => '',
            'category' => 2,
            'centroid' => false,
            'iteration' => 1
        ]);

        return redirect('/masjid')->with([
            $request->session()->flash('tambah_data')
        ]);
    }

    public function updateData(Request $request)
    {
        $kode_masjid = $request->kode_masjid;
        $data = [
            'nama_masjid' => $request->nama_masjid,
            'nama_ketua' => $request->nama_ketua,
            'nama_bendahara' => $request->nama_bendahara,
            'tipe_masjid' => $request->tipe_masjid,
            // 'lokasi_masjid' => $request->lokasi_masjid,
            'sarana_masjid' => $request->sarana_masjid,
            'daya_tampung' => $request->daya_tampung,
            'aktivitas_masjid' => $request->aktivitas_masjid,
            'alamat_lengkap' => $request->alamat_lengkap,
            'nama_sekretaris' => $request->nama_sekretaris,
            'aktivitas_kajian_khusus' => $request->aktivitas_kajian_khusus,
            'aktivitas_ekonomi' => $request->aktivitas_ekonomi,
            'lembaga_sosial' => $request->lembaga_sosial,
            'garis_lintang' => $request->garis_lintang,
            'garis_bujur' => $request->garis_bujur,
            'geo_address' => $request->geo_address,
            'infaq_perbulan' => $request->infaq_perbulan,
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

        MasjidModel::where('kode_masjid', $kode_masjid)->update($data);
        KmeansModel::where('kode_masjid_penceramah', $kode_masjid)->update([
            'nama_masjid_penceramah' => $request->nama_masjid,
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
        return redirect('/masjid')->with([
            $request->session()->flash('edit_data')
        ]);
    }

    public function hapusData(Request $request, $kode)
    {
        MasjidModel::where('kode_masjid', base64_decode($kode))->delete();
        KmeansModel::where('kode_masjid_penceramah', base64_decode($kode))->where('iteration', 1)->delete();
        return redirect('/masjid')->with([
            $request->session()->flash('hapus_data')
        ]);
    }
}
