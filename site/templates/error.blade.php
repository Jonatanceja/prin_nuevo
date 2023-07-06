@extends('layouts.default')
@section('content')

<div class="flex h-screen items-center bg-cover" style="background-image: url(/images/error.jpg);">


<div class="w-3/4 md:w-1/2 mx-auto">
    <p class="uppercase text-center text-2xl tracking-widest text-white font-light">error 404</p>
    <h1 class="text-4xl md:text-9xl text-white text-center"><strong>¡</strong>EPA<strong>!</strong></h1>
    <p class="text-white text-center tracking-wider py-2 text-xl font-light uppercase">La página que buscas no existe</p>
    <div class="text-center mt-4"><a class="font-light py-3 px-4 tracking-widest text-white hover:text-green-300 mx-auto uppercase" href="{{ $site->url() }}"><span class="text-green-300"><i class="fas fa-chevron-left"></i></span> Volver</a></div>
</div>

</div>

@endsection