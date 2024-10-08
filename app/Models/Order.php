<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected  $guarded = [];

    public function film(){
        return $this->belongsTo(Film::class);
    }

    public function seats(){
        return $this->hasMany(Seat::class);
    }

    public function dates(){
        return $this->hasMany(Date::class);
    }
}
