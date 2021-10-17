<div class="hidden fixed bg-gray-800 bg-opacity-30 w-screen h-screen flex justify-center items-center z-50 transform -translate-y-16" id="showAdd">
  <form class="bg-gray-100 rounded-xl overflow-hidden p-8"  action="{{ route('customers.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="text-2xl font-bold tracking-wide text-gray-800 uppercase text-center mb-4">Register</h1>
    <table>
      <tr>
        <td><label for="ktp">KTP</label></td>
        <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="ktp" id="ktp" onkeypress="return num(event)" maxlength="16"></td>
      </tr>
      <tr>
        <td><label for="name">Name</label></td>
        <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="name" id="name" onkeypress="return str(event)"></td>
      </tr>
      <tr>
        <td><label for="address">address</label></td>
        <td><textarea class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2 h-32" type="text" name="address" id="address"></textarea></td>
      </tr>
      <tr>
        <td><label for="phone">Phone</label></td>
        <td><input class="outline-none focus:shadow-md duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="phone" id="phone" onkeypress="return num(event)" maxlength="15"></td>
      </tr>
    </table>
    <div class="mt-4 float-right">
      <button type="button" id="cancelCar" class="px-2 py-1 rounded-lg bg-red-400 text-white hover:text-red-400 hover:bg-opacity-20 duration-100">Cancel</button>
      <button type="submit" class="px-2 ml-2 py-1 rounded-lg bg-green-400 text-white hover:text-green-400 hover:bg-opacity-20 duration-100">Submit</button>
    </div>
  </form>
</div>

<script>
  function num(evt) {
        var n = (evt.which) ? evt.which : evt.keyCode
        if (n > 31 && (n < 48 || n > 57))
            return false;
        return true;
    }
  function str(evt) {
        var n = (evt.which) ? evt.which : evt.keyCode
        if (n > 31 && (n < 48 || n > 57))
            return true;
        return false;
    }
</script>