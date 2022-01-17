<?php

namespace App\Exports;

use App\Models\KmeansModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HasilClusterExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $iterationCount = KmeansModel::max('iteration');
        $result = KmeansModel::where('iteration', $iterationCount)->orderBy('kelompok_data')->select(
            'nama_masjid_penceramah',
            'garis_bujur',
            'garis_lintang',
            'jalan_besar',
            'gang_sempit',
            'shalat_lima_waktu',
            'khotbah',
            'tabligh_akbar',
            'ceramah_rutin',
            'maghrib_mengaji',
            'tahsin_alquran',
            'tahfidz_quran',
            'wirid_remaja',
            'didikan_subuh',
            'pelaksanaan_fardhu_kifayah',
            'C1',
            'C2',
            'C3',
            'C4',
            'C5',
            'jarak_terdekat',
            'kelompok_data',
        )->get();
        return $result;
    }

    public function headings(): array
    {
        return [
            'nama_masjid_penceramah',
            'garis_bujur',
            'garis_lintang',
            'jalan_besar',
            'gang_sempit',
            'shalat_lima_waktu',
            'khotbah',
            'tabligh_akbar',
            'ceramah_rutin',
            'maghrib_mengaji',
            'tahsin_alquran',
            'tahfidz_quran',
            'wirid_remaja',
            'didikan_subuh',
            'pelaksanaan_fardhu_kifayah',
            'C1',
            'C2',
            'C3',
            'C4',
            'C5',
            'jarak_terdekat',
            'kelompok_data',
        ];
    }
}
