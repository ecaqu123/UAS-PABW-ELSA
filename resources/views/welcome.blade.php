@extends('layouts.home')

@section('content')
<section class="con">
  <div class="partnership">
    <h1 class="text-center text-sm">Trusted Companies Woldwide</h1>
    <div class="pt-20 container m-auto grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-4">
      <img class="w-[150px] h-[70px]" src="{{ asset('storage/assets/img/grab.png') }}" />
      <img class="w-[150px] h-[70px]" src="{{ asset('storage/assets/img/gojek.png') }}" />
      <img class="w-[150px] h-[70px]" src="{{ asset('storage/assets/img/shope.png') }}" />
      <img class="w-[150px] h-[70px]" src="{{ asset('storage/assets/img/bukalapak.png') }}" />
      <img class="w-[150px] h-[70px]" src="{{ asset('storage/assets/img/gojek.png') }}" />
      <img class="w-[150px] h-[70px]" src="{{ asset('storage/assets/img/shope.png') }}" />
    </div>
  </div>
  <div class="grid grid-flow-col auto-cols-auto">
    <div class="pt-48">
      <h1 class="text-[#FF9900] text-sm">About Us</h1>
      <h1 class="font-bold text-2xl pt-5">MaemMamam</h1>
      <p class="text-[#DDDDDD] text-sm pt-5 mb-10">
        We were founded in 1948 after the war and the world began to be safe
        we decided to open a small restaurant on the side of the road for
        the youth and the surrounding community, until finally we had the
        capital to create the only largest restaurant and so far we have
        opened 10 branches in Indonesia.
      </p>
      <button
        type="button"
        class="border-solid border-2 border-gray-600 py-2 px-8 rounded-full"
      >
        Read More
      </button>
    </div>
    <img src="{{ asset('storage/assets/img/burger2.png') }}" class="w-[490px] pr-10 pt-20" />
  </div>
  <div class="grid grid-flow-col auto-cols-auto pt-20">
    <img src="{{ asset('storage/assets/img/burger3.png') }}" class="pt-20 pr-5"/>
    <div class="pt-48">
      <h3 class="text-sm text-[#FF9900]">MaemMamam Restaurant</h3>
      <h1 class="pt-5 text-4xl font-bold">
        Fast food and fill your stomach
      </h1>
      <p class="text-[#DDDDDD] pt-5 mb-14 text-sm">
        we are a fast food company and we make everyone enjoy any food we
        serve them because we serve the best for them all.
      </p>
      <div class="flex gap-5">
        <button class="py-2 px-6 bg-[#FF9900] rounded-full">
          Shop Now
        </button>
        <div
          class="flex gap-3 border-solid border-2 border-gray-600 py-2 px-5 rounded-full"
        >
          <a href="#">About Us</a>
          <span class="pt-2"><img src="{{ asset('storage/assets/img/arr.png') }}" /></span>
        </div>
      </div>
  </div>
</section>
<section class="con">
  <div class="flex justify-between pt-20">
    <div>
      <h3 class="text-xs text-[#FF9900] pb-2">Popular menu</h3>
    <h1 class="text-3xl">Best Popular Menu</h1>
    <p>
      Find the food you want to buy and get the prize, made from the best
      ingredients we choose
    </p>
    </div>
    <div class="mt-28">
      <button
      class="border-solid border-2 border-gray-600 py-2 px-8 rounded-full"
    >
      View more
    </button>
    </div>
  </div>
  <div class="container m-auto grid grid-cols-2 md:grid-cols-5 lg:grid-cols-4 gap-4 mt-5">
    @foreach ($foods as $item)
    <div class="bg-[#16130D]">
      <div class="flex gap-2 p-3">
        <img class="mt-1 h-[15px] w-[15px]" src="{{ asset('storage/assets/img/star.png') }}" />
        <p>2.1</p>
      </div>
      <img src="{{ asset('storage/assets/img/' . $item->thumb) }}" class="m-4 w-[222px] h-[185px]" />
      {{-- <h3 class="pt-4 pl-4">Best Spaggheti</h3> --}}
      <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
        <p>{{ $item->title }}</p>
        <h4>{{ "$ " . number_format($item->price,2,',','.') }}</h4>
      </div>
    </div>
    @endforeach
  </div>
</section>

<section class="con py-40">
  <div
    class="border-solid border-2 border-white-600 rounded-lg py-20 px-5"
  >
    <div>
      <h1 class="text-center text-[#FF9900] mt-10 pb-2">Order now</h1>
      <h2 class="text-center text-[#FFFFFF] text-2xl font-extrabold">
        Order Now And Take a Giveaway
      </h2>
      <h3 class="text-center text-[#FFFFFF] text-lg mt-6">
        Order and get the prize, we will give a gift to those of you who are
        lucky to get something<br />interesting from us
      </h3>
      <h1 class="text-center text-[#FF9900] text-xs mt-10 pb-2">
        <button
          type="button"
          class="py-2 px-6 bg-[#FF9900] rounded-full text-white"
        >
          Order now
        </button>
      </h1>
    </div>
  </div>
</section>
@endsection