@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-20">
    <div class="mx-4 lg:mx-32">

<div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Sejarah 
            </div>
        </div>
      {{-- tentang start --}}
        <div class="my-10 lg:mx-16 lg:mb-32 lg:my-14  lg:px-10 py-15 border rounded-2xl border-slate-200 shadow-2xl">
          <div class="w-full flex justify-center items-center">
            <img src="{{ asset('images/logo_inloahtanew2.png') }}" width="100" height="100" class="w-25 h-25" alt="">

          </div>
        <h3 class="text-center my-6 font-bold text-lg lg:text-2xl">SEJARAH INFOLAHTADAM</h3>
        <div class="w-full">
            
              <p class="mx-8 text-justify lg:text-lg">
               Infolahtadam, atau Informasi dan Pengolahan Data Kodam, merupakan organisasi di tingkat Kodam yang bertugas mengumpulkan dan mengolah data. Sejarah Infolahtadam berkaitan erat dengan perkembangan organisasi pengumpul dan pengolah data di lingkungan TNI AD. Awalnya, embrio Infolahtadam adalah Paban V SUAD/RENLITBANG yang kemudian diresmikan menjadi Dinas Pengumpulan dan Pengolahan Data TNI AD (DISPULLAHTAD) pada tahun 1976. saat ini Dinas Informasi dan Pengolahan Data TNI AD (Disinfolahtad) Selanjutnya, organisasi ini berkembang di tingkat Kotama/Lakpus dengan nama Bapullahta Kotama/Lakpus, dan kemudian berubah menjadi Infolahta Kotama/Lakpus.
              </p>
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
  @foreach (getNews() as $post ) 
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

    </div>
</div>
