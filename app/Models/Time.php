<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $fillable = [
        'scheduleID',
        'time'
    ];
    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'scheduleID');
    }
}
