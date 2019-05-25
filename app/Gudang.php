<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'barang';
    public $timestamps = false;
    protected $fillable = ['nama', 'harga', 'item', 'jenis'];
}
