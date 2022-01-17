<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KmeansModel extends Model
{
    use HasFactory;
    protected $table = 'cluster';
    protected $primaryKey = 'id';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'kode_masjid_penceramah',
        'nama_masjid_penceramah',
        'garis_lintang',
        'garis_bujur',
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
        'category',
        'centroid',
        'iteration',
        'jarak_terdekat',
        'kelompok_data',
    ];
}
