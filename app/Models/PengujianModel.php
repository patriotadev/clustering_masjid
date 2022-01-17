<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengujianModel extends Model
{
    use HasFactory;

    protected $table = 'pengujian';
    protected $primaryKey = 'id';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'kode_masjid_penceramah',
        'nama_masjid_penceramah',
        'cluster',
        'a_i',
        'd_1',
        'd_2',
        'd_3',
        'd_4',
        'd_5',
        'b_i',
        's_i'
    ];
}
