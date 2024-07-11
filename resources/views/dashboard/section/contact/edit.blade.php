@extends('dashboard.index')
@section('content')

<div class="bg-white rounded-lg w-full lg:w-auto p-4">

    <h1 class="text-3xl title">Hero Section</h1>
    <form action="/dashboard/contact/{{ $contact->id }}" method="POST" class="mt-8">
        @csrf
        @method('PUT')
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="address" class="font-semibold">Address</label>
            <input type="text" name="address" class="px-4 py-2 border rounded-lg" id="address" value="{{ old('address', $contact->address ) }}">
        </div>
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="no_wa" class="font-semibold">No WA</label>
            <input type="text" name="no_wa" class="px-4 py-2 border rounded-lg" id="no_wa" value="{{ old('no_wa', $contact->no_wa ) }}">
        </div>
        <button class="w-full btn-default" type="submit">Save</button>
    </form>
</div>
    
@endsection