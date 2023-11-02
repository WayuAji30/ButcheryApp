<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class RReviewsModel extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $collection = "tbl_rreviews";
    protected $fillable = [
        'id_user','id_produk','reviews','ratings'
    ];
}
