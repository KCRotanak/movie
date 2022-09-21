<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name','lang','duration','genre','url','date', 'image'
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}