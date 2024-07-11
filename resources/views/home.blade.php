@extends('layout.index')
@include('partials.navbar')
@section('container')

<section class="text-white bg-gray-950 pb-16 relative">
    <div class="hidden bg-green-600 w-16 h-16 rounded-full sm:block absolute top-0 right-0 blur-3xl"></div>
    <div class="hidden absolute top-20 left-0 bg-green-600 w-60 h-60 blur-[100px] rounded-full sm:block lg:translate-x-60"></div>
    <div class="absolute bottom-0 right-0 bg-green-600 w-60 h-60 blur-[100px] rounded-full lg:-translate-x-60"></div>
    <div class="relative z-50 flex flex-col items-center gap-7 px-10">
      <h1 class="text-2xl sm:text-6xl title text-center max-w-3xl mx-auto mt-9">{{ $home->tagline }}</h1>
      <a href="#contact" class="bg-primary px-8 py-2 rounded-lg">Contact</a>
        @include('partials.video')
    </div>
</section>
@include('about')
@include('products')
@include('contact')
@endsection
