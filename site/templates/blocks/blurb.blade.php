<div class="container mx-auto px-6 md:px-0 mb-12">
    <div class="grid md:grid-cols-3 gap-12 xl:gap-24">
        <?php $items = $page->blurbs()->toStructure(); foreach ($items as $item): ?>
        <div class="mx-auto px-0 lg:px-12 wow fadeInDown">
            <?php if($image = $item->imagen()->toFile()): ?>
                <img class="mx-auto w-full" src="{{ $image->url() }}" class="m-auto">
            <?php endif ?>
            <h1 class="font-bold tracking-wider mt-4">{{ $item->titulo() }}</h1>
            <div class="border-2 border-green-300 w-12 my-2"></div>
            <p class="font-light tracking-wider">{{ $item->texto() }}</p>
        </div>
        <?php endforeach ?>
        

    </div>

</div>