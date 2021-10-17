
    {{-- delete --}}
    <div class="hidden fixed bg-gray-800 bg-opacity-30 w-screen h-screen flex justify-center items-center transform -translate-y-16" id="carDelete{{ $item->ktp }}">
      <div class="bg-gray-100 rounded-xl overflow-hidden p-8 w-80">
        <h1 class="text-xl font-semibold tracking-wide text-gray-800 text-center">Are you sure want to delete {{ $item->ktp }}-{{ $item->brand }} {{ $item->type }}?</h1>
        {{-- button --}}
        <div class="mt-8">
          <form action="{{ route('customers.destroy',$item->ktp) }}" method="POST" class="w-full flex justify-center">
            <button type="button" id="cancelDelete{{ $item->ktp }}" class="px-2 py-1 rounded-lg bg-blue-400 text-white hover:text-blue-400 hover:bg-opacity-20 duration-100">Cancel</button>
            @csrf
            @method('DELETE')
            <button type="submit" class="px-2 ml-2 py-1 rounded-lg bg-red-400 text-white hover:text-red-400 hover:bg-opacity-20 duration-100">Delete</button>
          </form>
        </div>
      </div>
    </div>
    
    <script>
      document.getElementById("showDelete{{ $item->ktp }}").onclick = function() {deleteShow{{ $item->ktp }}()};
      document.getElementById("cancelDelete{{ $item->ktp }}").onclick = function() {deleteShow{{ $item->ktp }}()};
      
      function deleteShow{{ $item->ktp }}() {
        document.getElementById("carDelete{{ $item->ktp }}").classList.toggle("hidden");
      }
    </script>