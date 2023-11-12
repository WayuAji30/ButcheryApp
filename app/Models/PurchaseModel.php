<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class PurchaseModel extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tbl_beli';
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_user','id_produk','id_supplier', 'foto','nama_produk', 'varian', 'harga', 'qty', 'alamat_pengiriman', 'metode_pembayaran', 'opsi_pengiriman', 'total_produk' ,'biaya_ongkir', 'biaya_layanan', 'biaya_asuransi', 'biaya_tambahan', 'subtotal', 'total_harga', 'status'   
    ];

}
