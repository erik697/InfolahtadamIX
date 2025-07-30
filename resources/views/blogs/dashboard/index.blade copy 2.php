@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
      {{-- image/video start --}}
      <div class="lg:h-screen bg-black lg:pt-20">
        {{-- <iframe
  src="https://www.youtube.com/embed/VIDEO_ID?autoplay=1&mute=1&controls=0&loop=1&playlist=KQ1ntJPGCsE"
  frameborder="0"
  allow="autoplay; encrypted-media; fullscreen"
  allowfullscreen="allowfullscreen"
  style="pointer-events: none;"
  class="w-full h-full "
></iframe> --}}

{{-- <iframe
                            src="https://www.youtube.com/embed/VIDEO_ID?rel=0&autoplay=1&mute=1&controls=0&loop=1&playlist=KQ1ntJPGCsE"
                            frameborder="0"
                            allow="autoplay; encrypted-media; fullscreen"
                            allow="fullscreen"
                            allowfullscreen="allowfullscreen"
                            class="w-full h-full "
                            style="pointer-events: none;"
                            ></iframe> --}}


<div class="w-full  h-dvh relative  shadow-2xl">
 <video 
    autoplay 
    muted 
    loop 
    class="top-0 left-0 w-full h-dvh object-cover z-[-1]">
    <source src="{{ asset('videos/playbackVideoUdy2.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="absolute w-dvw h-dvh top-0 bg-black/40 right-0 z-20 flex justify-center items-center">
                  
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
        <div class="my-24 lg:mx-32 lg:my-32">
        
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
      <div class="w-full">
        <div class="mx-4 my-24 lg:mx-32 lg:my-32">
            
            <div class=" text-white my-4">
            <div class="px-4 bg-green-800  py-2 text-center uppercase">
                BERITA
            </div>
        </div>
        
        <h1 class="text-xl lg:text-4xl font-bold">Berita Umum</h1>
          <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-3">
            @foreach ($posts as $post ) 
              <div class="h-32 flex my-6 lg:justify-center">
                <div class="w-1/2 h-52 overflow-hidden">
                             <img src="{{ asset('') }}/postImage/{{ $post->img_url }}" class="rounded-lg h-32 w-52 object-cover bg-green-500" width="100" height="100">
                         </div>
                <div class="mx-3 w-1/2">
                  <p class="text-right text-xs text-slate-300"><i class="fa-solid fa-calendar"></i> {{ $post->created_at }}</p>
                  <a href="{{ route('articles.show', $post->id) }}" class="text-blue-500">{{ $post->title }}</a>
                </div>
              </div>
            @endforeach
          
          </div>
        </div>
      </div>
      {{-- berita end --}}

      {{-- berita persit start --}}
      <div class="w-full">
        <div class="mx-4 my-24 lg:mx-32 lg:my-32">
        
        <div class=" text-white my-4">
            <div class="px-4 bg-green-800  py-2 text-center uppercase">
                PERSIT
            </div>
        </div>
        
        <h1 class="text-xl lg:text-4xl font-bold">Berita Persit</h1>
          <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-3">
            @foreach ($postsPersits as $postPersit ) 
              <div class="h-32 flex my-6 lg:justify-center">
                <div class="w-1/2 h-52 overflow-hidden">
                             <img src="{{ asset('') }}/ImagePersitPost/{{ $postPersit->img_url }}" class="rounded-lg h-32 w-52 object-cover" width="100" height="100">
                         </div>
                <div class="mx-3 w-1/2">
                  <p class="text-right text-xs text-slate-300"><i class="fa-solid fa-calendar"></i> {{ $postPersit->created_at }}</p>
                  <a href="{{ route('persitArticle.show', $postPersit->id) }}" class="text-blue-500">{{ $postPersit->title }}</a>
                </div>
              </div>
            @endforeach
          
          </div>
        </div>
      </div>

      <div class="w-full flex items-center justify-center">
        <p class="text-center text-2xl px-10 py-5 bg-yellow-500 my-20 rounded-2xl font-bold "><i class="fa-solid fa-chart-simple"></i> Jumlah Visitor : {{getCountVisitor()->count}}</p>
      </div>
   
      {{-- berita persit end --}}
