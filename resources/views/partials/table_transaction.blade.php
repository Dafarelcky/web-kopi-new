<table class="min-w-full bg-white border-gray-200 shadow-md rounded-lg overflow-hidden">
    <thead class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
      <tr>
        <th class="py-3 px-6 text-left">No.</th>
        <th class="py-3 px-6 text-left">Status</th>
        <th class="py-3 px-6 text-left">Customer Name</th>
        <th class="py-3 px-6 text-left">Product Name</th>
        <th class="py-3 px-6 text-right">Amount</th>
      </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
      @foreach ($transactions as $item) 
     
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
          <td class="py-3 px-6 text-left">{{ $item->product_name }}</td>
          <td class="py-3 px-6 text-left">Rp {{ $item->price }}.000</td>
        </tr>
      @endforeach
      
    </tbody>
  </table>