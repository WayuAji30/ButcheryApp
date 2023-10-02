<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class KategoriModel extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tbl_kategori_produk';

    protected $fillable = [
        'nama_kategori', 'slug'
    ];

}
