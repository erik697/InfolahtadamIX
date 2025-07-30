<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      {{-- <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Blog')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


        <!-- Styles / Scripts -->
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('mycss/styles.css') }}">
    </head>
    <body>
      {{-- navbar start --}}
        <nav class="fixed top-0 left-0 w-full shadow-2xl bg-black/80  backdrop-blur-lg text-white z-50">
          <div class="px-5 py-4">
            
            <div class="lg:flex lg:w-full">
              <div class="lg:w-1/3  flex lg:justify-center items-center">
                  <img src="{{ asset('images/logo_infolahta.png') }}" class="w-15 h-15" alt="">
                  <div class="">
                    <h2 class=" lg:text-2xl ml-8 font-bold" style="font-family: 'logoFont"><a href="{{ route('dashboards') }}">INFOLAHTADAM IX</a></h2>
                    <h4 class="text-center text-green-200 text-2xl lg:text-4xl" style="font-family : 'udyFont'"><a href="{{ route('dashboards') }}">Udayana</a></h4>
                  </div>
                  <div id="humberger" class="ml-auto lg:hidden"><button><i class="fa-solid fa-bars"></i></button></div>
              </div>
              <div class="lg:w-2/3 flex lg:justify-center lg:items-center">
                <ul id="nav-menu" class="  mt-8 lg:mt-0 hidden lg:flex">
                  
                  <li class="mx-8 border-b-2 lg:border-b-2 border-transparent font-semibold hover:text-orange-600 hover:border-orange-600 {{ Route::currentRouteName() == 'dashboards' ? "text-orange-600" : "" }}" ><a href="{{ route('dashboards') }}">Beranda</a></li>


                     {{-- untuk PC/Laptop --}}
                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'profiles.') ? "text-orange-600" : "" }}">Profile <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden lg:group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route("sejarah") }}" class="block px-4 py-2 hover:bg-gray-100">sejarah</a></li>
                      <li><a href="{{ route("kainfolahta") }}" class="block px-4 py-2 hover:bg-gray-100">Kainfolahta</a></li>
                      <li><a href="{{ route("kantor") }}" class="block px-4 py-2 hover:bg-gray-100">Kantor</a></li>
                      <li><a href="{{ route("profiles.vision") }}" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a></li>
                      <li><a href="{{ route("profiles.organitation") }}" class="block px-4 py-2 hover:bg-gray-100">Organitation</a></li>
                      <li><a href="{{ route("pejabat") }}" class="block px-4 py-2 hover:bg-gray-100">Pejabat kainfolahta</a></li>
                    </ul>
                  </li>
                  

                  {{-- untuk mobile --}}
                  <li id="humbergerProfile" class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'profiles.') ? "text-orange-600" : "" }}">Profile <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuProfile" class="lg:absolute hidden lg:group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[120px]">
                      <li><a href="{{ route("sejarah") }}" class="block px-4 py-2 hover:bg-gray-100">sejarah</a></li>
                        <li><a href="{{ route("kainfolahta") }}" class="block px-4 py-2 hover:bg-gray-100">Kainfolahta</a></li>
                      <li><a href="{{ route("kantor") }}" class="block px-4 py-2 hover:bg-gray-100">Kantor</a></li>
                      <li><a href="{{ route("profiles.vision") }}" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a></li>
                      <li><a href="{{ route("profiles.organitation") }}" class="block px-4 py-2 hover:bg-gray-100">Organitation</a></li>
                      <li><a href="{{ route("pejabat") }}" class="block px-4 py-2 hover:bg-gray-100">Pejabat kainfolahta</a></li>
                    </ul>
                  </li>

                  <li class="mx-8 border-b-2 lg:border-b-2 border-transparent font-semibold hover:text-orange-600 hover:border-orange-600 {{ Route::currentRouteName() == 'articles' ? "text-orange-600" : "" }}" ><a href="{{ route('articles') }}">Berita</a></li>

                  {{-- untuk layar pc/laptop --}}
                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'gallery.') ? "text-orange-600" : "" }}">Gallery <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[120px]">
                      <li><a href="{{ route('gallery.images') }}" class="block px-4 py-2 hover:bg-gray-100">Foto</a></li>
                      <li><a href="{{ route('gallery.videos') }}" class="block px-4 py-2 hover:bg-gray-100">Video</a></li>
                    </ul>
                  </li>

                  {{-- untuk mobile --}}
                  <li class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" id="humbergerMedia" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'gallery.') || Route::currentRouteName() == 'articles' ? "text-orange-600" : "" }}">Media & Publikasi <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuMedia" class="lg:absolute hidden group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[120px]">
                      <li><a href="{{ route('gallery.images') }}" class="block px-4 py-2 hover:bg-gray-100">Foto</a></li>
                      <li><a href="{{ route('gallery.videos') }}" class="block px-4 py-2 hover:bg-gray-100">Video</a></li>
                    </ul>
                  </li>

                  <li class="mx-8 border-b-2 lg:border-b-2 border-transparent font-semibold hover:text-orange-600 hover:border-orange-600 {{ Route::currentRouteName() == 'ppid.index' ? "text-orange-600" : "" }}" ><a href="{{ route('ppid.index') }}">PPID</a></li>

                  {{-- untuk layar pc/laptop --}}

                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'persitArticle.') ? "text-orange-600" : "" }}">Persit <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[120px]">
                      {{-- <li><a href="{{ route('persitArticle.article') }}" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a></li> --}}
                      <li><a href="{{ route('persitArticle.article') }}" class="block px-4 py-2 hover:bg-gray-100">Berita</a></li>
                      <li><a href="{{ route('persitArticle.images') }}" class="block px-4 py-2 hover:bg-gray-100">Gambar</a></li>
                    </ul>
                  </li>

                  {{-- untuk mobile --}}
                  <li id="humbergerPersit" class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'persitArticle.') ? "text-orange-600" : "" }}">Persit <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuPersit" class="lg:absolute hidden group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[120px]">
                      {{-- <li><a href="{{ route('persitArticle.article') }}" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a></li> --}}
                      <li><a href="{{ route('persitArticle.article') }}" class="block px-4 py-2 hover:bg-gray-100">Berita</a></li>
                      <li><a href="{{ route('persitArticle.images') }}" class="block px-4 py-2 hover:bg-gray-100">Gambar</a></li>
                    </ul>
                  </li>

                  <li class="mx-8 border-b-2 border-transparent font-semibold hover:text-orange-600 hover:border-orange-600 {{ Route::currentRouteName() == 'contacts' ? "text-orange-600" : "" }}"><a href="{{ route("contacts") }}">Kontak</a></li>
                  {{-- <li class="mx-8 border-b-2 border-transparent font-semibold hover:text-orange-600 hover:border-orange-600"><a href="{{ route("login") }}">Login</a></li> --}}

                  <li class="mx-8 border-b-2 lg:border-b-2 border-transparent font-semibold hover:text-orange-600 hover:border-orange-600 {{ Route::currentRouteName() == 'pengaduan' ? "text-orange-600" : "" }}" ><a href="{{ route('pengaduan') }}">Pengaduan</a></li>
        
                  
                </ul>
              </div>
            </div>

          </div>
        </nav>
      {{-- navbar end --}}

     @yield('main')

      {{-- <div class="absolute bottom-0 left-0">
        copyright
      </div> --}}
        
       <footer class="bg-black text-white text-center py-4">
         <div class="w-full mt-10">
    <div class="mx-20 lg:flex">
      <div class="w-full lg:w-1/4">
      <h1 class="text-lg lg:text-2xl font-bold">Infolahtadam IX/Udayana</h1>
      <p class="mt-8">Jl. Udayana No.1, Dauh Puri Kangin, Kec. Denpasar Barat, Kota Denpasar, Bali (80232)</p>
      <p class="font-bold">Email : infolahta9@gmail.com</p>
      </div>
      <div class="hidden mb-8 lg:block w-full lg:w-1/4 text-white">
      <p class="my-1">Tautan</p>
      <p class="my-1 mt-7 hover:text-amber-500"><a href="{{ route('dashboards') }}">Beranda</a></p>
      <p class="my-1 hover:text-amber-500"><a href="{{ route('articles') }}">Berita</a></p>
      <p class="my-1 hover:text-amber-500"><a href="{{ route('ppid.index') }}">PPID</a></p>
      <p class="my-1 hover:text-amber-500"><a href="{{ route('pengaduan') }}">Pengaduan</a></p>
      </div>
      <div class="hidden lg:block w-full lg:w-1/4 text-white">
      <p class="my-1 text-green-300">Link Terkait</p>
      <div class="my-1 mt-7  flex items-center justify-center">
        <a href="https://tniad.mil.id/" class="mx-2 hover:text-amber-500"><img src="https://tniad.mil.id/konten/unggahan/2019/06/logo-tni-ad-225x225.png" width="50" alt=""></a>
        <a href="https://www.tni-au.mil.id/" class="mx-2 hover:text-amber-500"><img src="https://www.tni-au.mil.id/assets/img/dispenau/logo_tni_au-512x512.png" width="50" alt=""></a>
        <a href="https://www.tnial.mil.id/" class="mx-2 hover:text-amber-500"><img src="https://www.tnial.mil.id/images/logo_tnial.png" width="40" alt=""></a>
        <a href="https://tniad.mil.id/berita/badan-pelaksana-pusat/dinas/dinas-informasi-dan-pengolahan-data/" class="mx-2 hover:text-amber-500"><img src="{{ asset('images/logo_infolahta.png') }}" width="60" alt=""></a>
      </div>
      </div>
      <div class="hidden lg:flex items-center justify-end lg:w-1/4">
        <div class="">
          <img src="{{ asset('images/logo_infolahta.png') }}" class="w-50 h-50" alt="">
          <P class="text-center font-bold" style="font-family : 'udyFont'">"Praja Raksaka"</P>
        </div>
    </div>
  </div>
          <a href="#" class="text-white p-2 rounded-lg text-sm m-2 text-right" ><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-white rounded-lg text-sm m-2"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="text-white p-2 rounded-lg text-sm m-2"><i class="fa-brands fa-whatsapp"></i></a>
                    <p>
                      &copy; 2025 INFOLAHTADAM IX. All rights reserved.
                    </p>
</footer>


  <!-- jQuery (diperlukan oleh Select2) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
// hamburger
const humberger = document.querySelector("#humberger");
const navMenu = document.querySelector("#nav-menu");

humberger.addEventListener("click", function () {
  humberger.classList.toggle("humberger-active");
  navMenu.classList.toggle("hidden");
});


// hamburger Media
const humbergerMedia = document.querySelector("#humbergerMedia");
const navMenuMedia = document.querySelector("#nav-menuMedia");

humbergerMedia.addEventListener("click", function () {
  humbergerMedia.classList.toggle("humbergerMedia-active");
  navMenuMedia.classList.toggle("hidden");
});



// hamburger Persit
const humbergerPersit = document.querySelector("#humbergerPersit");
const navMenuPersit = document.querySelector("#nav-menuPersit");

humbergerPersit.addEventListener("click", function () {
  humbergerPersit.classList.toggle("humbergerPersit-active");
  navMenuPersit.classList.toggle("hidden");
});


// hamburger Profile
const humbergerProfile = document.querySelector("#humbergerProfile");
const navMenuProfile = document.querySelector("#nav-menuProfile");

humbergerProfile.addEventListener("click", function () {
  humbergerProfile.classList.toggle("humbergerProfile-active");
  navMenuProfile.classList.toggle("hidden");
});

    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
    AOS.init();
  </script>

  {{-- <script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script> --}}
    </body>
</html>
