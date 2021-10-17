  <nav class="z-30 fixed w-96 h-16 bg-gray-800 rounded-b-lg overflow-hidden cursor-pointer duration-300 shadow-lg" id="nav">
    <div class="w-full h-16 flex justify-center items-center">
      <img src="img/logo.png" class="w-10">
    </div>
    <div class="grid grid-cols-3 w-full text-gray-100 font-semibold tracking-wide">
      @if ($title == 'Cars')
      <a class="flex justify-center items-center bg-blue-300 bg-opacity-60 h-12"><span>Cars List</span></a>
      @else
      <a href="cars" class="flex justify-center items-center bg-blue-300 bg-opacity-10 hover:bg-opacity-60 duration-200 h-12"><span>Cars List</span></a>
      @endif

      @if ($title == 'Customers')
      <a class="flex justify-center items-center bg-blue-300 bg-opacity-60 h-12"><span>Customers</span></a>
      @else
      <a href="customers" class="flex justify-center items-center bg-blue-300 bg-opacity-10 hover:bg-opacity-60 duration-200 h-12"><span>Customers</span></a>
      @endif

      @if ($title == 'Transaction')
      <a class="flex justify-center items-center bg-blue-300 bg-opacity-60 h-12"><span>Transactions</span></a>
      @else
      <a href="transaction" class="flex justify-center items-center bg-blue-300 bg-opacity-10 hover:bg-opacity-60 duration-200 h-12"><span>Transactions</span></a>
      @endif
    </div>
  </nav>
  <script>
    document.getElementById("nav").onclick = function() {showNav()};
    
    function showNav() {
      document.getElementById("nav").classList.toggle("h-28");
    }
  </script>