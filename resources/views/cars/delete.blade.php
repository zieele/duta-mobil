
    {{-- delete --}}
    <div class="hidden fixed bg-gray-800 bg-opacity-30 w-screen h-screen flex justify-center items-center transform -translate-y-16" id="carDelete{{ $item->id }}">
      <div class="bg-gray-100 rounded-xl overflow-hidden p-8 w-80">
        <h1 class="text-xl font-semibold tracking-wide text-gray-800 text-center">Are you sure want to delete {{ $item->getID() }}-{{ $item->brand }} {{ $item->type }}?</h1>
        {{-- button --}}
        <div class="mt-8">
          <form action="{{ route('cars.destroy',$item->id) }}" method="POST" class="w-full flex justify-center">
            <button type="button" id="cancelDelete{{ $item->id }}" class="px-2 py-1 rounded-lg bg-blue-400 text-white hover:text-blue-400 hover:bg-opacity-20 duration-100">Cancel</button>
            @csrf
            @method('DELETE')
            <button type="submit" class="px-2 ml-2 py-1 rounded-lg bg-red-400 text-white hover:text-red-400 hover:bg-opacity-20 duration-100">Delete</button>
          </form>
        </div>
      </div>
    </div>
    
    <script>
      document.getElementById("showDelete{{ $item->id }}").onclick = function() {deleteShow{{ $item->id }}()};
      document.getElementById("cancelDelete{{ $item->id }}").onclick = function() {deleteShow{{ $item->id }}()};
      
      function deleteShow{{ $item->id }}() {
        document.getElementById("carDelete{{ $item->id }}").classList.toggle("hidden");
      }
    </script>