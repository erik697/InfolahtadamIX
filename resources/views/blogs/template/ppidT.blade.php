<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
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
                    <h2 class=" lg:text-2xl ml-8 font-bold" style="font-family: 'logoFont">INFOLAHTADAM IX</h2>
                    <h4 class="text-center text-green-200 text-2xl lg:text-4xl" style="font-family : 'udyFont'">Udayana</h4>
                  </div>
                  <div id="humberger" class="ml-auto lg:hidden"><button><i class="fa-solid fa-bars"></i></button></div>
              </div>
              <div class="lg:w-2/3 flex lg:justify-center lg:items-center">
                <ul id="nav-menu" class="  mt-8 lg:mt-0 hidden lg:flex">
                  
                     {{-- untuk PC/Laptop --}}
                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'profiles.') ? "text-orange-600 pointer-events-none" : "" }}">Tentang Kami <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden lg:group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route("ppid.index") }}" class="block px-4 py-2 hover:bg-gray-100">Maklumat</a></li>
                      <li><a href="{{ route("ppid.visiM") }}" class="block px-4 py-2 hover:bg-gray-100">Moto, Visi dan Misi</a></li>
                      <li><a href="{{ route("ppid.struktur") }}" class="block px-4 py-2 hover:bg-gray-100">Struktur</a></li>
                      <li><a href="{{ route("ppid.hak-kewajiban") }}" class="block px-4 py-2 hover:bg-gray-100">Hak dan Kewajiban</a></li>
                      <li><a href="{{ route("ppid.sangketa-informasi") }}" class="block px-4 py-2 hover:bg-gray-100">Sengketa Informasi</a></li>
                      <li><a href="{{ route("ppid.simpul-layanan") }}" class="block px-4 py-2 hover:bg-gray-100">Simpul Layanan</a></li>
                    </ul>
                  </li>
                  

                  {{-- untuk mobile --}}
                  <li id="humbergerProfile" class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'profiles.') ? "text-orange-600 pointer-events-none" : "" }}">Tentang Kami <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuProfile" class="lg:absolute hidden lg:group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route("ppid.index") }}" class="block px-4 py-2 hover:bg-gray-100">Maklumat</a></li>
                      <li><a href="{{ route("ppid.visiM") }}" class="block px-4 py-2 hover:bg-gray-100">Moto, Visi dan Misi</a></li>
                      <li><a href="{{ route("ppid.struktur") }}" class="block px-4 py-2 hover:bg-gray-100">Struktur</a></li>
                      <li><a href="{{ route("ppid.hak-kewajiban") }}" class="block px-4 py-2 hover:bg-gray-100">Hak dan Kewajiban</a></li>
                      <li><a href="{{ route("ppid.sangketa-informasi") }}" class="block px-4 py-2 hover:bg-gray-100">Sengketa Informasi</a></li>
                      <li><a href="{{ route("ppid.simpul-layanan") }}" class="block px-4 py-2 hover:bg-gray-100">Simpul Layanan</a></li>
                    </ul>
                  </li>

                  {{-- untuk layar pc/laptop --}}
                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'gallery.') ? "text-orange-600 pointer-events-none" : "" }}">Info Publik <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route('ppid.informasi-berkala') }}" class="block px-4 py-2 hover:bg-gray-100">Informasi Berkala</a></li>
                      <li><a href="{{ route('ppid.informasi-sertamerta') }}" class="block px-4 py-2 hover:bg-gray-100">Informasi Serta Merta</a></li>
                      <li><a href="{{ route('ppid.informasi-setiaphari') }}" class="block px-4 py-2 hover:bg-gray-100">Informasi Setiap Saat</a></li>
                    </ul>
                  </li>

                  {{-- untuk mobile --}}
                  <li class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" id="humbergerMedia" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'gallery.') || Route::currentRouteName() == 'articles' ? "text-orange-600 pointer-events-none" : "" }}">Info Publik <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuMedia" class="lg:absolute hidden group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[180px]">
                       <li><a href="{{ route('ppid.informasi-berkala') }}" class="block px-4 py-2 hover:bg-gray-100">Informasi Berkala</a></li>
                      <li><a href="{{ route('ppid.informasi-sertamerta') }}" class="block px-4 py-2 hover:bg-gray-100">Informasi Serta Merta</a></li>
                      <li><a href="{{ route('ppid.informasi-setiaphari') }}" class="block px-4 py-2 hover:bg-gray-100">Informasi Setiap Saat</a></li>
                    </ul>
                  </li>

                  {{-- untuk layar pc/laptop --}}

                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'persitArticle.') ? "text-orange-600 pointer-events-none" : "" }}">Standar Pelayanan <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route('ppid.alur-proses') }}" class="block px-4 py-2 hover:bg-gray-100">Alur Proses</a></li>
                      <li><a href="{{ route('ppid.sop-pelayanan') }}" class="block px-4 py-2 hover:bg-gray-100">SOP Pelayanan</a></li>
                      <li><a href="{{ route('ppid.operasional-pelayanan') }}" class="block px-4 py-2 hover:bg-gray-100">Operasional Pelayanan</a></li>
                    </ul>
                  </li>

                  {{-- untuk mobile --}}
                  <li id="humbergerPersit" class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'persitArticle.') ? "text-orange-600 pointer-events-none" : "" }}">Standar Pelayanan <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuPersit" class="lg:absolute hidden group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route('ppid.alur-proses') }}" class="block px-4 py-2 hover:bg-gray-100">Alur Proses</a></li>
                      <li><a href="{{ route('ppid.sop-pelayanan') }}" class="block px-4 py-2 hover:bg-gray-100">SOP Pelayanan</a></li>
                      <li><a href="{{ route('ppid.operasional-pelayanan') }}" class="block px-4 py-2 hover:bg-gray-100">Operasional Pelayanan</a></li>
                    </ul>
                  </li>

                  {{-- untuk layar pc/laptop --}}

                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'persitArticle.') ? "text-orange-600 pointer-events-none" : "" }}">Permohonan Informasi <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route('ppid.form-informasi') }}" class="block px-4 py-2 hover:bg-gray-100">Form Informasi</a></li>
                      <li><a href="{{ route('ppid.klaim-keberatan') }}" class="block px-4 py-2 hover:bg-gray-100">Klaim Keberatan</a></li>
                      <li><a href="{{ route('ppid.biaya-salinan') }}" class="block px-4 py-2 hover:bg-gray-100">Biaya Salinan</a></li>
                    </ul>
                  </li>
                  
                  {{-- untuk mobile --}}
                  <li class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" id="humbergerPublic" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'gallery.') || Route::currentRouteName() == 'articles' ? "text-orange-600 pointer-events-none" : "" }}">Info Publik <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuPublic" class="lg:absolute hidden group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[180px]">
                       <li><a href="{{ route('ppid.form-informasi') }}" class="block px-4 py-2 hover:bg-gray-100">Form Informasi</a></li>
                      <li><a href="{{ route('ppid.klaim-keberatan') }}" class="block px-4 py-2 hover:bg-gray-100">Klaim Keberatan</a></li>
                      <li><a href="{{ route('ppid.biaya-salinan') }}" class="block px-4 py-2 hover:bg-gray-100">Biaya Salinan</a></li>
                    </ul>
                  </li>

                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'persitArticle.') ? "text-orange-600 pointer-events-none" : "" }}">Payung Hukum <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route('ppid.dasar-hukum') }}" class="block px-4 py-2 hover:bg-gray-100">Dasar Hukum</a></li>
                    </ul>
                  </li>

                  {{-- untuk mobile --}}
                  <li class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" id="humbergerHukum" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'gallery.') || Route::currentRouteName() == 'articles' ? "text-orange-600 pointer-events-none" : "" }}">Payung Hukum <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuHukum" class="lg:absolute hidden group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[180px]">
                       <li><a href="{{ route('ppid.dasar-hukum') }}" class="block px-4 py-2 hover:bg-gray-100">Dasar Hukum</a></li>
                    </ul>
                  </li>
        
                  
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
      <footer class="bg-gray-800 text-white text-center py-4">
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

// hamburger Hukum
const humbergerHukum = document.querySelector("#humbergerHukum");
const navMenuHukum = document.querySelector("#nav-menuHukum");

humbergerHukum.addEventListener("click", function () {
  humbergerHukum.classList.toggle("humbergerHukum-active");
  navMenuHukum.classList.toggle("hidden");
});

    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

// hamburger Hukum
const humbergerPublic = document.querySelector("#humbergerPublic");
const navMenuPublic = document.querySelector("#nav-menuPublic");

humbergerPublic.addEventListener("click", function () {
  humbergerPublic.classList.toggle("humbergerPublic-active");
  navMenuPublic.classList.toggle("hidden");
});

    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
    AOS.init();
  </script>
    </body>
</html>
