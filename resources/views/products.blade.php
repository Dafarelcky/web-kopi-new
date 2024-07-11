<section class="bg-gray-950 py-20">
    <h1 class="title text-6xl text-white px-10 py-12 text-center">Produk Kami</h1>
    <div class="flex overflow-x-auto w-full whitespace-nowrap gap-8 scroll-smooth">
        @foreach ($product as $item)    
            <a href="/product/{{ $item->id }}">
                <div class="w-96 flex flex-col items-center py-10">
                    <img src="{{ asset('storage/' . $item->image ) }}" width="300" height="300" alt="product" />
                    <div class="flex flex-col text-white gap-4">
                        <h3 class="text-2xl">{{ $item->name }}</h3>
                        <span class="text-gray-300">Rp {{ $item->price }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
  </section>