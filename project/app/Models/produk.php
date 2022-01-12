<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{

    protected $table = 'produk';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $filable = [
        'id','nama_produk', 'harga', 'stock', 'deskripsi','kategori','img'
    ];

    public function pemesanan_detail()
    {
        return $this->hasMany('App\pemesanan_detail', 'barang_id','id');
    }
}
