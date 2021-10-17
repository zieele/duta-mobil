<div class="bg-blue-300"> 
  <div class="flex">
    <span>customer</span>
  </div>
  <div class="flex">
    <div>
      <div>
        <button type="button">
          choose customer
        </button>
      </div>
      <div>{{-- data pelanggan --}}

      </div>
    </div>
  </div>
</div>

<div class="bg-green-300">
  <div>
    <div>
      <h5>test</h5>
      <button type="button">
        <span>&times;</span>
      </button>
    </div>
    <div>
      <h1>customers</h1>
      <table class="table-fixed bg-white rounded-xl shadow-lg text-gray-800 mb-4" style="width: 52rem;">
        <thead class="border-b-2">
          <tr>
            <th style="width: 10%">No.</th>
            <th style="width: 40%">KTP</th>
            <th style="width: 40%">Name</th>
            <th style="width: 10%"></th>
          </tr>
        </thead>
        <tbody>
          {{-- loop --}}
          @php
              $i = 1;
          @endphp
          @foreach ($customer as $item)
          <tr class="h-48b
          @if ($i % 2 == 0)
            bg-gray-100
          @endif
          ">
            <td class="text-center">{{ $i }}.</td>
            <td class="text-center">{{ $item->ktp; }}</td>
            <td class="text-center">{{ $item->name }}</td>
            <td class="text-center">
              <ul>
                <li class="my-1">
                  <button id="showTransaction{{ $item->ktp }}" type="button" class="w-10 h-10 duration-100 text-white bg-blue-400 rounded-lg hover:text-blue-400 hover:bg-opacity-20">
                    <i class="fas fa-check"></i>
                  </button>
                </li>
              </ul>
            </td>
          </tr>
          @php
              $i++;
          @endphp
          @endforeach
        </tbody>
      </table>
      {{ $customer->links() }}
    </div>
    <div>
      <button type="button">close</button>
      <button type="button">save</button>
    </div>
  </div>
</div>

<div class="bg-yellow-300">
  <div>
    data pembeli
    <button type="button">
      pilih
    </button>
  </div>
  <div>
    <table>
      <tr>
        <td>ktp</td>
        <td><input type="text"></td>
        <td>nama</td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>alamat</td>
        <td><input type="text"></td>
        <td>telfon</td>
        <td><input type="text"></td>
      </tr>
    </table>
  </div>
</div>