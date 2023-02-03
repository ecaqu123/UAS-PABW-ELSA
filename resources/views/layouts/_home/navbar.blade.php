<div class="topnav con" id="myTopnav">

    <a><img src="{{ asset('storage/assets/img/logo.png') }}" class="w-9 h-7" /></a>
  
    <nav class="flex justify-between">
      <div class="flex">
        <ul class="flex ml-6 gap-10 py-1 text-sm ml-16">
          <li class="text-[#FF9900]"><a href="">Home</a></li>
          <li><a href="">Menu</a></li>
          <li><a href="">Community</a></li>
        </ul>
      </div>
      @if (Auth::user() != null)
      <div class="flex">
        <div class="right-menu mt-3">
          <img class="absolute ml-1" src="{{ asset('storage/assets/img/notice.png') }}" />
          <img class="pt-2" src="{{ asset('storage/assets/img/chart.png') }}" />
        </div>
        <div class="right-menu flex">
          <button class="mx-5 mt-4">
            <a href="{{ route('dashboard.index') }}">{{ Auth::user()->name }}</a>
          </button>
          <img class="mt-5 mr-2" style="width: 20px; height:20px" src="{{ asset('storage/assets/img/user.png') }}" />
        </div>
      </div>
      @else
      <div class="flex">
        <div class="right-menu mt-3">
          <img class="absolute ml-1" src="{{ asset('storage/assets/img/notice.png') }}" />
          <img class="pt-2" src="{{ asset('storage/assets/img/chart.png') }}" />
        </div>
        <div class="right-menu flex">
          <button class="mx-5 mt-1">
            <a href="{{ route('login') }}">Log In</a>
          </button>
          <img class="mt-5 mr-2" style="width: 20px; height:20px" src="{{ asset('storage/assets/img/user.png') }}" />
          <div class="mt-2">
            <button type="button" class="bg-[#FF9900] py-2 px-8 rounded-full">
              <a href="{{ route('login') }}">Register</a>
            </button>
          </div>
        </div>
      </div>  
      @endif
    </nav>
  
    <a href="" class="list-menu">Home</a>
    <a href="" class="list-menu">Menu</a>
    <a href="" class="list-menu">Comunity</a>
    <a href="" class="list-menu">Chart</a>
    <a href="{{ route('login') }}" class="list-menu">Login</a>
    <a href="{{ route('login') }}" class="list-menu">Register</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav con") {
        x.className += " responsive";
      } else {
        x.className = "topnav con";
      }
    }
  </script>