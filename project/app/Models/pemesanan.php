<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    public function pemesanan()
    {
        return $this->hasMany('App\User', 'user_id','id');
    }
}
