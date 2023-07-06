<div class="container mx-auto -mt-28 -mb-40 px-6 md:px-0">
    <div class="w-full grid md:grid-cols-2 mx-auto gap-12 items-center h-auto bg-black pt-14 px-14 pb-64">
        <div class="wow fadeInRight">
        <p class="font-light text-xl text-xl tracking-widest my-2 text-white">{{ $page->subtitulo() }}</p>
        <h1 class="text-4xl font-bold my-2 text-white">{{ $page->titulo() }}</h1>
        <div class="border-2 border-green-300 w-12 my-2"></div>
        </div>
        <div class="wow fadeInLeft">
            <p class="my-2 font-light tracking-wider text-white">{{ $page->texto() }}</p>
            <div class="text-left mt-10"><a class="transition duration-500 ease-in-out py-3 px-4 tracking-widest border-2 border-solid border-white hover:border-green-300 text-white hover:text-green-300 mx-auto uppercase hover:bg-black" href="{{ $page->enlace() }}">{{ $page->boton() }} <span class="text-green-300"><i class="fas fa-chevron-right"></i></span></a></div>
        </div>
    </div>
</div>