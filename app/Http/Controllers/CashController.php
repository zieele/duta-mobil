<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Car;
use Illuminate\Http\Request;

class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $request->validate([
            'customer_ktp' => 'required',
            'car_code' => 'required',
        ]);
        $car = Car::table('cars')->where('id', $request->car_code);
        $item = new Cash;
        $item->customer_ktp = $request->customer_ktp;
        $item->car_code = $request->car_code;
        $item->transaction_date = Cash::now();
        $item->transaction_pay = $car->price;
        $item->save();
     
        return redirect()->route('transactions.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function show(Cash $cash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function edit(Cash $cash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cash $cash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cash $cash)
    {
        //
    }
}
