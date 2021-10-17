<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;
    
    protected $primaruKey = 'code';
    public $incrementing = false;
    protected $table = 'transactions';
    protected $fillable = ['code', 'customer_ktp', 'car_code', 'transaction_date', 'transaction_pay'];
}
