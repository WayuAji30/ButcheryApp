<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        
    ];

}
