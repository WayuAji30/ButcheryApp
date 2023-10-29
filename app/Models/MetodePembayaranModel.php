<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MetodePembayaranModel extends Model
{
    use HasFactory;

    protected $connected = 'mongodb';
    protected $table = 'metode_pembayaran';

}
