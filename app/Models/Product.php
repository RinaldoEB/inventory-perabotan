<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'supplier_id',
        'kode_barang',
        'nama',
        'harga_beli',
        'harga_jual',
        'stok',
        'stok_minimum',
        'gambar',
        'deskripsi',
    ];
}

?>
