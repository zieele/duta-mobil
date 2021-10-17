<div class="hidden fixed bg-gray-800 bg-opacity-30 w-screen h-screen flex justify-center items-center z-50 transform -translate-y-16" id="showAdd">
  <form class="bg-gray-100 rounded-xl overflow-hidden p-8"  action="{{ route('cars.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="text-2xl font-bold tracking-wide text-gray-800 uppercase text-center mb-4">Add New Car</h1>
    <table>
      <tr>
        <td><label for="brand">Brand</label></td>
        <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="brand" id="brand"></td>
      </tr>
      <tr>
        <td><label for="type">Type</label></td>
        <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="type" id="type"></td>
      </tr>
      <tr>
        <td><label for="price">Price</label></td>
        <td>
          <div id="pricefb" class="w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2">
            <span>$</span>
            <input class="outline-none" type="text" name="price" id="price">
          </div>
        </td>
      </tr>
      {{-- <tr>
        <td><label for="image">Image</label></td>
        <td>
          <button class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" onclick="document.getElementById('getFile').click()" type="button">Select File</button>
          <input type="file" name="image" id="getFile" class="hidden"> 
        </td>
      </tr> --}}
      {{-- <tr>
        <td><label for="image">image</label></td>
        <td>
          <button class="outline-none hover:shadow-md duration-300 transform hover:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" onclick="document.getElementById('image').click()" type="button">Select File</button>
          <input type='file' id="image" name="image" class="hidden" onchange="loadFile(event)"> 
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td class="p-2">          
          <div class="h-48 rounded-lg bg-white flex items-center">
            <img id="output" class="w-64 p-4" alt="">
          </div>
          <script>
            var loadFile = function(event) {
              var image = document.getElementById('output');
              image.src = URL.createObjectURL(event.target.files[0]);
            };
          </script>
        </td>
      </tr> --}}
      <tr>
        <td><label for="image">image</label></td>
        <td>
          <button class="outline-none hover:bg-gray-200 duration-300 w-64 mt-2 ml-2 bg-white rounded-t-lg px-3 py-2" onclick="document.getElementById('image').click()" type="button">Select File</button>
          <div class="ml-2 h-36 rounded-b-lg bg-white flex items-center overflow-y-hidden">
            <img id="output" class="w-64 p-4" alt="">
          </div>
          <input type='file' id="image" name="image" class="hidden" onchange="loadFile(event)"> 
          <script>
            var loadFile = function(event) {
              var image = document.getElementById('output');
              image.src = URL.createObjectURL(event.target.files[0]);
            };
          </script>
        </td>
      </tr>
      <tr>
        <td><label for="color">Color</label></td>
        <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2 h-16" type="color" name="color" id="color" value="#aaaaff"></td>
      </tr>
    </table>
    <div class="mt-4 float-right">
      <button type="button" id="cancelCar" class="px-2 py-1 rounded-lg bg-red-400 text-white hover:text-red-400 hover:bg-opacity-20 duration-100">Cancel</button>
      <button type="submit" class="px-2 ml-2 py-1 rounded-lg bg-green-400 text-white hover:text-green-400 hover:bg-opacity-20 duration-100">Submit</button>
    </div>
  </form>
</div>