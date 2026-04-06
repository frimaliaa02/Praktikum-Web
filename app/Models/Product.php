<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tblproducts';
    protected $primeryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
        'harga',
    ];

}
