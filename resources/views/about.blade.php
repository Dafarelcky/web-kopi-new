

<section class="flex bg-white px-10 py-40 justify-between flex-col gap-8 lg:flex-row items-center relative">
    <div class="w-full sm:max-w-2xl">
      <h1 class="title text-6xl">AiraRaung</h1>
      <p class="text-sm my-5">{!! $about->description !!}</p>
    </div>
    <div class="relative">
      <div class="absolute -bottom-5 -left-5 w-72 h-52 sm:w-[500px] sm:h-96 sm:-bottom-10 sm:-left-10 primary-color z-10"></div>
      <img src="{{ asset('storage/' . $about->image ) }}" alt="About" class="relative z-50 w-72 h-52 sm:w-[500px] sm:h-96 rounded-xl" />
      <div class="absolute -top-5 -right-5 rounded-lg bg-white shadow-2xl px-8 py-4 z-50">
        <p>Kopi Bubuk Kualitas Terbaik</p>
        <div class="flex justify-center gap-3 mt-3 text-2xl text-yellow-500">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
    </div>
    <div class="hidden absolute bottom-0 left-0 bg-green-400 w-32 h-32 blur-[100px] rounded-full lg:block"></div>
</section>