<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public function pemesanan_detail()
    {
        return $this->hasMany('App\pemesanan_detail', 'user_id','id');
    }
}
