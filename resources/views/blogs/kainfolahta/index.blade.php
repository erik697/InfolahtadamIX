@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')

      {{-- tentang start --}}
        <div class="my-24 lg:mx-32 lg:my-32">
        <h3 class="text-center my-6 font-bold text-lg lg:text-2xl">Kolonel Inf Adi Sabarudin, S.Sos</h3>
        <div class="lg:flex flex-row-reverse mx-8 border border-slate-200 shadow-2xl rounded">
            <div class="w-full lg:w-1/3">
                <div class="m-8">
                    <img src="{{ asset('ka/1.png') }}" width="100" alt="" class="w-full" data-aos="flip-right">
                </div>
            </div>
            <div class="w-full lg:w-2/3 my-10">
              <p class="mx-8 text-justify lg:text-lg">
               Kainfolahtadam IX, Kolonel Inf Adi Sabarudin, S.Sos lahir pada 7 November 1975 dan merupakan lulusan Akademi Militer (Akmil) tahun 1999.
              </p>
              <ul class="list-disc ml-10 mt-10 px-5" data-aos="fade-right">
                    <li>
                        
                        PAMA PUSSENIF
                    </li>
                    <li>
                    
                        PAMA KODAM I/BB
                    </li>
                    <li>
                    DANTON III/B YONIF 111/KB REM 011/LW DAM ISKANDAR MUDA
                    </li>
                    <li>
                    DANTON III/A YONIF 111/KB REM 011/LW DAM ISKANDAR MUDA
                    </li>
                    <li>
                    DANTON II/A YONIF 111/KB REM 011/LW DAM ISKANDAR MUDA
                    </li>
                    <li>
                    	DANTON I/A YONIF 111/KB REM 011/LW DAM ISKANDAR MUDA
                    </li>
                    <li>
                    DANKIMA YONIF 111/KB REM 011/LW DAM ISKANDAR MUDA
                    </li>
                    <li>
                    PASI-1/LIDIK YONIF 111/KB REM 011/LW DAM ISKANDAR MUDA
                    </li>
                    <li>
                    PASI INTEL DIM 0111/BIREUEN REM 011/LILAWANGSA DAM/IM
                    </li>
                    <li>
                    GUMIL GOL VI DEPPENGSUSINTELNIK PUSDIKINTEL KODIKLAT
                    </li>
                    <li>
                    DANSATSISSARBAINTEL SATDIKBA PUSDIKINTEL KODIKLATAD
                    </li>
                    <li>
                    PABANDA NING SINTELDAM XII/TPR
                    </li>
                    <li>
                    KASI HARSIS SIHAR SISTEM INFOLAHTA SESKOAD
                    </li>
                    <li>
                    PAMEN SOSKOAD
                    </li>
                    <li>
                    	KASI INTEL REM 141/TP
                    </li>
                    <li>
                    	DANDIM 1421/PANGKEP REM 141/TP DAM XIV/HASANUDIN
                    </li>
                    <li>
                    	KASBRIGIF 11 BADIK SAKTI DAM XIV/HSN
                    </li>
                    <li>
                    DANDIM 1501/TERNATE REM 152/BAABULLAH DAM XVI/PTM
                    </li>
                    <li>
                    KASI INTEL KASREM 064/MY
                    </li>
                    <li>
                    	KAINFOLAHTADAM-IX/UDY
                    </li>
                    
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



