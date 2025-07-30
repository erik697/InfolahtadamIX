@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-28">
    <div class="mx-4 lg:mx-32">

      <form method="GET" action="{{ route('articles') }}">
            <div class="flex w-full">
                <div class="w-1/2">
                    <div class="mx-4">
                        <label for="">Kategori</label>
                        <select class="js-example-basic-multiple w-full" name="categories[]" multiple="multiple" data-placeholder="Pilih Kategori">
                          @foreach ($categories as $category)
                          <option value="{{ $category->id }}" @if(in_array($category->id,$selectedCategories))selected @endif >{{ $category->title }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="mx-4">
                        <label for="">Tags</label>
                        <select class="js-example-basic-multiple w-full" name="slugs[]" multiple="multiple" data-placeholder="Pilih Tags">
                          @foreach ($slugs as $slug)
                          <option value="{{ $slug->id }}" @if(in_array($slug->id,$selectedSlugs))selected @endif >{{ $slug->title }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>

            </div>
                            <div class="flex justify-end">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-2xl my-2 cursor-pointer">Filter</button>
                </div>
        </form>

        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Berita > 
            </div>
        </div>

        <div class="lg:flex w-full">
            <div class="w-full lg:w-3/4">
                <div class="px-10">
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-24 ">
             @foreach ($posts as $post )    
                 <div class="w-full border rounded-lg border-slate-300" data-aos="zoom-in-up">
                     <div class="p-4">
                         <div class="w-full h-52 overflow-hidden">
                             <img src="{{ asset('') }}/postImage/{{ $post->img_url }}" class="rounded-lg h-48 w-96 object-cover" width="100" height="100">
                         </div>
                         <p class="text-right text-sm text-slate-400 my-4"><i class="fa-solid fa-calendar"></i> {{ $post->created_at }}</p>
                         <p class="text-right text-sm text-slate-400 my-4"><i class="fa-solid fa-eye"></i> View {{ $post->view }}</p>
                         <p class="text-xl">{{ $post->title }}</p>
              
                         <div class="flex items-end justify-end">
                             <a href="{{ route('articles.show',$post->id) }}" class=" px-2 py-1 rounded-lg bg-slate-300 hover:bg-amber-500 text-white">read more</a>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4" data-aos="zoom-in-left">
                <p class="px-4 py-2 bg-green-800 text-white font-bold rounded-xl">Berita Umum</p>
                @foreach ($postsHot as $item )  
                <a href="{{ route('articles.show',$item->id) }}">
                    <p class="py-2 border-b border-slate-300 hover:text-blue-500">
                        <i class="fa-solid fa-arrow-right"></i> {{ $item->title }}
                    </p>
                </a>  
                @endforeach

            </div>

        </div>
     

        <div class="flex justify-between mb-32">
            {{ $posts->links() }}
        </div>
    </div>
</div>
