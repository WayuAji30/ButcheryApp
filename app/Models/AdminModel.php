<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tbl_admin';

    protected $fillable = [
        'username','email','password'
    ];
}
