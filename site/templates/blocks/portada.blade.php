<?php if($image = $page->imagen()->toFile()): ?>  
<div class="flex h-screen items-center bg-cover" style="background-image: url({{ $image->url() }});">
<?php endif ?>

<div class="w-3/4 md:w-1/2 mx-auto">
    <h1 class="text-4xl md:text-6xl text-white text-center animate__animated animate__fadeInDown"><?= $page->titulo()->kti() ?></h1>
    <p class="text-white text-center tracking-wider py-2 text-xl font-light animate__animated animate__fadeInUp">{{ $page->texto() }}</p>
    <div class="text-center mt-4 animate__animated animate__fadeIn animate__delay-1s"><a class="transition duration-500 ease-in-out py-3 px-4 tracking-widest border-2 border-solid border-white hover:border-black text-white hover:text-green-300 mx-auto uppercase hover:bg-black" href="{{ $page->enlace() }}">{{ $page->boton() }} <span class="text-green-300"><i class="fas fa-chevron-right"></i></span></a></div>
</div>

</div>