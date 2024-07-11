@extends('layout.index')
@section('container')
<div class="flex justify-center items-center min-h-screen flex-col">
    @if (session()->has('loginError'))
       <div class="bg-red-500 w-52 text-center p-2 rounded-lg mb-5 text-white">Login failed</div> 
    @endif
    <div class="w-full sm:w-80 shadow-2xl bg-white rounded-lg px-10 py-5">
      <h1 class="text-center text-3xl mb-5">Login</h1>
      <form action="/gate" method="POST">
        @csrf
        <div class="grid w-full sm:w-52 lg:w-full max-w-sm items-center gap-1.5 mb-4">
          <label for="Username" class="mb-2">Username</label>
          <input type="text" id="Username" class="px-4 py-2 border rounded-lg w-full " placeholder="Username ..." name="username" />

          
        </div>
        <div class="grid w-full sm:w-52 lg:w-full max-w-sm items-center gap-1.5 mb-4">
          <label for="Password" class="mb-2">Password</label>
          <input type="password" id="Password" class="px-4 py-2 border rounded-lg w-full" placeholder="Password..." name="password" />
        </div>
        <button class="w-full btn-default">Login</button>
        
      </form>

    </div>
</div>
@endsection