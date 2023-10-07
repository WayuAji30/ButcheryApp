<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class SuppliersModel extends Authenticatable
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tbl_suppliers';

    protected $fillable = [
        'user_id','nama_toko','email', 'no_hp', 'no_wa','no_rekening','provinsi', 'kota', 'kecamatan', 'alamat'
    ];

}
