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
        'id','user_id','tanggal', 'status', 'jumnlah_harga'
    ];
    public function user()
    {

        return $this->belongsTo('App\User','user_id','id');
    }
    public function pemesanan_detail()
    {
        return $this->hasMany('App\pemesanan_detail', 'pemesanan_id','id');
    }
}
