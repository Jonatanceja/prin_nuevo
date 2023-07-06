<div class="container mx-auto my-16 px-6 md:px-0">
    <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 mx-auto gap-12 items-center h-auto">
        <div class="wow fadeInRight">
        <p class="font-light text-xl text-xl tracking-widest my-2 wow">{{ $page->subtitulo() }}</p>
        <h1 class="text-4xl font-bold my-2">{{ $page->titulo() }}</h1>
        <div class="border-2 border-green-300 w-12 my-2"></div>
        </div>
        <div class="wow fadeInLeft">
            <p class="my-2 font-light tracking-wider">{{ $page->texto() }}</p>
        </div>
    </div>
</div>