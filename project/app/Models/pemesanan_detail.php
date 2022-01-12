<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan_detail extends Model
{
    protected $table = 'pemesanan_detail';
    protected $guarded = ['id'];
    protected $filable = [
        'id','barang_id', 'pemesanan_id', 'jumnlah','jumnlah_harga','pemesanan_id','created_at','updated_at'
    ];
    public function produk()
    {
        return $this->belongsTo('App\produk','barang_id','id');
    }
    public function pemesanan()
    {

        return $this->belongsTo('App\pemesanan', 'pemesanan_id','id');
    }
}
