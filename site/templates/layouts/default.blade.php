<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/custom.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://kit.fontawesome.com/da479675e4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              <style>
 
                &.slider {
                    height: 80vh;
                }
                
            
                &.slider-thumbnail {
                    height: 20vh;
                    
                    .swiper-wrapper {
                        
                        .swiper-slide {
                            width: 25%;
                            height: 100%;
                            opacity: .5;
                            overflow: hidden;
            
                            &.swiper-slide-thumb-active {
                                opacity: 1;
                            }
                        }
                    }
                }
                </style>

</head>

<body>
    <nav
      class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-black' : isOpen , 'bg-black opacity-75' : !isOpen}">
      <!--Logo etc-->
      <div class="flex items-center">
        <a class="" href="{{ $site->url() }}"><img class="w-24" src="/images/logo.svg" alt="PRIN"></a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
        :class="{ 'transition transform-180': isOpen }">
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24">
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
        </svg>
      </button>

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
        <ul
          class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center uppercase text-center"
        >
          <li class="mr-3">
            <a
              class="inline-block text-gray-200 no-underline hover:text-white hover:text-underline py-2 px-4"
              href="{{ $site->url() }}"
              @click="isOpen = false">Inicio</a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block text-gray-200 no-underline hover:text-white hover:text-underline py-2 px-4"
              href="/nosotros"
              @click="isOpen = false">Nosotros</a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block text-gray-200 no-underline hover:text-white hover:text-underline py-2 px-4"
              href="/proyectos"
              @click="isOpen = false">Proyectos</a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block text-gray-200 no-underline hover:text-white hover:text-underline py-2 px-4"
              href="/servicios"
              @click="isOpen = false">Servicios</a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block transition duration-500 ease-in-out py-3 px-4 border-2 border-solid border-green-300 text-gray-200 hover:text-black mx-auto uppercase hover:bg-green-300"
              href="/contacto"
              @click="isOpen = false">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>
    
@yield('content')

<footer class="bg-black">
  <div class="container mx-auto py-5 lg:flex items-center">
    <div class="w-full lg:w-2/3 block lg:inline-flex md:space-x-4 text-center md:text-left text-sm">
      <?php foreach ($site->children()->listed() as $subpage): ?> 
        <h3 class="transition text-white opacity-50 hover:opacity-80 uppercase"><a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a></h3>
      <?php endforeach ?>
    </div>
      
    <div class="w-full lg:w-1/3 mt-4 lg:mt-0">  
      <ul class="lg:flex text-xl flex space-x-3 justify-center lg:justify-end">

        @foreach(page('contacto')->children()->filterBy('intendedTemplate', 'datos')->first()->redes()->toStructure() as $red)
        <li class="transition text-white opacity-50 hover:opacity-100"><a href="{{ $red->enlace() }}" target="_blank" rel="noopener"><i class="fab {{ $red->red() }} fa-fw"></i></a></li>
        @endforeach
      </ul>
    </div>
    
  </div>
  <div class="container mx-auto w-full border-white border-t-2 border-opacity-30">
    <p class="text-white opacity-50 text-center py-5 font-light">©Todos los derechos reservados {{ $site->title() }}® | <span class="text-white border-b-2 border-black hover:border-white font-bold"><a href="/aviso-de-privacidad">Aviso de Privacidad</a></span></p>

  </div>
</footer>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var sliderThumbnail = new Swiper('.slider-thumbnail', {
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

var slider = new Swiper('.slider', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: sliderThumbnail
  }
});
</script>

</body>

</html>
