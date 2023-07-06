<div class="container mx-auto bg-black px-12 -mt-28 mb-28">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="wow fadeInRight">
            <?php if($image = $page->imagen()->toFile()): ?>
                <img class="w-full shadow-xl" src="{{ $image->url() }}" alt="">
            <?php endif ?>
        </div>
        <div class="flex items-center wow fadeInLeft">
            <div class="p-10">
                <p class="font-light text-xl text-xl tracking-widest my-2 text-white">{{ $page->subtitulo() }}</p>
                <h1 class="text-4xl font-bold my-2 text-white">{{ $page->titulo() }}</h1>
                <div class="border-2 border-green-300 w-12 my-2"></div>
                <p class="my-2 font-light tracking-wider text-white">{{ $page->texto() }}</p>
            </div>
        </div>
    </div>
</div>