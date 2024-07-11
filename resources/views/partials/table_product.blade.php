
<table class="min-w-full bg-white border-gray-200 shadow-md rounded-lg overflow-hidden">
    <thead class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
      <tr>
        
        <th class="py-3 px-6 text-left">Product Name</th>
        <th class="py-3 px-6 text-right">Amount</th>
      </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
      @foreach ($product as $item)    
        <tr class="border-b border-gray-200 hover:bg-gray-100">          
          <td class="py-3 px-6 text-left">{{ $item->name }}</td>
          <td class="py-3 px-6 text-right">Rp. {{ $item->price }}</td>
        </tr>
      @endforeach
  
      <!-- More rows as needed -->
    </tbody>
  </table>