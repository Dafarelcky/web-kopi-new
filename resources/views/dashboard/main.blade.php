@extends('dashboard.index')
@section('content')


<main class="px-8 py-6 bg-gray-200 ">

    <div class="flex flex-col gap-5 lg:flex-row lg:justify-between ">
        <!-- Riwayat Transaksi -->
        <div class="max-w-full lg:max-w-[80%] bg-white p-2 rounded-lg">
            <h1 class="p-3 text-2xl">Riwayat Transaksi</h1>
            <div class="overflow-x-auto ">
                @include('partials.table_transaction')
            </div>
        </div>

        <!-- List Produk -->
        <div class="w-full  flex flex-col gap-6">
            <div class="bg-white p-2 rounded-lg w-full ">
                <h1 class="p-3 text-2xl">List Produk</h1>
                <div class="overflow-x-auto">
                    @include('partials.table_product')
                </div>
            </div>

            <!-- Pengurus -->
            <div class="bg-white p-2 rounded-lg w-full ">
                <h1 class="p-3 text-2xl">Pengurus</h1>
                <div class="overflow-x-auto">
                    @include('partials.table_employee')
                </div>
            </div>
        </div>
    </div>
</main>


    
@endsection