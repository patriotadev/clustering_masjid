<?php

namespace App\Imports;

use App\Models\KmeansModel;
use App\Models\MasjidModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class MasjidImport implements ToModel, WithStartRow, WithUpserts, ToCollection
{
    /**
     * @param Collection $collection
     */

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            KmeansModel::create([
                'kode_masjid_penceramah' => 'M-' . base64_encode($row[0]),
                'nama_masjid_penceramah' => $row[0],
                'garis_lintang' => $row[14],
                'garis_bujur' => $row[15],
                // 'geo_address' => $row[15],
                // 'category' => (int)$row[16],
                'jalan_besar' => (int)$row[16],
                'gang_sempit' => (int)$row[17],
                'shalat_lima_waktu' => (int)$row[18],
                'khotbah' => (int)$row[19],
                'tabligh_akbar' => (int)$row[20],
                'ceramah_rutin' => (int)$row[21],
                'maghrib_mengaji' => (int)$row[22],
                'tahsin_alquran' => (int)$row[23],
                'tahfidz_quran' => (int)$row[24],
                'wirid_remaja' => (int)$row[25],
                'didikan_subuh' => (int)$row[26],
                'pelaksanaan_fardhu_kifayah' => (int)$row[27],
                'category' => 2,
                'iteration' => 1
            ]);
        }
    }

    public function model(array $row)
    {
        return new MasjidModel([
            'kode_masjid' => 'M-' . base64_encode($row[0]),
            'nama_masjid' => $row[0],
            'nama_ketua' => $row[1],
            'nama_bendahara' => $row[2],
            'tipe_masjid' => $row[3],
            'lokasi_masjid' => $row[4],
            'sarana_masjid' => $row[5],
            'daya_tampung' => $row[6],
            'aktivitas_masjid' => $row[7],
            'alamat_lengkap' => $row[8],
            'nama_sekretaris' => $row[9],
            'aktivitas_kajian_khusus' => $row[10],
            'aktivitas_ekonomi' => $row[11],
            'lembaga_sosial' => $row[12],
            'infaq_perbulan' => $row[13],
            'garis_lintang' => $row[14],
            'garis_bujur' => $row[15],
            // 'geo_address' => $row[15],
            // 'category' => (int)$row[16],
            'jalan_besar' => (int)$row[16],
            'gang_sempit' => (int)$row[17],
            'shalat_lima_waktu' => (int)$row[18],
            'khotbah' => (int)$row[19],
            'tabligh_akbar' => (int)$row[20],
            'ceramah_rutin' => (int)$row[21],
            'maghrib_mengaji' => (int)$row[22],
            'tahsin_alquran' => (int)$row[23],
            'tahfidz_quran' => (int)$row[24],
            'wirid_remaja' => (int)$row[25],
            'didikan_subuh' => (int)$row[26],
            'pelaksanaan_fardhu_kifayah' => (int)$row[27],
            'category' => 2,

        ]);
    }

    public function uniqueBy()
    {
        return 'nama_masjid';
    }

    public function startRow(): int
    {
        return 2;
    }
}
