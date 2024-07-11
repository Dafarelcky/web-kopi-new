@extends('dashboard.index')
@section('content')

<div class="max-w-5xl overflow-x-hidden flex lg:flex-row bg-gray-200 p-4 gap-4 ">
    <div class="justify-center bg-white p-2 rounded-lg relative">
        <div class="absolute top-7 right-7">
            <a href="/dashboard/product_list/create" class="bg-gray-950 px-8 py-1 text-white rounded-lg capitalize">tambah product</a>
            
        </div>
        <div class="flex flex-wrap mt-20 justify-center overflow-y-auto gap-5 px-8">
            @foreach ($product as $item)    
                <div class="w-80 flex flex-col items-center py-10 ">
                    <img src="{{ asset('storage/' . $item->image ) }}" width="250" height="250" alt="product" />
                    <div class="flex flex-col gap-4">
                        <h1 class="text-2xl">{{ $item->name }}</h1>
                        <span class="text-gray-800">Rp {{ $item->price }}</span>
                        <p class="text-gray-700 line-clamp-1 ">{!! $item->detail_product !!}</p>  
                    </div>
                    <div class="mt-3 flex flex-wrap gap-3 justify-center">
                       
                        <a href="/dashboard/product_list/{{ $item->id }}/edit" class="bg-amber-500 px-8 py-1 text-white rounded-lg capitalize">edit</a>
                        <form action="/dashboard/product_list/{{ $item->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('apakah anda yakin mau menghapus data ini?')" class="bg-red-500 px-8 py-1 text-white rounded-lg capitalize">delete</button>
                        </form>
                        
                    </div>
                </div>
            @endforeach

        
          

        </div>
        
    </div>
    
</div>


    
<script>
    document.getElementById('detailButton').addEventListener('click', function() {
        document.getElementById('detailModal').classList.remove('hidden');
    });
    
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('detailModal').classList.add('hidden');
    });
    
    window.addEventListener('click', function(event) {
        if (event.target == document.getElementById('detailModal')) {
            document.getElementById('detailModal').classList.add('hidden');
        }
    });
    </script>
@endsection

    