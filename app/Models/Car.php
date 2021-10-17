<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'type','color', 'price', 'picture'
    ];
    
    public function getID()
    {
       return sprintf('%03d', $this->id);
    }
}
