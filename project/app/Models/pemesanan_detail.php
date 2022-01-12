<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan_detail extends Model
{
    protected $table = 'pemesanan_detail';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $filable = [
        'id','barang_id', 'pemesanan_id', 'jumnlah','jumnlah_harga','pemesanan_id',
    ];
    public function produk()
    {
        return $this->hasMany('App\produk', 'user_id','id');
    }
}
