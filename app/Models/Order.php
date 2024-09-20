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

    public function seat(){
        return $this->belongsTo(Seat::class);
    }
}
