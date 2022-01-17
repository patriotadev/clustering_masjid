<?php

namespace App\Imports;

use App\Models\KmeansModel;
use App\Models\PenceramahModel;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class PenceramahImport implements ToModel, WithStartRow, WithUpserts, ToCollection
{
    /**
     * @param Collection $collection
     */

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            KmeansModel::create([
                'kode_masjid_penceramah' => 'P-' . base64_encode($row[0]),
                'nama_masjid_penceramah' => $row[0],
                'garis_lintang' => $row[16],
                'garis_bujur' => $row[17],
                // 'geo_address' => $row[18],
                'jalan_besar' => (int)$row[18],
                'gang_sempit' => (int)$row[19],
                'shalat_lima_waktu' => (int)$row[20],
                'khotbah' => (int)$row[21],
                'tabligh_akbar' => (int)$row[22],
                'ceramah_rutin' => (int)$row[23],
                'maghrib_mengaji' => (int)$row[24],
                'tahsin_alquran' => (int)$row[25],
                'tahfidz_quran' => (int)$row[26],
                'wirid_remaja' => (int)$row[27],
                'didikan_subuh' => (int)$row[28],
                'pelaksanaan_fardhu_kifayah' => (int)$row[29],
                'category' => 1,
                'iteration' => 1
            ]);
        }
    }


    public function model(array $row)
    {

        // $year = Carbon::createFromFormat('Y-m-d', $row[3])->year;
        // $month = Carbon::createFromFormat('Y-m-d', $row[3])->month;
        // $day = Carbon::createFromFormat('Y-m-d', $row[3])->day;

        return new PenceramahModel([
            'kode_penceramah' => 'P-' . base64_encode($row[0]),
            'nama_penceramah' => $row[0],
            'no_hp' => $row[1],
            'tempat_lahir' => $row[2],
            // 'tanggal_lahir' => Carbon::createFromFormat('Y-m-d', $year . '-' . $month . '-' . '-' . $day),
            // 'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3])->format('Y-m-d'),
            'pendidikan_terakhir' => $row[4],
            'madzhab_fiqih' => $row[5],
            'organisasi' => $row[6],
            'hafalan_alquran' => $row[7],
            'kompetensi_ibadah' => $row[8],
            'kompetensi_aqidah' => $row[9],
            'kompetensi_bahasa' => $row[10],
            'kompetensi_keterampilan' => $row[11],
            'kompetensi_ekonomi' => $row[12],
            'prestasi' => $row[13],
            'jurusan_ijazah_terakhir' => $row[14],
            'alamat_domisili_asal' => $row[15],
            'garis_lintang' => $row[16],
            'garis_bujur' => $row[17],
            // 'geo_address' => $row[18],
            'category' => 1,
            'jalan_besar' => (int)$row[18],
            'gang_sempit' => (int)$row[19],
            'shalat_lima_waktu' => (int)$row[20],
            'khotbah' => (int)$row[21],
            'tabligh_akbar' => (int)$row[22],
            'ceramah_rutin' => (int)$row[23],
            'maghrib_mengaji' => (int)$row[24],
            'tahsin_alquran' => (int)$row[25],
            'tahfidz_quran' => (int)$row[26],
            'wirid_remaja' => (int)$row[27],
            'didikan_subuh' => (int)$row[28],
            'pelaksanaan_fardhu_kifayah' => (int)$row[29],
        ]);
    }

    public function uniqueBy()
    {
        return 'nama_penceramah';
    }

    public function startRow(): int
    {
        return 2;
    }
}
