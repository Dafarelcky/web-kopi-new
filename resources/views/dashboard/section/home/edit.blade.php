@extends('dashboard.index')
@section('content')

<div class="bg-white rounded-lg w-full lg:w-auto p-4">
    <h1 class="text-3xl title">Hero Section</h1>
    <form action="/dashboard/home/{{ $home->id ?? '' }}" method="POST" class="mt-8" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="tagline" class="font-semibold">Tagline</label>
            <textarea class="border h-36 p-3" name="tagline" id="tagline">{{ old('tagline', $home->tagline  ?? '') }}</textarea>
        </div>
        <div class="grid w-full max-w-sm items-center gap-4 mb-4">
            <label for="video" class="font-semibold">Video</label>
            <input id="video" type="file" name="video" />
        </div>
        <button class="w-full btn-default" type="submit">Save</button>
    </form>
</div>
    
@endsection