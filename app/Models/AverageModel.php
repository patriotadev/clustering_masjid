<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AverageModel extends Model
{
    use HasFactory;

    protected $table = 'average';
    protected $primaryKey = 'id';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'average_value'
    ];
}
