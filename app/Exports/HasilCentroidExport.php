<?php

namespace App\Exports;

use App\Models\KmeansModel;
use GrahamCampbell\ResultType\Result;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HasilCentroidExport implements FromArray, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function array(): array
    {
        $iterationCount = KmeansModel::max('iteration');

        for ($i = 1; $i < $iterationCount - 1; $i++) {
            $result = [
                'iterasi' => $i,
                'aa' => 'aa'

            ];
        }
        return $result;
    }

    public function headings(): array
    {
        return [
            [
                'iterasi',
                'Centroid',
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
                'Nama Masjid Penceramah',
            ],
        ];
    }
}
