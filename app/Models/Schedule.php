<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'movieID, theaterID, times'
    ];
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function theater(){
        return $this->hasMany(Theater::class);
    }
    public function time(){
        return $this->hasMany(Time::class);
    }
}
