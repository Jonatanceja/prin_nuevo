<div class="container mx-auto -mt-28 -mb-40 px-6 md:px-0">
    <div class="w-full grid md:grid-cols-3 mx-auto gap-12 items-center h-auto bg-black pt-14 px-14 pb-64">
        <div class="wow fadeInRight">
        <p class="font-light text-xl text-xl tracking-widest my-2 text-white">{{ $page->subtitulo() }}</p>
        <h1 class="text-4xl font-bold my-2 text-white">{{ $page->titulo() }}</h1>
        <div class="border-2 border-green-300 w-12 my-2"></div>
        <div class="text-left mt-10"><a class="transition duration-500 ease-in-out py-3 px-4 tracking-widest border-2 border-solid border-white hover:border-green-300 text-white hover:text-green-300 mx-auto uppercase hover:bg-black" href="{{ $page->enlace() }}">{{ $page->boton() }} <span class="text-green-300"><i class="fas fa-chevron-right"></i></span></a></div>

        </div>
        <div class="wow fadeInLeft col-span-2">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php
            $related = $page->related()->toPages();
            if ($related->count() > 0):
            ?>
            <?php foreach($related as $proyecto): ?>
        
    
                <?php if($image = $proyecto->portada()->toFile()): ?>
                    <a href="{{ $proyecto->url() }}">
                        <div class="h-64 lg:h-64 xl:h-80 bg-cover bg-center wow fadeIn" style="background-image: url({{ $image->url() }});">
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
            <?php endif ?>        
            </div>
        </div>
    </div>
</div>