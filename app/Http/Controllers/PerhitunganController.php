<?php

namespace App\Http\Controllers;

use App\Models\AverageModel;
use App\Models\KmeansModel;
use App\Models\PengujianModel;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{

    public function hitungData(Request $request)
    {
        // Method & Fungsi--------------
        $dataCluster = KmeansModel::where('iteration', 1)->get();
        KmeansModel::where('centroid', true)->update([
            'centroid' => false
        ]);

        // Data Centroid 1
        $id_centroid1 = KmeansModel::inRandomOrder()->first();
        $centroid1 = KmeansModel::where('id', $id_centroid1->id);
        $garis_lintang1 = $centroid1->pluck('garis_lintang')->first();
        $garis_bujur1 = $centroid1->pluck('garis_bujur')->first();
        $jalan_besar1 = $centroid1->pluck('jalan_besar')->first();
        $gang_sempit1 = $centroid1->pluck('gang_sempit')->first();
        $shalat_lima_waktu1 = $centroid1->pluck('shalat_lima_waktu')->first();
        $khotbah1 = $centroid1->pluck('khotbah')->first();
        $tabligh_akbar1 = $centroid1->pluck('tabligh_akbar')->first();
        $ceramah_rutin1 = $centroid1->pluck('ceramah_rutin')->first();
        $maghrib_mengaji1 = $centroid1->pluck('maghrib_mengaji')->first();
        $tahsin_alquran1 = $centroid1->pluck('tahsin_alquran')->first();
        $tahfidz_quran1 = $centroid1->pluck('tahfidz_quran')->first();
        $wirid_remaja1 = $centroid1->pluck('wirid_remaja')->first();
        $didikan_subuh1 = $centroid1->pluck('didikan_subuh')->first();
        $pelaksanaan_fardhu_kifayah1 = $centroid1->pluck('pelaksanaan_fardhu_kifayah')->first();
        KmeansModel::where('id', $id_centroid1->id)->update([
            'centroid' => true
        ]);

        // Data Centroid 2
        $id_centroid2 = KmeansModel::inRandomOrder()->first();
        $centroid2 = KmeansModel::where('id', $id_centroid2->id);
        $garis_lintang2 = $centroid2->pluck('garis_lintang')->first();
        $garis_bujur2 = $centroid2->pluck('garis_bujur')->first();
        $jalan_besar2 = $centroid2->pluck('jalan_besar')->first();
        $gang_sempit2 = $centroid2->pluck('gang_sempit')->first();
        $shalat_lima_waktu2 = $centroid2->pluck('shalat_lima_waktu')->first();
        $khotbah2 = $centroid2->pluck('khotbah')->first();
        $tabligh_akbar2 = $centroid2->pluck('tabligh_akbar')->first();
        $ceramah_rutin2 = $centroid2->pluck('ceramah_rutin')->first();
        $maghrib_mengaji2 = $centroid2->pluck('maghrib_mengaji')->first();
        $tahsin_alquran2 = $centroid2->pluck('tahsin_alquran')->first();
        $tahfidz_quran2 = $centroid2->pluck('tahfidz_quran')->first();
        $wirid_remaja2 = $centroid2->pluck('wirid_remaja')->first();
        $didikan_subuh2 = $centroid2->pluck('didikan_subuh')->first();
        $pelaksanaan_fardhu_kifayah2 = $centroid2->pluck('pelaksanaan_fardhu_kifayah')->first();
        KmeansModel::where('id', $id_centroid2->id)->update([
            'centroid' => true
        ]);

        // Data Centroid 3
        $id_centroid3 = KmeansModel::inRandomOrder()->first();
        $centroid3 = KmeansModel::where('id', $id_centroid3->id);
        $garis_lintang3 = $centroid3->pluck('garis_lintang')->first();
        $garis_bujur3 = $centroid3->pluck('garis_bujur')->first();
        $jalan_besar3 = $centroid3->pluck('jalan_besar')->first();
        $gang_sempit3 = $centroid3->pluck('gang_sempit')->first();
        $shalat_lima_waktu3 = $centroid3->pluck('shalat_lima_waktu')->first();
        $khotbah3 = $centroid3->pluck('khotbah')->first();
        $tabligh_akbar3 = $centroid3->pluck('tabligh_akbar')->first();
        $ceramah_rutin3 = $centroid3->pluck('ceramah_rutin')->first();
        $maghrib_mengaji3 = $centroid3->pluck('maghrib_mengaji')->first();
        $tahsin_alquran3 = $centroid3->pluck('tahsin_alquran')->first();
        $tahfidz_quran3 = $centroid3->pluck('tahfidz_quran')->first();
        $wirid_remaja3 = $centroid3->pluck('wirid_remaja')->first();
        $didikan_subuh3 = $centroid3->pluck('didikan_subuh')->first();
        $pelaksanaan_fardhu_kifayah3 = $centroid3->pluck('pelaksanaan_fardhu_kifayah')->first();
        KmeansModel::where('id', $id_centroid3->id)->update([
            'centroid' => true
        ]);

        // Data Centroid 4
        $id_centroid4 = KmeansModel::inRandomOrder()->first();
        $centroid4 = KmeansModel::where('id', $id_centroid4->id);
        $garis_lintang4 = $centroid4->pluck('garis_lintang')->first();
        $garis_bujur4 = $centroid4->pluck('garis_bujur')->first();
        $jalan_besar4 = $centroid4->pluck('jalan_besar')->first();
        $gang_sempit4 = $centroid4->pluck('gang_sempit')->first();
        $shalat_lima_waktu4 = $centroid4->pluck('shalat_lima_waktu')->first();
        $khotbah4 = $centroid4->pluck('khotbah')->first();
        $tabligh_akbar4 = $centroid4->pluck('tabligh_akbar')->first();
        $ceramah_rutin4 = $centroid4->pluck('ceramah_rutin')->first();
        $maghrib_mengaji4 = $centroid4->pluck('maghrib_mengaji')->first();
        $tahsin_alquran4 = $centroid4->pluck('tahsin_alquran')->first();
        $tahfidz_quran4 = $centroid4->pluck('tahfidz_quran')->first();
        $wirid_remaja4 = $centroid4->pluck('wirid_remaja')->first();
        $didikan_subuh4 = $centroid4->pluck('didikan_subuh')->first();
        $pelaksanaan_fardhu_kifayah4 = $centroid4->pluck('pelaksanaan_fardhu_kifayah')->first();
        KmeansModel::where('id', $id_centroid4->id)->update([
            'centroid' => true
        ]);

        // Data Centroid 5\
        $id_centroid5 = KmeansModel::inRandomOrder()->first();
        $centroid5 = KmeansModel::where('id', $id_centroid5->id);
        $garis_lintang5 = $centroid5->pluck('garis_lintang')->first();
        $garis_bujur5 = $centroid5->pluck('garis_bujur')->first();
        $jalan_besar5 = $centroid5->pluck('jalan_besar')->first();
        $gang_sempit5 = $centroid5->pluck('gang_sempit')->first();
        $shalat_lima_waktu5 = $centroid5->pluck('shalat_lima_waktu')->first();
        $khotbah5 = $centroid5->pluck('khotbah')->first();
        $tabligh_akbar5 = $centroid5->pluck('tabligh_akbar')->first();
        $ceramah_rutin5 = $centroid5->pluck('ceramah_rutin')->first();
        $maghrib_mengaji5 = $centroid5->pluck('maghrib_mengaji')->first();
        $tahsin_alquran5 = $centroid5->pluck('tahsin_alquran')->first();
        $tahfidz_quran5 = $centroid5->pluck('tahfidz_quran')->first();
        $wirid_remaja5 = $centroid5->pluck('wirid_remaja')->first();
        $didikan_subuh5 = $centroid5->pluck('didikan_subuh')->first();
        $pelaksanaan_fardhu_kifayah5 = $centroid5->pluck('pelaksanaan_fardhu_kifayah')->first();
        KmeansModel::where('id', $id_centroid5->id)->update([
            'centroid' => true
        ]);

        // Cluster ke-1
        foreach ($dataCluster as $data) {
            $garis_lintang = (float)$data->garis_lintang;
            $garis_bujur = (float)$data->garis_bujur;
            $jalan_besar = $data->jalan_besar;
            $gang_sempit = $data->gang_sempit;
            $shalat_lima_waktu = $data->shalat_lima_waktu;
            $khotbah = $data->khotbah;
            $tabligh_akbar = $data->tabligh_akbar;
            $ceramah_rutin = $data->ceramah_rutin;
            $maghrib_mengaji = $data->maghrib_mengaji;
            $tahsin_alquran = $data->tahsin_alquran;
            $tahfidz_quran = $data->tahfidz_quran;
            $wirid_remaja = $data->wirid_remaja;
            $didikan_subuh = $data->didikan_subuh;
            $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

            // $cluster1 = sqrt(pow($garis_lintang - $garis_lintang1, 2) + pow($garis_bujur - $garis_bujur1, 2) + pow($kendaraan - $kendaraan1, 2));
            $cluster1 = sqrt(pow($garis_lintang - $garis_lintang1, 2) + pow($garis_bujur - $garis_bujur1, 2) + pow($jalan_besar - $jalan_besar1, 2)
                + pow($gang_sempit - $gang_sempit1, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu1, 2) + pow($khotbah - $khotbah1, 2) + pow($tabligh_akbar - $tabligh_akbar1, 2)
                + pow($ceramah_rutin - $ceramah_rutin1, 2) + pow($maghrib_mengaji - $maghrib_mengaji1, 2) + pow($tahsin_alquran - $tahsin_alquran1, 2) + pow($tahfidz_quran - $tahfidz_quran1, 2)
                + pow($wirid_remaja - $wirid_remaja1, 2) + pow($didikan_subuh - $didikan_subuh1, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah1, 2));

            KmeansModel::where('id', $data->id)->update([
                'C1' => strval($cluster1),
                'jarak_terdekat' => '',
                'kelompok_data' => '',
                'iteration' => 1
            ]);
        }

        // Cluster ke-2
        foreach ($dataCluster as $data) {
            $garis_lintang = (float)$data->garis_lintang;
            $garis_bujur = (float)$data->garis_bujur;
            $jalan_besar = $data->jalan_besar;
            $gang_sempit = $data->gang_sempit;
            $shalat_lima_waktu = $data->shalat_lima_waktu;
            $khotbah = $data->khotbah;
            $tabligh_akbar = $data->tabligh_akbar;
            $ceramah_rutin = $data->ceramah_rutin;
            $maghrib_mengaji = $data->maghrib_mengaji;
            $tahsin_alquran = $data->tahsin_alquran;
            $tahfidz_quran = $data->tahfidz_quran;
            $wirid_remaja = $data->wirid_remaja;
            $didikan_subuh = $data->didikan_subuh;
            $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

            // $cluster2 = sqrt(pow($garis_lintang - $garis_lintang2, 2) + pow($garis_bujur - $garis_bujur2, 2) + pow($kendaraan - $kendaraan2, 2));

            $cluster2 = sqrt(pow($garis_lintang - $garis_lintang2, 2) + pow($garis_bujur - $garis_bujur2, 2) + pow($jalan_besar - $jalan_besar2, 2)
                + pow($gang_sempit - $gang_sempit2, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu2, 2) + pow($khotbah - $khotbah2, 2) + pow($tabligh_akbar - $tabligh_akbar2, 2)
                + pow($ceramah_rutin - $ceramah_rutin2, 2) + pow($maghrib_mengaji - $maghrib_mengaji2, 2) + pow($tahsin_alquran - $tahsin_alquran2, 2) + pow($tahfidz_quran - $tahfidz_quran2, 2)
                + pow($wirid_remaja - $wirid_remaja2, 2) + pow($didikan_subuh - $didikan_subuh2, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah2, 2));


            KmeansModel::where('id', $data->id)->update([
                'C2' => strval($cluster2),
                'jarak_terdekat' => '',
                'kelompok_data' => '',
                'iteration' => 1
            ]);
        }

        // Cluster ke-3
        foreach ($dataCluster as $data) {
            $garis_lintang = (float)$data->garis_lintang;
            $garis_bujur = (float)$data->garis_bujur;
            $jalan_besar = $data->jalan_besar;
            $gang_sempit = $data->gang_sempit;
            $shalat_lima_waktu = $data->shalat_lima_waktu;
            $khotbah = $data->khotbah;
            $tabligh_akbar = $data->tabligh_akbar;
            $ceramah_rutin = $data->ceramah_rutin;
            $maghrib_mengaji = $data->maghrib_mengaji;
            $tahsin_alquran = $data->tahsin_alquran;
            $tahfidz_quran = $data->tahfidz_quran;
            $wirid_remaja = $data->wirid_remaja;
            $didikan_subuh = $data->didikan_subuh;
            $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

            // $cluster3 = sqrt(pow($garis_lintang - $garis_lintang3, 2) + pow($garis_bujur - $garis_bujur3, 2) + pow($kendaraan - $kendaraan3, 2));
            $cluster3 = sqrt(pow($garis_lintang - $garis_lintang3, 2) + pow($garis_bujur - $garis_bujur3, 2) + pow($jalan_besar - $jalan_besar3, 2)
                + pow($gang_sempit - $gang_sempit3, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu3, 2) + pow($khotbah - $khotbah3, 2) + pow($tabligh_akbar - $tabligh_akbar3, 2)
                + pow($ceramah_rutin - $ceramah_rutin3, 2) + pow($maghrib_mengaji - $maghrib_mengaji3, 2) + pow($tahsin_alquran - $tahsin_alquran3, 2) + pow($tahfidz_quran - $tahfidz_quran3, 2)
                + pow($wirid_remaja - $wirid_remaja3, 2) + pow($didikan_subuh - $didikan_subuh3, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah3, 2));


            KmeansModel::where('id', $data->id)->update([
                'C3' => strval($cluster3),
                'jarak_terdekat' => '',
                'kelompok_data' => '',
                'iteration' => 1
            ]);
        }

        // Cluster ke-4
        foreach ($dataCluster as $data) {
            $garis_lintang = (float)$data->garis_lintang;
            $garis_bujur = (float)$data->garis_bujur;
            $jalan_besar = $data->jalan_besar;
            $gang_sempit = $data->gang_sempit;
            $shalat_lima_waktu = $data->shalat_lima_waktu;
            $khotbah = $data->khotbah;
            $tabligh_akbar = $data->tabligh_akbar;
            $ceramah_rutin = $data->ceramah_rutin;
            $maghrib_mengaji = $data->maghrib_mengaji;
            $tahsin_alquran = $data->tahsin_alquran;
            $tahfidz_quran = $data->tahfidz_quran;
            $wirid_remaja = $data->wirid_remaja;
            $didikan_subuh = $data->didikan_subuh;
            $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

            $cluster4 = sqrt(pow($garis_lintang - $garis_lintang4, 2) + pow($garis_bujur - $garis_bujur4, 2) + pow($jalan_besar - $jalan_besar4, 2)
                + pow($gang_sempit - $gang_sempit4, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu4, 2) + pow($khotbah - $khotbah4, 2) + pow($tabligh_akbar - $tabligh_akbar4, 2)
                + pow($ceramah_rutin - $ceramah_rutin4, 2) + pow($maghrib_mengaji - $maghrib_mengaji4, 2) + pow($tahsin_alquran - $tahsin_alquran4, 2) + pow($tahfidz_quran - $tahfidz_quran4, 2)
                + pow($wirid_remaja - $wirid_remaja4, 2) + pow($didikan_subuh - $didikan_subuh4, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah4, 2));


            KmeansModel::where('id', $data->id)->update([
                'C4' => strval($cluster4),
                'jarak_terdekat' => '',
                'kelompok_data' => '',
                'iteration' => 1
            ]);
        }

        // Cluster ke-5
        foreach ($dataCluster as $data) {
            $garis_lintang = (float)$data->garis_lintang;
            $garis_bujur = (float)$data->garis_bujur;
            $jalan_besar = $data->jalan_besar;
            $gang_sempit = $data->gang_sempit;
            $shalat_lima_waktu = $data->shalat_lima_waktu;
            $khotbah = $data->khotbah;
            $tabligh_akbar = $data->tabligh_akbar;
            $ceramah_rutin = $data->ceramah_rutin;
            $maghrib_mengaji = $data->maghrib_mengaji;
            $tahsin_alquran = $data->tahsin_alquran;
            $tahfidz_quran = $data->tahfidz_quran;
            $wirid_remaja = $data->wirid_remaja;
            $didikan_subuh = $data->didikan_subuh;
            $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

            $cluster5 = sqrt(pow($garis_lintang - $garis_lintang5, 2) + pow($garis_bujur - $garis_bujur5, 2) + pow($jalan_besar - $jalan_besar5, 2)
                + pow($gang_sempit - $gang_sempit5, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu5, 2) + pow($khotbah - $khotbah5, 2) + pow($tabligh_akbar - $tabligh_akbar5, 2)
                + pow($ceramah_rutin - $ceramah_rutin5, 2) + pow($maghrib_mengaji - $maghrib_mengaji5, 2) + pow($tahsin_alquran - $tahsin_alquran5, 2) + pow($tahfidz_quran - $tahfidz_quran5, 2)
                + pow($wirid_remaja - $wirid_remaja5, 2) + pow($didikan_subuh - $didikan_subuh5, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah5, 2));


            KmeansModel::where('id', $data->id)->update([
                'C5' => strval($cluster5),
                'jarak_terdekat' => '',
                'kelompok_data' => '',
                'iteration' => 1
            ]);
        }

        // Jarak Terdekat dan Kelompok Data
        $dataCluster = KmeansModel::where('iteration', 1)->get();
        foreach ($dataCluster as $data) {
            if ((float)$data->C1 < (float)$data->C2 && (float)$data->C1 < (float)$data->C3  && (float)$data->C1 < (float)$data->C4  && (float)$data->C1 < (float)$data->C5) {
                KmeansModel::where('id', $data->id)->update([
                    'jarak_terdekat' => (float)$data->C1,
                    'kelompok_data' => 'C1'
                ]);
            } else if ((float)$data->C2 < (float)$data->C1 && (float)$data->C2 < (float)$data->C3 && (float)$data->C2 < (float)$data->C4 && (float)$data->C2 < (float)$data->C5) {
                KmeansModel::where('id', $data->id)->update([
                    'jarak_terdekat' => (float)$data->C2,
                    'kelompok_data' => 'C2'
                ]);
            } else if ((float)$data->C3 < (float)$data->C1 && (float)$data->C3 < (float)$data->C2 && (float)$data->C3 < (float)$data->C4 && (float)$data->C3 < (float)$data->C5) {
                KmeansModel::where('id', $data->id)->update([
                    'jarak_terdekat' => (float)$data->C3,
                    'kelompok_data' => 'C3'
                ]);
            } else if ((float)$data->C4 < (float)$data->C1 && (float)$data->C4 < (float)$data->C2 && (float)$data->C4 < (float)$data->C3 && (float)$data->C4 < (float)$data->C5) {
                KmeansModel::where('id', $data->id)->update([
                    'jarak_terdekat' => (float)$data->C4,
                    'kelompok_data' => 'C4'
                ]);
            } else if ((float)$data->C5 < (float)$data->C1 && (float)$data->C5 < (float)$data->C2 && (float)$data->C5 < (float)$data->C3 && (float)$data->C5 < (float)$data->C4) {
                KmeansModel::where('id', $data->id)->update([
                    'jarak_terdekat' => (float)$data->C5,
                    'kelompok_data' => 'C5'
                ]);
            }
        }

        // $iterationCount = KmeansModel::max('iteration');
        // $centroid1 = KmeansModel::where('kelompok_data', 'C1')->where('iteration', $iterationCount - 1);

        $dataCluster = KmeansModel::where('iteration', 1)->get();
        $i = 1;
        do {
            $i++;
            // Membuat data baru di iterasi selanjutnya
            foreach ($dataCluster as $data) {
                KmeansModel::create([
                    'kode_masjid_penceramah' => $data->kode_masjid_penceramah,
                    'nama_masjid_penceramah' => $data->nama_masjid_penceramah,
                    'garis_lintang' => $data->garis_lintang,
                    'garis_bujur' => $data->garis_bujur,
                    'jalan_besar' => $data->jalan_besar,
                    'gang_sempit' => $data->gang_sempit,
                    'shalat_lima_waktu' => $data->shalat_lima_waktu,
                    'khotbah' => $data->khotbah,
                    'tabligh_akbar' => $data->tabligh_akbar,
                    'ceramah_rutin' => $data->ceramah_rutin,
                    'maghrib_mengaji' => $data->maghrib_mengaji,
                    'tahsin_alquran' => $data->tahsin_alquran,
                    'tahfidz_quran' => $data->tahfidz_quran,
                    'wirid_remaja' => $data->wirid_remaja,
                    'didikan_subuh' => $data->didikan_subuh,
                    'pelaksanaan_fardhu_kifayah' => $data->pelaksanaan_fardhu_kifayah,
                    'C1' => '',
                    'C2' => '',
                    'C3' => '',
                    'C4' => '',
                    'C5' => '',
                    'jarak_terdekat' => '',
                    'kelompok_data' => '',
                    'category' => $data->category,
                    'centroid' => 0,
                    'iteration' => $i
                ]);
            }

            // Hitung iterasi selanjutnya

            // $iterationCount = $request->iterationCount;
            $dataCluster = KmeansModel::where('iteration', $i)->get();
            $centroid1 = KmeansModel::where('kelompok_data', 'C1')->where('iteration', $i - 1);
            $garis_lintang1 = $centroid1->sum('garis_lintang') / $centroid1->count();
            $garis_bujur1 = $centroid1->sum('garis_bujur') / $centroid1->count();
            $jalan_besar1 = $centroid1->sum('jalan_besar') / $centroid1->count();
            $gang_sempit1 = $centroid1->sum('gang_sempit') / $centroid1->count();
            $shalat_lima_waktu1 = $centroid1->sum('shalat_lima_waktu') / $centroid1->count();
            $khotbah1 = $centroid1->sum('khotbah') / $centroid1->count();
            $tabligh_akbar1 = $centroid1->sum('tabligh_akbar') / $centroid1->count();
            $ceramah_rutin1 = $centroid1->sum('ceramah_rutin') / $centroid1->count();
            $maghrib_mengaji1 = $centroid1->sum('maghrib_mengaji') / $centroid1->count();
            $tahsin_alquran1 = $centroid1->sum('tahsin_alquran') / $centroid1->count();
            $tahfidz_quran1 = $centroid1->sum('tahfidz_quran') / $centroid1->count();
            $wirid_remaja1 = $centroid1->sum('wirid_remaja') / $centroid1->count();
            $didikan_subuh1 = $centroid1->sum('didikan_subuh') / $centroid1->count();
            $pelaksanaan_fardhu_kifayah1 = $centroid1->sum('pelaksanaan_fardhu_kifayah') / $centroid1->count();

            $centroid2 = KmeansModel::where('kelompok_data', 'C2')->where('iteration', $i - 1);
            $garis_lintang2 = $centroid2->sum('garis_lintang') / $centroid2->count();
            $garis_bujur2 = $centroid2->sum('garis_bujur') / $centroid2->count();
            $jalan_besar2 = $centroid2->sum('jalan_besar') / $centroid2->count();
            $gang_sempit2 = $centroid2->sum('gang_sempit') / $centroid2->count();
            $shalat_lima_waktu2 = $centroid2->sum('shalat_lima_waktu') / $centroid2->count();
            $khotbah2 = $centroid2->sum('khotbah') / $centroid2->count();
            $tabligh_akbar2 = $centroid2->sum('tabligh_akbar') / $centroid2->count();
            $ceramah_rutin2 = $centroid2->sum('ceramah_rutin') / $centroid2->count();
            $maghrib_mengaji2 = $centroid2->sum('maghrib_mengaji') / $centroid2->count();
            $tahsin_alquran2 = $centroid2->sum('tahsin_alquran') / $centroid2->count();
            $tahfidz_quran2 = $centroid2->sum('tahfidz_quran') / $centroid2->count();
            $wirid_remaja2 = $centroid2->sum('wirid_remaja') / $centroid2->count();
            $didikan_subuh2 = $centroid2->sum('didikan_subuh') / $centroid2->count();
            $pelaksanaan_fardhu_kifayah2 = $centroid2->sum('pelaksanaan_fardhu_kifayah') / $centroid2->count();

            $centroid3 = KmeansModel::where('kelompok_data', 'C3')->where('iteration', $i - 1);
            $garis_lintang3 = $centroid3->sum('garis_lintang') / $centroid3->count();
            $garis_bujur3 = $centroid3->sum('garis_bujur') / $centroid3->count();
            $jalan_besar3 = $centroid3->sum('jalan_besar') / $centroid3->count();
            $gang_sempit3 = $centroid3->sum('gang_sempit') / $centroid3->count();
            $shalat_lima_waktu3 = $centroid3->sum('shalat_lima_waktu') / $centroid3->count();
            $khotbah3 = $centroid3->sum('khotbah') / $centroid3->count();
            $tabligh_akbar3 = $centroid3->sum('tabligh_akbar') / $centroid3->count();
            $ceramah_rutin3 = $centroid3->sum('ceramah_rutin') / $centroid3->count();
            $maghrib_mengaji3 = $centroid3->sum('maghrib_mengaji') / $centroid3->count();
            $tahsin_alquran3 = $centroid3->sum('tahsin_alquran') / $centroid3->count();
            $tahfidz_quran3 = $centroid3->sum('tahfidz_quran') / $centroid3->count();
            $wirid_remaja3 = $centroid3->sum('wirid_remaja') / $centroid3->count();
            $didikan_subuh3 = $centroid3->sum('didikan_subuh') / $centroid3->count();
            $pelaksanaan_fardhu_kifayah3 = $centroid3->sum('pelaksanaan_fardhu_kifayah') / $centroid3->count();

            $centroid4 = KmeansModel::where('kelompok_data', 'C4')->where('iteration', $i - 1);
            $garis_lintang4 = $centroid4->sum('garis_lintang') / $centroid4->count();
            $garis_bujur4 = $centroid4->sum('garis_bujur') / $centroid4->count();
            $jalan_besar4 = $centroid4->sum('jalan_besar') / $centroid4->count();
            $gang_sempit4 = $centroid4->sum('gang_sempit') / $centroid4->count();
            $shalat_lima_waktu4 = $centroid4->sum('shalat_lima_waktu') / $centroid4->count();
            $khotbah4 = $centroid4->sum('khotbah') / $centroid4->count();
            $tabligh_akbar4 = $centroid4->sum('tabligh_akbar') / $centroid4->count();
            $ceramah_rutin4 = $centroid4->sum('ceramah_rutin') / $centroid4->count();
            $maghrib_mengaji4 = $centroid4->sum('maghrib_mengaji') / $centroid4->count();
            $tahsin_alquran4 = $centroid4->sum('tahsin_alquran') / $centroid4->count();
            $tahfidz_quran4 = $centroid4->sum('tahfidz_quran') / $centroid4->count();
            $wirid_remaja4 = $centroid4->sum('wirid_remaja') / $centroid4->count();
            $didikan_subuh4 = $centroid4->sum('didikan_subuh') / $centroid4->count();
            $pelaksanaan_fardhu_kifayah4 = $centroid4->sum('pelaksanaan_fardhu_kifayah') / $centroid4->count();

            $centroid5 = KmeansModel::where('kelompok_data', 'C5')->where('iteration', $i - 1);
            $garis_lintang5 = $centroid5->sum('garis_lintang') / $centroid5->count();
            $garis_bujur5 = $centroid5->sum('garis_bujur') / $centroid5->count();
            $jalan_besar5 = $centroid5->sum('jalan_besar') / $centroid5->count();
            $gang_sempit5 = $centroid5->sum('gang_sempit') / $centroid5->count();
            $shalat_lima_waktu5 = $centroid5->sum('shalat_lima_waktu') / $centroid5->count();
            $khotbah5 = $centroid5->sum('khotbah') / $centroid5->count();
            $tabligh_akbar5 = $centroid5->sum('tabligh_akbar') / $centroid5->count();
            $ceramah_rutin5 = $centroid5->sum('ceramah_rutin') / $centroid5->count();
            $maghrib_mengaji5 = $centroid5->sum('maghrib_mengaji') / $centroid5->count();
            $tahsin_alquran5 = $centroid5->sum('tahsin_alquran') / $centroid5->count();
            $tahfidz_quran5 = $centroid5->sum('tahfidz_quran') / $centroid5->count();
            $wirid_remaja5 = $centroid5->sum('wirid_remaja') / $centroid5->count();
            $didikan_subuh5 = $centroid5->sum('didikan_subuh') / $centroid5->count();
            $pelaksanaan_fardhu_kifayah5 = $centroid5->sum('pelaksanaan_fardhu_kifayah') / $centroid5->count();

            // Cluster ke-1
            foreach ($dataCluster as $data) {
                $garis_lintang = (float)$data->garis_lintang;
                $garis_bujur = (float)$data->garis_bujur;
                $jalan_besar = $data->jalan_besar;
                $gang_sempit = $data->gang_sempit;
                $shalat_lima_waktu = $data->shalat_lima_waktu;
                $khotbah = $data->khotbah;
                $tabligh_akbar = $data->tabligh_akbar;
                $ceramah_rutin = $data->ceramah_rutin;
                $maghrib_mengaji = $data->maghrib_mengaji;
                $tahsin_alquran = $data->tahsin_alquran;
                $tahfidz_quran = $data->tahfidz_quran;
                $wirid_remaja = $data->wirid_remaja;
                $didikan_subuh = $data->didikan_subuh;
                $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

                // $cluster1 = sqrt(pow($garis_lintang - $garis_lintang1, 2) + pow($garis_bujur - $garis_bujur1, 2) + pow($kendaraan - $kendaraan1, 2));
                $cluster1 = sqrt(pow($garis_lintang - $garis_lintang1, 2) + pow($garis_bujur - $garis_bujur1, 2) + pow($jalan_besar - $jalan_besar1, 2)
                    + pow($gang_sempit - $gang_sempit1, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu1, 2) + pow($khotbah - $khotbah1, 2) + pow($tabligh_akbar - $tabligh_akbar1, 2)
                    + pow($ceramah_rutin - $ceramah_rutin1, 2) + pow($maghrib_mengaji - $maghrib_mengaji1, 2) + pow($tahsin_alquran - $tahsin_alquran1, 2) + pow($tahfidz_quran - $tahfidz_quran1, 2)
                    + pow($wirid_remaja - $wirid_remaja1, 2) + pow($didikan_subuh - $didikan_subuh1, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah1, 2));

                KmeansModel::where('id', $data->id)->update([
                    'C1' => strval($cluster1)
                ]);
            }

            foreach ($dataCluster as $data) {
                $garis_lintang = (float)$data->garis_lintang;
                $garis_bujur = (float)$data->garis_bujur;
                $jalan_besar = $data->jalan_besar;
                $gang_sempit = $data->gang_sempit;
                $shalat_lima_waktu = $data->shalat_lima_waktu;
                $khotbah = $data->khotbah;
                $tabligh_akbar = $data->tabligh_akbar;
                $ceramah_rutin = $data->ceramah_rutin;
                $maghrib_mengaji = $data->maghrib_mengaji;
                $tahsin_alquran = $data->tahsin_alquran;
                $tahfidz_quran = $data->tahfidz_quran;
                $wirid_remaja = $data->wirid_remaja;
                $didikan_subuh = $data->didikan_subuh;
                $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

                // $cluster2 = sqrt(pow($garis_lintang - $garis_lintang2, 2) + pow($garis_bujur - $garis_bujur2, 2) + pow($kendaraan - $kendaraan2, 2));
                $cluster2 = sqrt(pow($garis_lintang - $garis_lintang2, 2) + pow($garis_bujur - $garis_bujur2, 2) + pow($jalan_besar - $jalan_besar2, 2)
                    + pow($gang_sempit - $gang_sempit2, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu2, 2) + pow($khotbah - $khotbah2, 2) + pow($tabligh_akbar - $tabligh_akbar2, 2)
                    + pow($ceramah_rutin - $ceramah_rutin2, 2) + pow($maghrib_mengaji - $maghrib_mengaji2, 2) + pow($tahsin_alquran - $tahsin_alquran2, 2) + pow($tahfidz_quran - $tahfidz_quran2, 2)
                    + pow($wirid_remaja - $wirid_remaja2, 2) + pow($didikan_subuh - $didikan_subuh2, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah2, 2));


                KmeansModel::where('id', $data->id)->update([
                    'C2' => strval($cluster2)
                ]);
            }

            foreach ($dataCluster as $data) {
                $garis_lintang = (float)$data->garis_lintang;
                $garis_bujur = (float)$data->garis_bujur;
                $jalan_besar = $data->jalan_besar;
                $gang_sempit = $data->gang_sempit;
                $shalat_lima_waktu = $data->shalat_lima_waktu;
                $khotbah = $data->khotbah;
                $tabligh_akbar = $data->tabligh_akbar;
                $ceramah_rutin = $data->ceramah_rutin;
                $maghrib_mengaji = $data->maghrib_mengaji;
                $tahsin_alquran = $data->tahsin_alquran;
                $tahfidz_quran = $data->tahfidz_quran;
                $wirid_remaja = $data->wirid_remaja;
                $didikan_subuh = $data->didikan_subuh;
                $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

                // $cluster3 = sqrt(pow($garis_lintang - $garis_lintang3, 2) + pow($garis_bujur - $garis_bujur3, 2) + pow($kendaraan - $kendaraan3, 2));
                $cluster3 = sqrt(pow($garis_lintang - $garis_lintang3, 2) + pow($garis_bujur - $garis_bujur3, 2) + pow($jalan_besar - $jalan_besar3, 2)
                    + pow($gang_sempit - $gang_sempit3, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu3, 2) + pow($khotbah - $khotbah3, 2) + pow($tabligh_akbar - $tabligh_akbar3, 2)
                    + pow($ceramah_rutin - $ceramah_rutin3, 2) + pow($maghrib_mengaji - $maghrib_mengaji3, 2) + pow($tahsin_alquran - $tahsin_alquran3, 2) + pow($tahfidz_quran - $tahfidz_quran3, 2)
                    + pow($wirid_remaja - $wirid_remaja3, 2) + pow($didikan_subuh - $didikan_subuh3, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah3, 2));

                KmeansModel::where('id', $data->id)->update([
                    'C3' => strval($cluster3)
                ]);
            }


            foreach ($dataCluster as $data) {
                $garis_lintang = (float)$data->garis_lintang;
                $garis_bujur = (float)$data->garis_bujur;
                $jalan_besar = $data->jalan_besar;
                $gang_sempit = $data->gang_sempit;
                $shalat_lima_waktu = $data->shalat_lima_waktu;
                $khotbah = $data->khotbah;
                $tabligh_akbar = $data->tabligh_akbar;
                $ceramah_rutin = $data->ceramah_rutin;
                $maghrib_mengaji = $data->maghrib_mengaji;
                $tahsin_alquran = $data->tahsin_alquran;
                $tahfidz_quran = $data->tahfidz_quran;
                $wirid_remaja = $data->wirid_remaja;
                $didikan_subuh = $data->didikan_subuh;
                $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

                $cluster4 = sqrt(pow($garis_lintang - $garis_lintang4, 2) + pow($garis_bujur - $garis_bujur4, 2) + pow($jalan_besar - $jalan_besar4, 2)
                    + pow($gang_sempit - $gang_sempit4, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu4, 2) + pow($khotbah - $khotbah4, 2) + pow($tabligh_akbar - $tabligh_akbar4, 2)
                    + pow($ceramah_rutin - $ceramah_rutin4, 2) + pow($maghrib_mengaji - $maghrib_mengaji4, 2) + pow($tahsin_alquran - $tahsin_alquran4, 2) + pow($tahfidz_quran - $tahfidz_quran4, 2)
                    + pow($wirid_remaja - $wirid_remaja4, 2) + pow($didikan_subuh - $didikan_subuh4, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah4, 2));


                KmeansModel::where('id', $data->id)->update([
                    'C4' => strval($cluster4),
                ]);
            }

            // Cluster ke-5
            foreach ($dataCluster as $data) {
                $garis_lintang = (float)$data->garis_lintang;
                $garis_bujur = (float)$data->garis_bujur;
                $jalan_besar = $data->jalan_besar;
                $gang_sempit = $data->gang_sempit;
                $shalat_lima_waktu = $data->shalat_lima_waktu;
                $khotbah = $data->khotbah;
                $tabligh_akbar = $data->tabligh_akbar;
                $ceramah_rutin = $data->ceramah_rutin;
                $maghrib_mengaji = $data->maghrib_mengaji;
                $tahsin_alquran = $data->tahsin_alquran;
                $tahfidz_quran = $data->tahfidz_quran;
                $wirid_remaja = $data->wirid_remaja;
                $didikan_subuh = $data->didikan_subuh;
                $pelaksanaan_fardhu_kifayah = $data->pelaksanaan_fardhu_kifayah;

                $cluster5 = sqrt(pow($garis_lintang - $garis_lintang5, 2) + pow($garis_bujur - $garis_bujur5, 2) + pow($jalan_besar - $jalan_besar5, 2)
                    + pow($gang_sempit - $gang_sempit5, 2) + pow($shalat_lima_waktu - $shalat_lima_waktu5, 2) + pow($khotbah - $khotbah5, 2) + pow($tabligh_akbar - $tabligh_akbar5, 2)
                    + pow($ceramah_rutin - $ceramah_rutin5, 2) + pow($maghrib_mengaji - $maghrib_mengaji5, 2) + pow($tahsin_alquran - $tahsin_alquran5, 2) + pow($tahfidz_quran - $tahfidz_quran5, 2)
                    + pow($wirid_remaja - $wirid_remaja5, 2) + pow($didikan_subuh - $didikan_subuh5, 2) + pow($pelaksanaan_fardhu_kifayah - $pelaksanaan_fardhu_kifayah5, 2));


                KmeansModel::where('id', $data->id)->update([
                    'C5' => strval($cluster5),
                ]);
            }


            // $iterationCount = $request->iterationCount;
            $dataCluster = KmeansModel::where('iteration', $i)->get();
            // Jarak Terdekat dan Kelompok Data
            foreach ($dataCluster as $data) {
                if ((float)$data->C1 < (float)$data->C2 && (float)$data->C1 < (float)$data->C3  && (float)$data->C1 < (float)$data->C4  && (float)$data->C1 < (float)$data->C5) {
                    KmeansModel::where('id', $data->id)->update([
                        'jarak_terdekat' => (float)$data->C1,
                        'kelompok_data' => 'C1'
                    ]);
                } else if ((float)$data->C2 < (float)$data->C1 && (float)$data->C2 < (float)$data->C3 && (float)$data->C2 < (float)$data->C4 && (float)$data->C2 < (float)$data->C5) {
                    KmeansModel::where('id', $data->id)->update([
                        'jarak_terdekat' => (float)$data->C2,
                        'kelompok_data' => 'C2'
                    ]);
                } else if ((float)$data->C3 < (float)$data->C1 && (float)$data->C3 < (float)$data->C2 && (float)$data->C3 < (float)$data->C4 && (float)$data->C3 < (float)$data->C5) {
                    KmeansModel::where('id', $data->id)->update([
                        'jarak_terdekat' => (float)$data->C3,
                        'kelompok_data' => 'C3'
                    ]);
                } else if ((float)$data->C4 < (float)$data->C1 && (float)$data->C4 < (float)$data->C2 && (float)$data->C4 < (float)$data->C3 && (float)$data->C4 < (float)$data->C5) {
                    KmeansModel::where('id', $data->id)->update([
                        'jarak_terdekat' => (float)$data->C4,
                        'kelompok_data' => 'C4'
                    ]);
                } else if ((float)$data->C5 < (float)$data->C1 && (float)$data->C5 < (float)$data->C2 && (float)$data->C5 < (float)$data->C3 && (float)$data->C5 < (float)$data->C4) {
                    KmeansModel::where('id', $data->id)->update([
                        'jarak_terdekat' => (float)$data->C5,
                        'kelompok_data' => 'C5'
                    ]);
                }
            }
        } while (KmeansModel::where('iteration', '>', 1)->count() == 0 || KmeansModel::where('iteration',  $i)->pluck('kelompok_data')->toArray() != KmeansModel::where('iteration',  $i - 1)->pluck('kelompok_data')->toArray());

        return redirect('/kmeans')->with([
            $request->session()->flash('hasil_perhitungan', 'Selesai')
        ]);
    }

    public function cleanData(Request $request)
    {
        KmeansModel::where('iteration', '>', 1)->delete();
        PengujianModel::truncate();
        AverageModel::truncate();
        KmeansModel::where('iteration', 1)->update([
            'C1' => '',
            'C2' => '',
            'C3' => '',
            'C4' => '',
            'C5' => '',
            'jarak_terdekat' => '',
            'kelompok_data' => '',
            'centroid' => 0
        ]);

        return redirect('/kmeans')->with([
            $request->session()->flash('clean_data', 'Data telah dibersihkan')
        ]);
    }
}
