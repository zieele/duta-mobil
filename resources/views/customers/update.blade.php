
    
    <div class="hidden fixed z-50 bg-gray-800 bg-opacity-30 w-screen h-screen flex justify-center items-center transform -translate-y-16" id="carEdit{{ $item->ktp }}">
      <form action="{{ route('customers.update',$item->ktp) }}" method="POST" enctype="multipart/form-data" class="bg-gray-100 rounded-xl overflow-hidden p-8 w-min" id="">
        @csrf
        @method('PUT')
        <h1 class="text-xl font-semibold text-gray-800 text-center mb-4">Edit customer {{ $item->ktp }}-{{ $item->name }}</h1>
        <table>
          <tr>
            <td><label for="name">name</label></td>
            <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="name" id="name" value="{{ $item->name }}"></td>
          </tr>
          <tr>
            <td><label for="address">address</label></td>
            <td><textarea class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2 h-32" type="text" name="address" id="address">{{ $item->address }}</textarea></td>
          </tr>
          <tr>
            <td><label for="phone">phone</label></td>
            <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="phone" id="phone" value="{{ $item->phone }}"></td>
          </tr>
        </table>
        <div class="mt-4 float-right">
          <button type="button" id="cancelEdit{{ $item->ktp }}" class="px-2 py-1 rounded-lg bg-blue-400 text-white hover:text-blue-400 hover:bg-opacity-20 duration-100">Cancel</button>
          <button type="submit" class="px-2 ml-2 py-1 rounded-lg bg-green-400 text-white hover:text-green-400 hover:bg-opacity-20 duration-100">Submit</button>
        </div>
      </form>
    </div>
    <script>
      document.getElementById("showEdit{{ $item->ktp }}").onclick = function() {editShow{{ $item->ktp }}()};
      document.getElementById("cancelEdit{{ $item->ktp }}").onclick = function() {editShow{{ $item->ktp }}()};
      
      function editShow{{ $item->ktp }}() {
        document.getElementById("carEdit{{ $item->ktp }}").classList.toggle("hidden");
      }
    </script>