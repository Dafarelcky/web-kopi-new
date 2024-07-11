@extends('dashboard.index')
@section('content')

<div class="bg-white rounded-lg w-full lg:w-auto p-4">
    <h1 class="text-3xl title">Add New Product</h1>
    <form action="/dashboard/product_list" method="POST" class="mt-8" enctype="multipart/form-data">
        @csrf
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="Nama Product" class="font-semibold">Nama Product</label>
            <input type="text" class="border px-4 py-2 rounded-lg" id="Nama Product" name="name">
        </div>
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="harga" class="font-semibold">Harga</label>
            <input type="text" class="border px-4 py-2 rounded-lg" id="harga" name="price">
        </div>
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="detail" class="font-semibold">Detail Produk</label>
            <input id="x" type="hidden" name="detail_product" id="detail">
            <trix-editor input="x"></trix-editor>
        </div>
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="image" class="font-semibold">image</label>
            <input id="image" type="file" name="image" />
        </div>
        <button class="w-full btn-default" type="submit">Save</button>
    </form>
</div>
    
@endsection