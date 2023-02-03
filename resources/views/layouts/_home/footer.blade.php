@foreach ($footers as $footer)
<footer class="con py-20">
  <div class="container m-auto grid grid-cols-1 md:grid-cols-5 lg:grid-cols-4 gap-4 mt-5">
    <div>
      <div class="flex">
        <img src="{{ asset('storage/assets/img/logo.png') }}" class="w-9 h-7" />
        <a class="ml-2 mb-12">MaemMamam</a>
      </div>
      <p class="absolute mt-2" style="width: 400px">
        {{ $footer->about }}
      </p>
      <div class="flex mt-40">
        <a href="#">
          <img class="mr-5 w-[7px] h-[14px]" src="{{ asset('storage/assets/img/fb.png') }}" />
        </a>
        <a href="#">
          <img class="mr-5 w-[18px] h-[14px]" src="{{ asset('storage/assets/img/tw.png') }}" />
        </a>
        <a href="#">
          <img class="mr-5 w-[16px] h-[15px]" src="{{ asset('storage/assets/img/lk.png') }}" />
        </a>
        <a href="#">
          <img class="mr-5 w-[16px] h-[19px]" src="{{ asset('storage/assets/img/ig.png') }}" />
        </a>
      </div>
    </div>
    <div class="flex pt-20 justify-center">
      <div class="fot-link"></div>
      <ul>
        <li><h4>Navigation</h4></li>
        <li><a class="text-[#969696]" href="#">Home</a></li>
        <li><a class="text-[#969696]" href="#">Info</a></li>
        <li><a class="text-[#969696]" href="#">News</a></li>
        <li><a class="text-[#969696]" href="#">About Us</a></li>
        <li><a class="text-[#969696]" href="#">Contact</a></li>
      </ul>
    </div>
    <div class="fot-ad pt-20">
      <h3>Address</h3>
      <p class="text-[#969696] text-sm">
       {{ $footer->address }}
      </p>
    </div>
    <div class="fot-con pt-20">
      <h3>Contact</h3>
      <div class="flex py-3">
        <a><img class="mr-3 w-[20px] h-[20px]" src="{{ asset('storage/assets/img/phone.png') }}" /></a>
        <p class="text-[#969696]">{{ $footer->phone }}</p>
      </div>
      <div class="flex">
        <a><img class="mr-3 w-[20px] h-[20px]" src="{{ asset('storage/assets/img/email.png') }}" /></a>
        <p class="text-[#969696]">{{ $footer->email }}</p>
      </div>
    </div>
  </div>
</footer>
@endforeach