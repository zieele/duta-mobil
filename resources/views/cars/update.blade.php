
    
    <div class="hidden fixed z-50 bg-gray-800 bg-opacity-30 w-screen h-screen flex justify-center items-center transform -translate-y-16" id="carEdit{{ $item->id }}">
      <form action="{{ route('cars.update',$item->id) }}" method="POST" enctype="multipart/form-data" class="bg-gray-100 rounded-xl overflow-hidden p-8 w-min" id="">
        @csrf
        @method('PUT')
        <h1 class="text-xl font-bold tracking-wide text-gray-800 uppercase text-center mb-4">Edit car {{ $item->getID() }}-{{ $item->brand }} {{ $item->type }}</h1>
        <table>
          <tr>
            <td><label for="brand">Brand</label></td>
            <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="brand" id="brand" value="{{ $item->brand }}"></td>
          </tr>
          <tr>
            <td><label for="type">type</label></td>
            <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="type" id="type" value="{{ $item->type }}"></td>
          </tr>
          <tr>
            <td><label for="price">price</label></td>
            <td>
              <div id="pricefb" class="w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2">
                <span>$</span>
                <input class="outline-none" type="text" name="price" id="price"  value="{{ $item->price }}">
              </div>
            </td>
          </tr>
          {{-- <tr>
            <td><label for="Image">Image</label></td>
            <td>
              <button class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" onclick="document.getElementById('getFile').click()" type="button">Select File</button>
              <input type='file' id="getFile" name="image" class="hidden" id="image" value="{{ $item->image }}"> 
            </td>
          </tr> --}}
          
          <tr>
            <td><label for="image">image</label></td>
            <td>
              <button class="outline-none hover:bg-gray-200 duration-300 w-64 mt-2 ml-2 bg-white rounded-t-lg px-3 py-2" onclick="document.getElementById('image{{ $item->id }}').click()" type="button">Select File</button>
              <input type='file' id="image{{ $item->id }}" name="image" class="hidden" onchange="loadFile{{ $item->id }}(event)">
              <div class="ml-2 h-36 rounded-b-lg bg-white flex items-center overflow-y-hidden">
                <img id="output{{ $item->id }}" class="w-64 p-4 hidden" alt="">
                <img src="img/car/{{ $item->image }}" class="w-64 p-4" id="img{{ $item->id }}" alt="">
              </div>
              <script>
                var loadFile{{ $item->id }} = function(event) {
                  var image = document.getElementById('output{{ $item->id }}');
                  image.src = URL.createObjectURL(event.target.files[0]);
                  document.getElementById("img{{ $item->id }}").classList.toggle("hidden");
                  document.getElementById("output{{ $item->id }}").classList.toggle("hidden");
                };
              </script>
            </td>
          </tr>
          <tr>
            <td><label for="color">Color</label></td>
            <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2 h-16" type="color" name="color" id="color" value="{{ $item->color }}"></td>
          </tr>
        </table>
        <div class="mt-4 float-right">
          <button type="button" id="cancelEdit{{ $item->id }}" class="px-2 py-1 rounded-lg bg-blue-400 text-white hover:text-blue-400 hover:bg-opacity-20 duration-100">Cancel</button>
          <button type="submit" class="px-2 ml-2 py-1 rounded-lg bg-green-400 text-white hover:text-green-400 hover:bg-opacity-20 duration-100">Submit</button>
        </div>
      </form>
    </div>
    <script>
      document.getElementById("showEdit{{ $item->id }}").onclick = function() {editShow{{ $item->id }}()};
      document.getElementById("cancelEdit{{ $item->id }}").onclick = function() {editShow{{ $item->id }}()};
      
      function editShow{{ $item->id }}() {
        document.getElementById("carEdit{{ $item->id }}").classList.toggle("hidden");
      }
    </script>