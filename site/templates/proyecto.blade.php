@extends('layouts.default')
@section('content')

<div class="container mx-auto mt-40 px-6 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="">
            <div class="swiper-container slider">
                <div class="swiper-wrapper">
                    <?php $images =  $page->galeria()->toFiles();
                    foreach($images as $image): ?>  
                    <div class="swiper-slide"><img src="{{ $image->crop(800, 530)->url() }}" alt=""></div>
                    <?php endforeach ?>
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            

            <div class="swiper-container slider-thumbnail">
                <div class="swiper-wrapper">
                    <?php $images =  $page->galeria()->toFiles();
                    foreach($images as $image): ?>  
                    <div class="swiper-slide"><img src="{{ $image->crop(400, 250)->url() }}" alt=""></div>
                    <?php endforeach ?>
                </div>
            </div>
            
        </div>
        <div>
            <p class="mb-4 font-light tracking-wider text-black uppercase"><a href="{{ $site->url() }}"><span class="hover:opacity-75">Inicio </span></a>_ <a href="{{ $page->parent()->url() }}"><span class="hover:opacity-75"><?= $page->parent()->title()->kti() ?></span></a> _ <span class="text-green-300">{{ $page->title() }}</span></p>
            <p class="text-xl font-light uppercase my-2 tracking-wider">{{ $page->subtitulo() }}</p>
            <h1 class="text-2xl md:text-4xl font-bold my-2">{{ $page->titulo() }}</h1>
            <p class="font-light my-2 tracking-wider"><?= $page->contenido()->kti() ?></p>
        </div>
        
    </div>

</div>

@endsection

