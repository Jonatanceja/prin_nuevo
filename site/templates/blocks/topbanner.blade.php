<?php if($image = $page->imagen()->toFile()): ?>  
<div class="flex items-center bg-cover" style="background-image: url({{ $image->url() }});">
<?php endif ?>

<div class="container mx-auto items-center h-auto py-56 px-6 lg:px-0">
    <div>
    <h1 class="text-4xl md:text-6xl font-bold my-2 text-white"><?= $page->titulo()->kti() ?></h1>
    <p class="my-4 font-light tracking-wider text-white uppercase"><a href="{{ $site->url() }}"><span class="hover:opacity-75">Inicio </span></a><span class="text-green-300">_ <?= $page->parent()->title()->kti() ?></span></p>
    </div>
</div>

</div>