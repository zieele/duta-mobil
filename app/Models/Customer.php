<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'ktp';
    public $incrementing = false;
    protected $table = 'customers';
    protected $fillable = ['ktp', 'name', 'address', 'phone'];
}
