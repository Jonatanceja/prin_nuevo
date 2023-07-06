@extends('layouts.default')
@section('content')

<?php if($image = $page->imagen()->toFile()): ?>  
<div class="flex items-center bg-cover" style="background-image: url({{ $image->url() }});">
<?php endif ?>

<div class="container mx-auto items-center h-auto py-56 px-6 lg:px-0">
    <div>
    <h1 class="text-4xl md:text-6xl font-bold my-2 text-white"><?= $page->titulo()->kti() ?></h1>
    <p class="my-4 font-light tracking-wider text-white uppercase"><a href="{{ $site->url() }}"><span class="hover:opacity-75">Inicio </span></a><span class="text-green-300">_ <?= $page->title()->kti() ?></span></p>
    </div>
</div>

</div>

<div class="container mx-auto bg-black p-12 -mt-28">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php foreach($page->children()->listed()->paginate(12) as $proyecto): ?>
    

            <?php if($image = $proyecto->portada()->toFile()): ?>
                <a href="{{ $proyecto->url() }}">
                    <div class="h-64 lg:h-80 xl:h-96 bg-cover bg-center wow fadeIn" style="background-image: url({{ $image->url() }});">
            <?php endif ?>
                        <div class="transition-opacity transition-duration-1000 flex items-center bg-black h-full bg-opacity-50 opacity-0 hover:opacity-100">
                            <div class="mx-auto py-24">
                            <p class="text-center text-white text-2xl"><i class="far fa-eye"></i></p>
                            <p class="font-bold text-white uppercase text-2xl text-center border-b-2 border-green-300">{{ $proyecto->title()->kti() }}</p>
                            </div>
                        </div>
                    </div>
                </a>
        <?php endforeach ?>
        </div>
    
</div>

@endsection