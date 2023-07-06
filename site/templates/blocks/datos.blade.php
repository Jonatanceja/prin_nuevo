<div class="container mx-auto -mt-28 px-6 md:px-0">
    <div class="w-full grid md:grid-cols-2 mx-auto gap-12 h-auto bg-black py-14 px-14">
        <div>
            <p class="font-light text-xl tracking-widest my-2 text-white">{{ $page->subtitulo() }}</p>
            <h1 class="text-4xl font-bold my-2 text-white">{{ $page->titulo() }}</h1>
                <div class="border-2 border-green-300 w-12 my-2"></div>
                <div class="mt-6">
                    <p class="text-green-300 mr-3 inline-flex"><i class="fas fa-map-marker-alt"></i></p><p class="text-white inline-flex"><?= $page->direccion()->kti() ?></p>
                </div>
                <div class=" mt-6">
                    <p class="text-green-300 mr-3 inline-flex"><i class="fas fa-phone"></i></p><p class="text-white inline-flex"><?= $page->telefono()->kti() ?></p>
                </div>
                <a href="https://wa.me/{{ $page->whatsapp() }}?" target="blank"><button class="transition bg-green-300 hover:bg-white text-black hover:text-green-400 py-3 px-5 text-center mt-6">Contáctanos por Whatsapp <span class="ml-2 text-xl"><i class="fab fa-whatsapp"></i></span></button></a> 
        </div>
        <div>
            <?php snippet('formbuilder'); ?>
        </div>
    </div>
</div>