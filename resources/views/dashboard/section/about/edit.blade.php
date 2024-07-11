@extends('dashboard.index')
@section('content')

<div class="bg-white rounded-lg w-full lg:w-auto p-4">
    <h1 class="text-3xl title">Hero Section</h1>
    <form action="/dashboard/about/{{ $about->id }}" method="POST" class="mt-8" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            
            <input id="x" type="hidden" name="description" value="{{ old('description', $about->description ) }}">
            <trix-editor input="x"></trix-editor>
        </div>
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="image" class="font-semibold">Image</label>
            <input id="image" type="file" name="image" />
        </div>
        <button class="w-full btn-default" type="submit">Save</button>
    </form>
</div>
    
@endsection