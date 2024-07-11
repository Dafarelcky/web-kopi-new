@extends('dashboard.index')
@section('content')

<div class="w-full bg-white p-2 rounded-lg">


    <table class="min-w-full bg-white border-gray-200 shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
          <tr>
            <th class="py-3 px-6 text-left">No.</th>
            <th class="py-3 px-6 text-left">Status</th>
            <th class="py-3 px-6 text-left">Customer Name</th>
            <th class="py-3 px-6 text-left">Address</th>
            <th class="py-3 px-6 text-left">Product Name</th>
            <th class="py-3 px-6 text-left">Weight</th>
            <th class="py-3 px-6 text-right">Price</th>
            <th class="py-3 px-6 text-right">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach ($data as $item)   
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $loop->iteration }}</td>
                    <td class="py-3 px-6 text-left">
                        @if ($item->status == 'paid')  
                            <span class="bg-green-800 block text-center text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                        @elseif($item->status == 'failed')
                            <span class="bg-red-800 block text-center text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                        @else
                            <span class="bg-gray-800 block text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                        @endif
                    </td>
                    <td class="py-3 px-6 text-left">{{ $item->cust_name }}</td>
                    <td class="py-3 px-6 text-left">{{ $item->address }}</td>
                    <td class="py-3 px-6 text-left">{{ $item->product_name }}</td>
                    <td class="py-3 px-6 text-right">{{ $item->weights }}</td>
                    <td class="py-3 px-6 text-right">Rp {{ $item->price }}.000</td>
                    <td class="py-3 px-6 text-right flex gap-2">
                        <form action="/dashboard/transactions-success/{{ $item->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="bg-green-800 block text-white text-center px-2 py-1 text-xs rounded-lg cursor-pointer">paid</button>
                        </form>
                        <form action="/dashboard/transactions/{{ $item->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="bg-red-800 block text-white text-center px-2 py-1 text-xs rounded-lg cursor-pointer" type="submit">failed</button>
                        </form>
                        {{-- <select data-id="{{ $item->id }}" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="progress" {{ $item->status == 'progress' ? 'selected' : '' }}>Progress</option>
                            <option value="paid" {{ $item->status == 'paid' ? 'selected' : '' }}>Paid</option>
                            <option value="failed" {{ $item->status == 'failed' ? 'selected' : '' }}>Failed</option>
                        </select> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const selects = document.querySelectorAll('.status-select');

        selects.forEach(select => {
            select.addEventListener('change', async function() {
                const id = this.getAttribute('data-id');
                const status = this.value;
                try {
                    const response = await fetch('{{ route("update.status") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            '_token': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            id: id,
                            status: status
                        })
                    });
                    
                    const result = await response.json();
                    if (result.success) {
                        alert('Status updated successfully!');
                    } else {
                        alert('Failed to update status.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                }
            });
        });
    });
</script>  --}}

@endsection