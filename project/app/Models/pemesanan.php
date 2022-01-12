<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table = 'pemesanan';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $filable = [
        'id','user_id','tanggal', 'status', 'jumlah_harga','created_at','updated_at'
    ];
    public function pemesanan()
    {

        return $this->hasMany('App\User', 'user_id','id');
    }
}
