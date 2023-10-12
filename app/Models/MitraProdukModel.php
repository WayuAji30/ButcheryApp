<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MitraProdukModel extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tbl_produk';
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nama_toko',
        'alamat_toko',
        'foto', 
        'nama_produk',
        'id_kategori',
        'deskripsi', 
        'varian',
        'rating',
        'reviews'
    ];
    
}
