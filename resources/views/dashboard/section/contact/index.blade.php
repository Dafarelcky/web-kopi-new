@extends('dashboard.index')
@section('content')

<div class="flex  p-4 gap-4">
    <div class="w-full bg-white p-2 rounded-lg">
        <table class="w-full bg-white border-gray-200 shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">Address</th>
                    <th class="py-3 px-6 text-left">No_WA</th>
                    <th class="py-3 px-6 text-left">action</th>
                </tr>
            </thead>
            @foreach ($contact as $item)    
                <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-6 text-left">{{ $item->address }}</td>
                        <td class="py-3 px-6 text-left">{{ $item->no_wa }}</td>
                        <td class="py-3 px-6 text-left">
                            <a href="/dashboard/contact/{{ $item->id }}/edit" class="px-3 rounded-lg text-sm bg-amber-500 text-black">edit</a>
                        </td>
                        
                    </tr>
                </tbody>
            @endforeach
            
            
        </table>
    </div>

    

    
</div>

@endsection