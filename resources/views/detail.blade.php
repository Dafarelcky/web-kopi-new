@extends('layout.index')
@section('container')



<div class="flex flex-col sm:flex-row items-center px-10 py-32">
    <img src="{{ asset('storage/' . $data->image ?? '' ) }}" width="500" height="500" alt="product detail" />
    <form action="/order" method="POST">
        @csrf
        <div>
            <h1 class="text-5xl mb-4 title">{{ $data->name }}</h1>
            <span class="mb-4 block text-2xl text-gray-700 bebas_neue">Rp {{ $data->price }}</span>
            <div class="mb-4">
                <h2 class="font-semibold">Detail</h2>
                <p>{!! $data->detail_product !!}</p>
            </div>
            
            
            <button class="w-full lg:w-3/4 btn-default mt-6" id="orderBtn">Beli Sekarang</button>
        </div>
    </form>
</div>

<div id="orderModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-8 w-1/2">
        <h2 class="text-2xl mb-4">Confirm Your Order</h2>
        <form action="/order" method="POST">
            @csrf
            <div class="grid w-full sm:w-52 lg:w-full max-w-sm items-center gap-1.5">
                <input type="hidden" name="product_name" value="{{ $data->name }}">
                <input type="hidden" name="price" value="{{ $data->price }}">
                <label for="nama" class="font-semibold">Nama</label>
                <input type="text" id="nama" name="cust_name" placeholder="Nama..." class="border rounded p-2" />
            </div>
            <div class="grid w-full sm:w-52 lg:w-full max-w-sm items-center gap-1.5">
                <label for="Alamat" class="font-semibold">Alamat</label>
                <input type="text" id="address" name="address" placeholder="Alamat..." class="border rounded p-2" />
            </div>
            <div class="mb-4">
                <h2 class="mb-2 font-semibold">Berat:</h2>
                <div class="flex gap-5 pt-2">
                    <div>
                        <label for="weight_100" class="weight border-2 border-gray-950 rounded-lg px-8 py-3 cursor-pointer">100 gram</label>
                        <input type="radio" name="weights" id="weight_100" value="100" class="hidden">
                    </div>
                    <div>
                        <label for="weight_150" class="weight border-2 border-gray-950 rounded-lg px-8 py-3 cursor-pointer">150 gram</label>
                        <input type="radio" name="weights" id="weight_150" value="150" class="hidden">
                    </div>
                    <div>
                        <label for="weight_200" class="weight border-2 border-gray-950 rounded-lg px-8 py-3 cursor-pointer">200 gram</label>
                        <input type="radio" name="weights" id="weight_200" value="200" class="hidden">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <h2 class="font-semibold">Jumlah barang</h2>
                <div class="flex gap-2 mt-4">
                    <button id="decrementBtn" class="bg-gray-950 px-3 py-1 text-white cursor-pointer" type="button">-</button>
                    <input type="text" id="quantityInput" class="w-12 px-2 border-2 text-center" name="quantity" value="1" readonly>
                    <button id="incrementBtn" class="bg-gray-950 px-3 py-1 text-white cursor-pointer" type="button">+</button>
                </div>
            </div>

            <div class="flex justify-end mt-4">
                <button id="cancelBtn" class="mr-4 px-4 py-2 bg-gray-500 text-white rounded" type="button">Cancel</button>
                <button id="confirmBtn" type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Confirm</button>
            </div>
        </form>
    </div>
</div>

<script>
    const weights = document.querySelectorAll('.weight');
    const orderBtn = document.getElementById('orderBtn');
    const orderModal = document.getElementById('orderModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const confirmBtn = document.getElementById('confirmBtn');
    const decrementBtn = document.getElementById('decrementBtn');
    const incrementBtn = document.getElementById('incrementBtn');
    const quantityInput = document.getElementById('quantityInput');
    
    
    orderBtn.addEventListener('click', function (event) {
        event.preventDefault();
        orderModal.classList.remove('hidden');
    });

   
    cancelBtn.addEventListener('click', function () {
        orderModal.classList.add('hidden');
    });


    weights.forEach(weight => {
        weight.addEventListener('click', () => {
            const checkbox = document.getElementById(`weight_${weight.innerText.split(' ')[0]}`);
            weights.forEach(w => {
                if (w !== weight) {
                    const cb = document.getElementById(`weight_${w.innerText.split(' ')[0]}`);
                    cb.checked = false;
                    w.classList.remove('border-green-600', 'text-green-600');
                }
            });
            checkbox.checked = !checkbox.checked;
            weight.classList.toggle('border-green-600');
            weight.classList.toggle('text-green-600');
        });
    });

    confirmBtn.addEventListener('click', function () {
        const formData = new FormData(orderDetailsForm);
        const productName = formData.get('product_name');
        const price = formData.get('price');
        const customerName = formData.get('cust_name');
        const address = formData.get('address');
        const weight = formData.get('weights');
        const quantity = formData.get('quantity');
        const whatsappNumber = {{ $no_wa }}
    

        const message = `Nama Product : ${productName} \nNama Pembeli : ${customerName} \nAlamat : ${address} Berat Barang : ${weights} \nJumlah Barang : ${quantity}`;

        // const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${message}`;
        let whatsappUrl = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    });


    decrementBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    incrementBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
</script>

@endsection
