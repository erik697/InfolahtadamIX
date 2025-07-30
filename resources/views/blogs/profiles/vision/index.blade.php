@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full py-20">
    <div class="mx-4 lg:mx-32">
        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 mb-10 text-center uppercase">
                Visi & Misi
            </div>
        </div>
        <div class="w-full lg:flex">
              <div class="p-4 lg:p-12 border border-slate-200 shadow-2xl rounded-2xl  backdrop-blur-xl">
                    <h3 class="text-xl lg:text-3xl text-green-400 font-bold text-center"><i class="fa-solid fa-eye"></i> VISI </h3>
                    <ul class="ml-8">
                        <li class="my-4 text-lg lg:text-xl text-justify">Infolahta Angkatan Darat yang solid, profesional, tangguh, modern, berwawasan kebangsaan dan dicintai rakyat serta mampu menyajikan informasi secara cepat, tepat dan akurat</li>
                    </ul>
                    <h3 class="text-xl lg:text-3xl text-green-400 font-bold text-center"><i class="fa-regular fa-clipboard"></i> MISI </h3>
                     <ul class="ml-8">
                        <li class="my-4 text-md lg:text-xl text-justify">1. Mewujudkan Sistem Informasi Angkatan Darat berbasis teknologi secara terpadu.</li>
                        <li class="my-4 text-md lg:text-xl text-justify">2. Meningkatkan kualitas sumber daya manusia yang profesional sesuai perkembangan ilmu pengetahuan dan teknologi.</li>
                        <li class="my-4 text-md lg:text-xl text-justify">3. Mewujudkan organisasi infolahta angkatan darat yang mampu menjawab tuntutan tugas.</li>
                        <li class="my-4 text-md lg:text-xl text-justify">4. Mewujudkan kesiapan materiil sistem informasi sesuai dengan kebutuhan dan perkembangan teknologi informasi.</li>
                    </ul>
                </div>
          
        </div>

                   {{-- berita start --}}
      <div class="w-full lg:mt-[-100px]">
        <div class="mx-4 my-24 lg:mx-0 lg:my-32">
            
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