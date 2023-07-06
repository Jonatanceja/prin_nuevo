<div class="bg-green-300">
    <div class="container mx-auto px-12 mb-52">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex items-center wow fadeInRight">
                <div class="p-10">
                    <p class="font-light text-xl text-xl tracking-widest my-2 text-black">{{ $page->subtitulo() }}</p>
                    <h1 class="text-4xl font-bold my-2 text-black">{{ $page->titulo() }}</h1>
                    <div class="border-2 border-white w-12 my-2"></div>
                    <p class="my-2 font-light tracking-wider text-black">{{ $page->texto() }}</p>
                </div>
            </div>
            <div class="wow fadeInLeft">
                <?php if($image = $page->imagen()->toFile()): ?>
                    <img class="w-full shadow-xl" src="{{ $image->url() }}" alt="">
                <?php endif ?>
            </div>
        </div>
    </div>
</div>