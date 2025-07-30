@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-20">
    <div class="mx-4 lg:mx-32">

        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Berita Persit
            </div>
        </div>

        <div class="lg:flex w-full">
            <div class="w-full lg:w-3/4">
                <div class="px-10">
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-24 ">
             @foreach ($postsPersits as $postPersit )    
                 <div class="w-full border rounded-lg border-slate-300"  data-aos="fade-up">
                     <div class="p-4">
                         <div class="w-full h-52 overflow-hidden">
                             <img src="{{ asset('') }}/ImagePersitPost/{{ $postPersit->img_url }}" class="rounded-lg h-48 w-96 object-cover" width="100" height="100">
                         </div>
                         <p class="text-right text-sm text-slate-400 my-4"><i class="fa-solid fa-calendar"></i> {{ $postPersit->created_at }}</p>
                         <p class="text-right text-sm text-slate-400 my-4"><i class="fa-solid fa-eye"></i> View {{ $postPersit->view }}</p>
                         <p class="text-xl">{{ $postPersit->title }}</p>
              
                         <div class="flex items-end justify-end">
                             <a href="{{ route('persitArticle.show',$postPersit->id) }}" class=" px-2 py-1 rounded-lg bg-slate-300 hover:bg-amber-500 text-white">read more</a>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <p class="px-4 py-2 bg-green-800 text-white font-bold rounded-xl">Berita Umum</p>
                @foreach ($postsPersitsHot as $item )  
                <a href="{{ route('persitArticle.show',$item->id) }}" data-aos="zoom-in-left">
                    <p class="py-2 border-b border-slate-300 hover:text-blue-500">
                        <i class="fa-solid fa-arrow-right"></i> {{ $item->title }}
                    </p>
                </a>  
                @endforeach

            </div>

        </div>
     

        <div class="flex justify-between mb-32">
            {{ $postsPersits->links() }}
        </div>
    </div>
</div>
