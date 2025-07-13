@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
      {{-- image/video start --}}
      <div class="lg:h-screen lg:pt-20">
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



  <video 
    autoplay 
    muted 
    loop 
    class="top-0 left-0 w-full h-dvh object-cover z-[-1]">
    <source src="{{ asset('videos/playbackVideo.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
        {{-- <img src="https://cdn.rri.co.id/berita/Bukittinggi/o/1716186125239-mountains-6531903_1280/iy78425lqqmlvt9.jpeg" class="w-full h-96 lg:h-full" alt="..."> --}}
      </div>
      {{-- image/video end --}}

      {{-- tentang start --}}
        <div class="my-24 lg:mx-32 lg:my-32">
        <h3 class="text-center my-6 font-bold text-lg lg:text-2xl">SELAMAT DATANG DI SITUS RESMI INFOLAHTADAM IX</h3>
        <div class="lg:flex flex-row-reverse">
            <img src="{{ asset('images/beranda.png') }}" width="100" alt="" class="w-full lg:w-1/2">
            <div class="w-full lg:w-1/2 my-10">
              <p class="mx-8">
                Infolahtadam adalah singkatan dari "Informasi Pengolahan Data Kodam". Sejarah Infolahtadam berkaitan erat dengan sejarah perkembangan organisasi TNI AD, khususnya dalam bidang pengumpulan, pengolahan, dan penyajian data. Awalnya, Infolahtadam merupakan bagian dari organisasi yang lebih besar, yaitu Dinas Pengumpulan dan Pengolahan Data TNI AD (Disinfolahtad) yang dibentuk berdasarkan keputusan Kasad. Seiring waktu, organisasi ini mengalami perkembangan dan perubahan nama, termasuk menjadi Infolahta Kodam. 
              </p>
            </div>
        </div>
        </div>
    </div>
      {{-- tentang end --}}


      {{-- berita start --}}
      <div class="w-full">
        <div class="mx-4 my-24 lg:mx-32 lg:my-32">
        <h1 class="text-xl lg:text-4xl font-bold">Berita Umum</h1>
          <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-3">
            @foreach ($posts as $post ) 
              <div class="h-32 flex my-6 flex-row lg:justify-center">
                <div class="w-full h-52 overflow-hidden">
                             <img src="{{ asset('') }}/postImage/{{ $post->img_url }}" class="rounded-lg h-32 w-52 object-cover bg-green-500" width="100" height="100">
                         </div>
                <div class="mx-3">
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
        <h1 class="text-xl lg:text-4xl font-bold">Berita Persit</h1>
          <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-3">
            @foreach ($postsPersits as $postPersit ) 
              <div class="h-32 flex my-6 flex-row lg:justify-center">
                <div class="w-full h-52 overflow-hidden">
                             <img src="{{ asset('') }}/ImagePersitPost/{{ $postPersit->img_url }}" class="rounded-lg h-32 w-52 object-cover" width="100" height="100">
                         </div>
                <div class="mx-3">
                  <p class="text-right text-xs text-slate-300"><i class="fa-solid fa-calendar"></i> {{ $postPersit->created_at }}</p>
                  <a href="{{ route('persitArticle.show', $postPersit->id) }}" class="text-blue-500">{{ $postPersit->title }}</a>
                </div>
              </div>
            @endforeach
          
          </div>
        </div>
      </div>
   
      {{-- berita persit end --}}
