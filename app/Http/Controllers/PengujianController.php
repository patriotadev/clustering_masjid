<?php

namespace App\Http\Controllers;

use App\Models\AverageModel;
use App\Models\KmeansModel;
use App\Models\PengujianModel;
use Illuminate\Http\Request;

class PengujianController extends Controller
{
    public function hasilPengujian(Request $request)
    {
        $iterationCount = KmeansModel::max('iteration');
        $dataPengujian_c1 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C1')->orderBy('kelompok_data')->get();
        $dataPengujian_c2 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C2')->orderBy('kelompok_data')->get();
        $dataPengujian_c3 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C3')->orderBy('kelompok_data')->get();
        $dataPengujian_c4 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C4')->orderBy('kelompok_data')->get();
        $dataPengujian_c5 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C5')->orderBy('kelompok_data')->get();
        $jumlahDataPengujian_c1 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C1')->count();
        $jumlahDataPengujian_c2 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C2')->count();
        $jumlahDataPengujian_c3 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C3')->count();
        $jumlahDataPengujian_c4 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C4')->count();
        $jumlahDataPengujian_c5 = KmeansModel::where('iteration', $iterationCount)->where('kelompok_data', 'C5')->count();

        // Menghitung data C1
        foreach ($dataPengujian_c1 as $dataPengurang) {
            $totalHasil_a_i = 0;
            $totalHasil_d_2 = 0;
            $totalHasil_d_3 = 0;
            $totalHasil_d_4 = 0;
            $totalHasil_d_5 = 0;

            // a(i)
            foreach ($dataPengujian_c1 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_a_i +=  $hasil;
            }

            // d(2)
            foreach ($dataPengujian_c2 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_2 +=  $hasil;
            }

            // d(3)
            foreach ($dataPengujian_c3 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_3 +=  $hasil;
            }

            // d(4)
            foreach ($dataPengujian_c4 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_4 +=  $hasil;
            }

            // d(5)
            foreach ($dataPengujian_c5 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_5 +=  $hasil;
            }

            $a_i = $totalHasil_a_i / $jumlahDataPengujian_c1 - 1;
            $d_2 = $totalHasil_d_2 / $jumlahDataPengujian_c2;
            $d_3 = $totalHasil_d_3 / $jumlahDataPengujian_c3;
            $d_4 = $totalHasil_d_4 / $jumlahDataPengujian_c4;
            $d_5 = $totalHasil_d_5 / $jumlahDataPengujian_c5;
            $b_i = min($d_2, $d_3, $d_4, $d_5);
            $s_i = ($b_i - $a_i) / max($a_i, $b_i) == 0 ? 0 : ($b_i - $a_i) / max($a_i, $b_i);

            PengujianModel::create([
                'nama_masjid_penceramah' => $dataPengurang->nama_masjid_penceramah,
                'cluster' => $dataPengurang->kelompok_data,
                'a_i' => $a_i,
                'd_2' => $d_2,
                'd_3' => $d_3,
                'd_4' => $d_4,
                'd_5' => $d_5,
                'b_i' => $b_i,
                's_i' => round($s_i, 1)
            ]);
        }

        // // menghitung data C2
        foreach ($dataPengujian_c2 as $dataPengurang) {
            $totalHasil_a_i = 0;
            $totalHasil_d_1 = 0;
            $totalHasil_d_3 = 0;
            $totalHasil_d_4 = 0;
            $totalHasil_d_5 = 0;

            // a(i)
            foreach ($dataPengujian_c2 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_a_i +=  $hasil;
            }

            // d(1)
            foreach ($dataPengujian_c1 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_1 +=  $hasil;
            }

            // d(3)
            foreach ($dataPengujian_c3 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_3 +=  $hasil;
            }

            // d(4)
            foreach ($dataPengujian_c4 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_4 +=  $hasil;
            }

            // d(5)
            foreach ($dataPengujian_c5 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_5 +=  $hasil;
            }

            $a_i = $totalHasil_a_i / $jumlahDataPengujian_c2 - 1;
            $d_1 = $totalHasil_d_1 / $jumlahDataPengujian_c1;
            $d_3 = $totalHasil_d_3 / $jumlahDataPengujian_c3;
            $d_4 = $totalHasil_d_4 / $jumlahDataPengujian_c4;
            $d_5 = $totalHasil_d_5 / $jumlahDataPengujian_c5;
            $b_i = min($d_1, $d_3, $d_4, $d_5);
            $s_i = ($b_i - $a_i) / max($a_i, $b_i) == 0 ? 0 : ($b_i - $a_i) / max($a_i, $b_i);

            PengujianModel::create([
                'nama_masjid_penceramah' => $dataPengurang->nama_masjid_penceramah,
                'cluster' => $dataPengurang->kelompok_data,
                'a_i' => $a_i,
                'd_1' => $d_1,
                'd_3' => $d_3,
                'd_4' => $d_4,
                'd_5' => $d_5,
                'b_i' => $b_i,
                's_i' => round($s_i, 1)
            ]);
        }

        // // menhitung data C3
        foreach ($dataPengujian_c3 as $dataPengurang) {
            $totalHasil_a_i = 0;
            $totalHasil_d_2 = 0;
            $totalHasil_d_1 = 0;
            $totalHasil_d_4 = 0;
            $totalHasil_d_5 = 0;

            // a(i)
            foreach ($dataPengujian_c3 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_a_i +=  $hasil;
            }

            // d(2)
            foreach ($dataPengujian_c2 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_2 +=  $hasil;
            }

            // d(1)
            foreach ($dataPengujian_c1 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_1 +=  $hasil;
            }

            // d(4)
            foreach ($dataPengujian_c4 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_4 +=  $hasil;
            }

            // d(5)
            foreach ($dataPengujian_c5 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_5 +=  $hasil;
            }

            $a_i = $totalHasil_a_i / $jumlahDataPengujian_c3 - 1;
            $d_2 = $totalHasil_d_2 / $jumlahDataPengujian_c2;
            $d_1 = $totalHasil_d_1 / $jumlahDataPengujian_c1;
            $d_4 = $totalHasil_d_4 / $jumlahDataPengujian_c4;
            $d_5 = $totalHasil_d_5 / $jumlahDataPengujian_c5;
            $b_i = min($d_2, $d_1, $d_4, $d_5);
            $s_i = ($b_i - $a_i) / max($a_i, $b_i) == 0 ? 0 : ($b_i - $a_i) / max($a_i, $b_i);

            PengujianModel::create([
                'nama_masjid_penceramah' => $dataPengurang->nama_masjid_penceramah,
                'cluster' => $dataPengurang->kelompok_data,
                'a_i' => $a_i,
                'd_2' => $d_2,
                'd_1' => $d_1,
                'd_4' => $d_4,
                'd_5' => $d_5,
                'b_i' => $b_i,
                's_i' => round($s_i, 1)
            ]);
        }

        // Menghitung data C4
        foreach ($dataPengujian_c4 as $dataPengurang) {
            $totalHasil_a_i = 0;
            $totalHasil_d_2 = 0;
            $totalHasil_d_3 = 0;
            $totalHasil_d_1 = 0;
            $totalHasil_d_5 = 0;

            // a(i)
            foreach ($dataPengujian_c4 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_a_i +=  $hasil;
            }

            // d(2)
            foreach ($dataPengujian_c2 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_2 +=  $hasil;
            }

            // d(3)
            foreach ($dataPengujian_c3 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_3 +=  $hasil;
            }

            // d(1)
            foreach ($dataPengujian_c1 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_1 +=  $hasil;
            }

            // d(5)
            foreach ($dataPengujian_c5 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_5 +=  $hasil;
            }

            $a_i = $totalHasil_a_i / $jumlahDataPengujian_c4 - 1;
            $d_2 = $totalHasil_d_2 / $jumlahDataPengujian_c2;
            $d_3 = $totalHasil_d_3 / $jumlahDataPengujian_c3;
            $d_1 = $totalHasil_d_1 / $jumlahDataPengujian_c1;
            $d_5 = $totalHasil_d_5 / $jumlahDataPengujian_c5;
            $b_i = min($d_2, $d_3, $d_1, $d_5);
            $s_i = ($b_i - $a_i) / max($a_i, $b_i) == 0 ? 0 : ($b_i - $a_i) / max($a_i, $b_i);

            PengujianModel::create([
                'nama_masjid_penceramah' => $dataPengurang->nama_masjid_penceramah,
                'cluster' => $dataPengurang->kelompok_data,
                'a_i' => $a_i,
                'd_2' => $d_2,
                'd_3' => $d_3,
                'd_1' => $d_1,
                'd_5' => $d_5,
                'b_i' => $b_i,
                's_i' => round($s_i, 1)
            ]);
        }

        // Menghitung data C5
        foreach ($dataPengujian_c5 as $dataPengurang) {
            $totalHasil_a_i = 0;
            $totalHasil_d_2 = 0;
            $totalHasil_d_3 = 0;
            $totalHasil_d_4 = 0;
            $totalHasil_d_1 = 0;

            // a(i)
            foreach ($dataPengujian_c5 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_a_i +=  $hasil;
            }

            // d(2)
            foreach ($dataPengujian_c2 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_2 +=  $hasil;
            }

            // d(3)
            foreach ($dataPengujian_c3 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_3 +=  $hasil;
            }

            // d(4)
            foreach ($dataPengujian_c4 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_4 +=  $hasil;
            }

            // d(1)
            foreach ($dataPengujian_c1 as $dataKelompok) {
                $hasil = sqrt(pow($dataKelompok->garis_lintang - $dataPengurang->garis_lintang, 2) + pow($dataKelompok->garis_bujur - $dataPengurang->garis_bujur, 2)
                    + pow($dataKelompok->jalan_besar - $dataPengurang->jalan_besar, 2) + pow($dataKelompok->gang_sempit - $dataPengurang->gang_sempit, 2)
                    + pow($dataKelompok->shalat_lima_waktu - $dataPengurang->shalat_lima_waktu, 2) + pow($dataKelompok->khotbah - $dataPengurang->khotbah, 2)
                    + pow($dataKelompok->tabligh_akbar - $dataPengurang->tabligh_akbar, 2) + pow($dataKelompok->ceramah_rutin - $dataPengurang->ceramah_rutin, 2)
                    + pow($dataKelompok->maghrib_mengaji - $dataPengurang->maghrib_mengaji, 2) + pow($dataKelompok->tahsin_alquran - $dataPengurang->tahsin_alquran, 2)
                    + pow($dataKelompok->tahfidz_quran - $dataPengurang->tahfidz_quran, 2) + pow($dataKelompok->wirid_remaja - $dataPengurang->wirid_remaja, 2)
                    + pow($dataKelompok->didikan_subuh - $dataPengurang->didikan_subuh, 2) + pow($dataKelompok->pelaksanaan_fardhu_kifayah - $dataPengurang->pelaksanaan_fardhu_kifayah, 2));

                $totalHasil_d_1 +=  $hasil;
            }

            $a_i = $totalHasil_a_i / $jumlahDataPengujian_c5 - 1;
            $d_2 = $totalHasil_d_2 / $jumlahDataPengujian_c2;
            $d_3 = $totalHasil_d_3 / $jumlahDataPengujian_c3;
            $d_4 = $totalHasil_d_4 / $jumlahDataPengujian_c4;
            $d_1 = $totalHasil_d_1 / $jumlahDataPengujian_c1;
            $b_i = min($d_2, $d_3, $d_4, $d_1);
            $s_i = ($b_i - $a_i) / max($a_i, $b_i) == 0 ? 0 : ($b_i - $a_i) / max($a_i, $b_i);

            PengujianModel::create([
                'nama_masjid_penceramah' => $dataPengurang->nama_masjid_penceramah,
                'cluster' => $dataPengurang->kelompok_data,
                'a_i' => $a_i,
                'd_2' => $d_2,
                'd_3' => $d_3,
                'd_4' => $d_4,
                'd_1' => $d_1,
                'b_i' => $b_i,
                's_i' => round($s_i, 1)
            ]);
        }

        $totalDataPengujian = PengujianModel::all()->count();
        $rata_s_i = PengujianModel::sum('s_i');

        $average = $rata_s_i / $totalDataPengujian;

        AverageModel::create([
            'average_value' => $average > 1 ? round($average) : round($average, 1)
        ]);

        return redirect('/pengujian')->with([
            $request->session()->flash('hasil', $average > 1 ? round($average) : round($average, 1))
        ]);
    }
}
