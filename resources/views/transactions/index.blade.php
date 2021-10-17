@extends('layouts.app')

@section('style')
    
@endsection

@section('content')
  <main class="bg-gray-100 bg-opacity-50 w-full my-16 sm:max-w-xl lg:max-w-4xl flex items-center flex-col rounded-t-xl">
    {{-- add Pop Up --}}
    @include('cars.create')

    {{-- heading --}}
    <div class="flex w-full justify-between">
      <div class="w-4/12">
        {{-- <button id="addCar" class="ml-8 px-4 py-2 rounded-lg bg-blue-400 text-white hover:bg-opacity-20 hover:text-blue-400 duration-100 self-start my-4 shadow-lg">
          <i class="fas fa-plus"></i><span class="hidden ml-2 sm:inline"> Add Car</span>
        
        </button> --}}
      </div>
      <h1 class="w-4/12 text-center text-2xl text-gray-800 font-bold tracking-wide uppercase my-4">Transaction</h1>
      <span class="w-4/12 flex justify-end items-center">
        <a href="/" class="mr-12 text-2xl text-gray-800 hover:text-red-400 duration-300 transform hover:rotate-90"><div class="h-8 w-8 text-center rounded-full"><i class="fas fa-times"></i></div></a>
      </span>
    </div>

    {{-- content --}}
    {{-- <div class="card bg-red-300">
      <div class="card-haeder flex">
        <h3>pembelian cash</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" title="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div>
          @if ($errors->any())
          <div>
            <button type="button">
              <span>&times;</span>
            </button>
          </div>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
              
          @endif
        </div>
        <div>
          @include('transactions.customer')
          @include('transactions.car')
          @include('transactions.transaction')
        </div>
      </div>
      <div class="card-footer">

      </div>
    </div> --}}
    <div class="flex flex-col w-full justify-between">
      <span>Payment Method</span>
      <div class="flex">
        <button type="button" class="w-32 h-10 mx-1 duration-100 text-white bg-blue-400 rounded-lg hover:text-blue-400 hover:bg-opacity-20">
          Cash
        </button>
        <button type="button" class="w-32 h-10 mx-1 duration-100 text-white bg-blue-400 rounded-lg hover:text-blue-400 hover:bg-opacity-20">
          Credit
        </button>
        <button type="button" class="w-32 h-10 mx-1 duration-100 text-white bg-blue-400 rounded-lg hover:text-blue-400 hover:bg-opacity-20">
          Installments
        </button>
      </div>
    </div>

    {{-- Cash --}}
    <div class="fixed bg-gray-800 bg-opacity-30 w-screen h-screen flex justify-center items-center transform -translate-y-16" id="">
      <div class="bg-gray-100 rounded-xl overflow-hidden p-8">
        <form class="bg-gray-100 rounded-xl overflow-hidden p-8"  action="{{ route('transaction.index') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <h1 class="text-xl font-semibold text-gray-800 text-center mb-4">
            Cash Payment
          </h1>
          <table>
            <tr>
              <td><label for="name">Customer</label></td>
              <td>
                <select id="cars" name="customer" form="carform"
                class="outline-none focus:shadow-md duration-300 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2">
                  @foreach ($customer as $item)
                    <option value="{{ $item->ktp}}">{{ $item->ktp}}-{{ $item->name }}</option>
                  @endforeach
                </select>
              </td>
            </tr>
            <tr>
              <td><label for="phone">Car</label></td>
              <td>
                <select id="cars" name="customer" form="carform"
                class="outline-none focus:shadow-md duration-300 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2">
                  @foreach ($car as $item)
                    <option value="{{ $item->id}}">{{ $item->getID()}}-{{ $item->brand }}-{{ $item->type }}</option>
                  @endforeach
                </select>
              </td>
            </tr>
          </table>
          <div class="mt-4 float-right">
            <button type="submit" class="px-2 ml-2 py-1 rounded-lg bg-green-400 text-white hover:text-green-400 hover:bg-opacity-20 duration-100">Submit</button>
          </div>
        </form>
      </div>
    </div>

    
  </main>
@endsection