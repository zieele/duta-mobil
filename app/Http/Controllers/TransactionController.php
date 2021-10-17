<?php

namespace App\Http\Controllers;
   
use App\Models\Car;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TransactionController extends Controller
{
    public function index()
    {
        $data['customer'] = Customer::all();
        $data['car'] = Car::all();
        $data['title'] = 'Transaction';
        return view('transactions.index', $data);
    }
}
