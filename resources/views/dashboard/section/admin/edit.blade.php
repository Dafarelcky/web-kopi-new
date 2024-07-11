@extends('dashboard.index')
@section('content')

<form action="/dashboard/user/{{ $user->id ?? '' }}" method="POST" class="mt-8 px-10" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="grid w-full max-w-sm items-center gap-4 mb-4">
        <label for="username" class="font-semibold">Username</label>
        <input class="border p-3 @error('username') border-red-500 @enderror" name="username" id="username" value={{old('tagline', $user->username  ?? '') }} />
    </div>
    <div class="grid w-full max-w-sm items-center gap-4 mb-4">
        <label for="password" class="font-semibold ">Password</label>
        <input class="border p-3 @error('password') border-red-500 @enderror" type="password" value="" name="password" id="password" />
        @error('password')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <button class="w-full btn-default" type="submit">Save</button>
</form>

@endsection