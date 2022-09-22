<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'productID', 
        'theaterID',
        'price',
        'date',
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'productID');
    }

    public function theater(){
        return $this->belongsTo(Theater::class, 'theaterID');
    }

    public function time(){
        return $this->hasMany(Time::class,'scheduleID');
    }
}
