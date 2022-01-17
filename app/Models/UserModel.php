<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;


    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'username',
        'email',
        'password',
        // 'created_at'
    ];
}
