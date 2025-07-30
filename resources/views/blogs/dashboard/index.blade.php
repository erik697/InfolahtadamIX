<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>infolahtadam ix</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mycss/styles.css') }}">

                  <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('images/Lambang_Kodam_Udayana.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
    </head>
    <body>
            {{-- navbar start --}}
        <nav class="fixed top-0 left-0 w-full shadow-2xl bg-black/80  backdrop-blur-lg text-white z-50">
          <div class="px-5 py-3">
            
            <div class="lg:flex lg:w-full">
              <div class="lg:w-1/4  flex lg:justify-center items-center">
                <div class="border-r-2 pr-3">
<a href="{{ route('dashboards') }}">
                  <img src="{{ asset('images/Lambang_Kodam_Udayana.png') }}" class="w-10 h-10 " alt="">
                  </a>
                </div>
                  <div class="">
                    <h2 class=" lg:text-lg ml-2 leading-none font-bold"><a href="{{ route('dashboards') }}">INFOLAHTADAM <br>IX/UDAYANA</a></h2>
                    <h4 class="ml-2 lg:text-lg font-bold" ><a href="{{ route('dashboards') }}"></a></h4>
                  </div>
                  <div id="humberger" class="ml-auto lg:hidden"><button><i class="fa-solid fa-bars"></i></button></div>
              </div>
              <div class="lg:w-3/4 flex lg:justify-center lg:items-center ">
                <ul id="nav-menu" class="  mt-8 lg:mt-0 hidden lg:flex">
                  
                  <li class="mx-8 border-b-2 lg:border-b-2 border-transparent font-semibold hover:text-orange-600 hover:border-orange-600 {{ Route::currentRouteName() == 'dashboards' ? "text-orange-600" : "" }}" ><a href="{{ route('dashboards') }}">Beranda</a></li>


                     {{-- untuk PC/Laptop --}}
                  <li class="relative hidden lg:block group mx-3 lg:border-b-2 border-transparent lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'profiles.') ? "text-orange-600" : "" }}">Profile <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul class="lg:absolute hidden lg:group-hover:block lg:bg-white text-gray-800 rounded lg:shadow-lg min-w-[180px]">
                      <li><a href="{{ route("sejarah") }}" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a></li>
                      <li><a href="{{ route("kainfolahta") }}" class="block px-4 py-2 hover:bg-gray-100">Kainfolahta</a></li>
                      <li><a href="{{ route("profiles.vision") }}" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a></li>
                      <li><a href="{{ route("profiles.organitation") }}" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a></li>
                      <li><a href="{{ route("pejabat") }}" class="block px-4 py-2 hover:bg-gray-100">Pejabat Kainfolahta</a></li>
                    </ul>
                  </li>
                  

                  {{-- untuk mobile --}}
                  <li id="humbergerProfile" class="relative lg:hidden mx-8 lg:border-b-2 lg:border-0 font-semibold">
                    <a href="#" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'profiles.') ? "text-orange-600" : "" }}">Profile <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
                    <ul id="nav-menuProfile" class="lg:absolute hidden lg:group-hover:block lg:bg-white text-white rounded lg:shadow-lg min-w-[120px]">
                      <li><a href="{{ route("sejarah") }}" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a></li>
                        <li><a href="{{ route("kainfolahta") }}" class="block px-4 py-2 hover:bg-gray-100">Kainfolahta</a></li>
                      <li><a href="{{ route("profiles.vision") }}" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a></li>
                      <li><a href="{{ route("profiles.organitation") }}" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a></li>
                      <li><a href="{{ route("pejabat") }}" class="block px-4 py-2 hover:bg-gray-100">Pejabat Kainfolahta</a></li>
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
                    <a href="#" id="humbergerMedia" class="hover:text-orange-600 {{ Str::startsWith(Route::currentRouteName(), 'gallery.') || Route::currentRouteName() == 'articles' ? "text-orange-600" : "" }}">Gallery <i class="fa-solid fa-caret-right rotate-0 lg:group-hover:rotate-90 transition-all"></i></a>
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
                  <img src="{{ asset('images/logo_inloahtanew2.png') }}" class="w-13 h-13 hidden lg:block" alt="">

              </div>
            </div>

          </div>
        </nav>
      {{-- navbar end --}}

      {{-- image/video start --}}
      <div class="lg:h-screen bg-black lg:pt-20">
      
<div class="w-full  h-dvh relative wave-container">
 <video 
    autoplay 
    muted 
    loop 
    class="top-0 left-0 w-full h-[110dvh] object-cover z-[-1] ">
    <source src="{{ asset('videos/playbackVideoUdy2.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="absolute w-dvw h-dvh top-0 object-cover right-0 flex justify-center items-center">
                  
                  <div class="pt-18 ">
      <div class="flex items-center justify-center"><img src="{{ asset('images/logo_inloahtanew2.png') }}" class="w-15 h-15 lg:w-40 lg:h-40" alt=""></div>
      
      <h1 class="text-center text-2xl lg:text-4xl text-shadow-lg font-bold text-white">INFORMASI DAN PENGOLAHAN DATA KODAM IX UDAYANA</h1>
      <h1 class="text-center text-2xl lg:text-4xl text-shadow-lg font-bold text-white">"PRAJA RAKSAKA"</h1>
      <h2 class="text-center text-2xl lg:text-5xl text-shadow-lg text-white" style="font-family : 'udyFont'; ">"Pelindung dan penjaga rakyat   "</h2>
    </div>

  </div>
</div>

 
        {{-- <img src="https://cdn.rri.co.id/berita/Bukittinggi/o/1716186125239-mountains-6531903_1280/iy78425lqqmlvt9.jpeg" class="w-full h-96 lg:h-full" alt="..."> --}}
      </div>
      {{-- image/video end --}}

      {{-- tentang start --}}
        <div class="my-24 lg:mx-32 lg:mt-40">
        
        <div class=" text-white my-4">
            <div class="px-4 bg-green-800  py-2 text-center uppercase">
                TENTANG INFOLAHTADAM IX/UDAYANA
            </div>
        </div>
        
        <h3 class="text-center my-6 font-bold text-lg lg:text-2xl">SELAMAT DATANG DI INFOLAHTADAM IX UDAYANA</h3>
        <div class="lg:mx-10 lg:flex">
        
        <div class="w-full lg:w-1/3">
        <div class="w-full flex justify-center items-center ">
            <img src="{{ asset('images/logo_inloahtanew2.png') }}" width="100" alt="" class="w-full lg:w-1/3 flipLogo">

        </div>
          <h4 class="text-center text-4xl lg:text-4xl text-shadow-lg" style="font-family : 'udyFont'">"Cepat, Tepat, Akurat&nbsp; "</h4>
         </div>
         
         <div class="w-full lg:w-2/3">
        
        <h4 class="text-lg mt-4 mx-3 lg:mx-10 leading-none text-justify">
        Infolahta Kodam IX/Udayana adalah satuan dibawah Kodam IX/Udayana, yang bertugas mendukung tugas pokok TNI AD dalam bidang informasi dan teknologi serta berperan penting dalam menyediakan informasi, data, dan dukungan teknologi yang dibutuhkan oleh Kodam IX/Udayana dalam menjalankan tugas-tugasnya, seperti pengamanan wilayah, latihan, dan kegiatan lainnya. Infolahta Kodam IX/Udayana terus berupaya meningkatkan kemampuan dan kinerjanya agar dapat memberikan dukungan yang optimal bagi Kodam IX/Udayana dalam menghadapi tantangan tugas yang semakin kompleks.
        </h4>
        </div>
        
        </div>
        </div>
    </div>
      {{-- tentang end --}}


      {{-- berita start --}}
      <div class="w-full lg:mt-[-100px]">
        <div class="mx-4 my-24 lg:mx-32 lg:my-32">
            
            <div class=" text-white my-4">
            <div class="px-4 bg-green-800  py-2 text-center uppercase">
                BERITA
            </div>
        </div>
        
        <h1 class="text-xl lg:text-4xl font-bold">Berita Umum</h1>
         <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">
  @foreach ($posts as $post ) 
    <a href="{{ route('articles.show', $post->id) }}" class="block border rounded-2xl border-slate-200 px-3 py-1 no-underline text-inherit hover:bg-gray-50">
      <div class="h-32 flex my-2 lg:justify-center">
        <div class="w-1/2 h-52 overflow-hidden">
          <img src="{{ asset('') }}/postImage/{{ $post->img_url }}" class="rounded-lg h-32 w-52 object-cover bg-green-500" width="100" height="100">
        </div>
        <div class="mx-3 w-1/2">
          <p class="text-right text-xs text-slate-300">
            <i class="fa-solid fa-calendar"></i> {{ $post->created_at }}
          </p>
          <p class="text-blue-500">{{ $post->title }}</p>
        </div>
      </div>
    </a>
  @endforeach
</div>
        </div>
      </div>
      {{-- berita end --}}

      {{-- berita persit start --}}
      <div class="w-full lg:mt-[-100px]">
        <div class="mx-4 my-24 lg:mx-32 lg:my-32">
        
        <div class=" text-white my-4">
            <div class="px-4 bg-green-800  py-2 text-center uppercase">
                PERSIT
            </div>
        </div>
        
        <h1 class="text-xl lg:text-4xl font-bold">Berita Persit</h1>
          <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">
            @foreach ($postsPersits as $postPersit ) 
                  <a href="{{ route('persitArticle.show', $postPersit->id) }}" class="block border rounded-2xl border-slate-200 px-3 py-1 no-underline text-inherit hover:bg-gray-50">
                <div class="h-32 flex my-2 lg:justify-center">
                <div class="w-1/2 h-52 overflow-hidden">
                             <img src="{{ asset('') }}/ImagePersitPost/{{ $postPersit->img_url }}" class="rounded-lg h-32 w-52 object-cover" width="100" height="100">
                         </div>
                <div class="mx-3 w-1/2">
                  <p class="text-right text-xs text-slate-300"><i class="fa-solid fa-calendar"></i> {{ $postPersit->created_at }}</p>
                  <p class="text-blue-500">{{ $postPersit->title }}</p>
                </div>
              </div>
              </a>
            @endforeach
          
          </div>
        </div>
      </div>

   
      {{-- berita persit end --}}


      {{-- <div class="absolute bottom-0 left-0">
        copyright
      </div> --}}
<div class="relative pb-[-5px]">
                <div class="custom-shape-divider-bottom-1753579382 scale-x-100 lg:scale-100">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
</div>
      <footer class="bg-black text-white text-center py-4">

         <div class="w-full mt-10">
    <div class="mx-20 lg:flex">
      <div class="w-full lg:w-1/4">
      <h1 class="text-lg lg:text-2xl font-bold">Infolahtadam IX/Udayana</h1>
      <p class="mt-8">Jl. Udayana No.1, Dauh Puri Kangin, Kec. Denpasar Barat, Kota Denpasar, Bali (80232)</p>
      <p class="font-bold">Email : infolahta9@gmail.com</p>
            <p class="text-center lg:text-lg lg:px-10 py-5 bg-yellow-500 my-2 text-black rounded-2xl font-bold "><i class="fa-solid fa-chart-simple"></i> Jumlah Visitor : {{getCountVisitor()->count}}</p>

      </div>
      <div class="hidden mb-8 lg:block w-full lg:w-1/4 text-white">
      <p class="my-1">Tautan</p>
      <p class="my-1 mt-7 hover:text-amber-500"><a href="{{ route('dashboards') }}">Beranda</a></p>
      <p class="my-1 hover:text-amber-500"><a href="{{ route('articles') }}">Berita</a></p>
      <p class="my-1 hover:text-amber-500"><a href="{{ route('ppid.index') }}">PPID</a></p>
      <p class="my-1 hover:text-amber-500"><a href="{{ route('pengaduan') }}">Pengaduan</a></p>
      </div>
      <div class="w-full lg:block lg:w-1/4 text-white">
      <p class="my-1">Link Terkait</p>
      <div class="my-1 mt-7  flex items-center justify-center">
        <a href="https://tniad.mil.id/" class="mx-2 hover:text-amber-500"><img src="https://tniad.mil.id/konten/unggahan/2019/06/logo-tni-ad-225x225.png" width="50" alt=""></a>
        <a href="https://www.tnial.mil.id/" class="mx-2 hover:text-amber-500"><img src="https://www.tnial.mil.id/images/logo_tnial.png" width="40" alt=""></a>
        <a href="https://www.tni-au.mil.id/" class="mx-2 hover:text-amber-500"><img src="https://www.tni-au.mil.id/assets/img/dispenau/logo_tni_au-512x512.png" width="50" alt=""></a>
        <a href="https://infolahta.tni-ad.mil.id/" class="mx-2 hover:text-amber-500"><img src="{{ asset('images/logo_inloahtanew2.png') }}" width="60" alt=""></a>
      </div>
      </div>
      <div class="hidden lg:flex items-center justify-end lg:w-1/4">
        <a class="" href="https://kodam-udayana.mil.id/">
          <img src="{{ asset('images/Lambang_Kodam_Udayana.png') }}" class="w-50 h-50" alt="">
          <P class="text-center text-2xl" style="font-family : 'udyFont'">"Praja Raksaka"</P>
        </a>
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

  <script src="{{ asset('/sw.js') }}"></script>
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
</script>
 {{-- <script src="{{ asset('pwa-install.js') }}"></script> --}}
    </body>
</html>

     