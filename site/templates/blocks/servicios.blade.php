<div class="container mx-auto mt-16 px-6 md:px-0">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 wow fadeInDown">
        <?php $items = $page->servicios()->toStructure(); foreach ($items as $item): ?>
        <div class="group transition duration-500 ease-in-out bg-white hover:bg-black shadow-xl hover:shadow-2xl focus:outline-none p-12 text-black hover:text-white">
            <h1 class="uppercase text-center font-bold tracking-wider">{{ $item->titulo() }}</h1>
            <div class="border-2 border-green-300 w-12 my-2 mx-auto"></div>
            <p class="font-light tracking-wider">{{ $item->texto() }}</p>
            <p class="text-green-300 hover:text-green-200 text-center my-4"><a href="/servicios">Ver más</a></p>
        </div>
        <?php endforeach ?>
    </div>
</div>
<?php if($image = $page->fondo()->toFile()): ?> 
<div class="h-96 bg-cover -mt-48 bg-fixed" style="background-image: url({{ $image->url() }});"></div>
<?php endif ?>