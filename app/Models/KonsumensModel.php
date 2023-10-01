<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class KonsumensModel extends Authenticatable
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tbl_konsumens';

    protected $fillable = [
        'username', 'email', 'no_hp', 'provinsi', 'kota', 'kecamatan', 'alamat', 'password','role'
    ];

}
