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
        <button id="addCar" class="ml-8 px-4 py-2 rounded-lg bg-blue-400 text-white hover:bg-opacity-20 hover:text-blue-400 duration-100 self-start my-4 shadow-lg">
          <i class="fas fa-plus"></i><span class="hidden ml-2 sm:inline"> Add Car</span>
        </button>
      </div>
      <h1 class="w-4/12 text-center text-2xl text-gray-800 font-bold tracking-wide uppercase my-4">Cars List</h1>
      <span class="w-4/12 flex justify-end items-center">
        <a href="/" class="mr-12 text-2xl text-gray-800 hover:text-red-400 duration-300 transform hover:rotate-90"><div class="h-8 w-8 text-center rounded-full"><i class="fas fa-times"></i></div></a>
      </span>
    </div>

    <div class="flex flex-col fixed z-20 lg:max-w-4xl items-center delay-500" id="popNotif">
      @error('brand')
      <div class="bg-red-400 m-2 p-4 rounded-lg text-white">{{ $message }}</div>
      @enderror
      @error('type')
      <div class="bg-red-400 m-2 p-4 rounded-lg text-white">{{ $message }}</div>
      @enderror
      @error('color')
      <div class="bg-red-400 m-2 p-4 rounded-lg text-white">{{ $message }}</div>
      @enderror
      @error('price')
      <div class="bg-red-400 m-2 p-4 rounded-lg text-white">{{ $message }}</div>
      @enderror
      @error('image')
      <div class="bg-red-400 m-2 p-4 rounded-lg text-white">{{ $message }}</div>
      @enderror  
      @if(session('status'))
      <div class="bg-green-400 m-2 p-4 rounded-lg text-white">{{ session('status') }}</div>
      @endif
    </div>    

    {{-- table --}}
    <div class="w-full overflow-x-scroll lg:overflow-x-visible lg:flex lg:justify-center ">
      <table class="table-fixed bg-white rounded-xl shadow-lg text-gray-800 sm:w-11/12 mb-4" style="width: 52rem;">
        <thead class="border-b-2">
          <tr>
            <th style="width: 6%">No.</th>
            <th style="width: 7%">Id</th>
            <th style="width: 15%">Brand</th>
            <th style="width: 15%">Type</th>
            <th style="width: 10%">Color</th>
            <th style="width: 15%">Price</th>
            <th style="width: 25%">Picture</th>
            <th style="width: 7%"></th>
          </tr>
        </thead>
        <tbody>
          {{-- loop --}}
          @php
              $i = 1;
          @endphp
          @foreach ($items as $item)
          <tr class="h-48b
          @if ($i % 2 == 0)
            bg-gray-100
          @endif
          ">
            <td class="text-center">{{ $i }}.</td>
            <td class="text-center">{{ $item->getID(); }}</td>
            <td class="text-center">{{ $item->brand }}</td>
            <td class="text-center">{{ $item->type }}</td>
            <td class="text-center flex flex-col items-center justify-center h-32">
              <div class="w-8 h-8 rounded-full shadow-lg border-2 border-gray-300" style="background-color: {{ $item->color }}"></div>
            </td>
            <td class="text-center">$
            @php
              if ($item->price < 1000000) {
              $price = number_format($item->price);
            } else if ($item->price < 1000000000) {
              $price = number_format($item->price / 1000000, 3) . 'M';
            } else {
              $price = number_format($item->price / 1000000000, 3) . 'B';
            }
            @endphp
            {{ $price }}
            </td>
            <td><img src="img/car/{{ $item->image }}" class="px-4" alt=""></td>
            <td class="text-center">
              <ul>
                <li class="my-1">
                  <button id="showEdit{{ $item->id }}" type="button" class="w-10 h-10 duration-100 text-white bg-green-400 rounded-lg hover:text-green-400 hover:bg-opacity-20">
                    <i class="fas fa-edit"></i>
                  </button>
                </li>
                <li class="my-1"><button id="showDelete{{ $item->id }}" type="button" class="w-10 h-10 duration-100 text-white bg-red-400 rounded-lg hover:text-red-400 hover:bg-opacity-20"><i class="fas fa-trash-alt"></i></button></li>
              </ul>
            </td>
          </tr>
          @php
              $i++;
          @endphp
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="w-11/12 mt-4 lg:m-0">
      {{ $items->links() }}
    </div>
    
    {{-- edit --}}
    @foreach ($items as $item)
    @include('cars.update')
    @endforeach
    {{-- edit --}}
    @foreach ($items as $item)
    @include('cars.delete')
    @endforeach
  </main>
  <script>
    document.getElementById("addCar").onclick = function() {addShow()};
    document.getElementById("cancelCar").onclick = function() {addShow()};
    
    function addShow() {
      document.getElementById("showAdd").classList.toggle("hidden");
    }
  </script>
@endsection