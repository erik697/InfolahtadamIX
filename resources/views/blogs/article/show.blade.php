@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-32">
    <div class="mx-4 lg:mx-32">

        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2  text-center uppercase">
                Berita > {{ $post->title }}
            </div>
        </div>

        <div class="lg:flex w-full pb-32">
            <div class="w-full lg:w-3/4">
                <div class="lg:px-10">
                    <h2 class="text-3xl font-semibold">{{ $post->title }}</h2>
                    <p class="text-slate-400 my-4 text-sm"><i class="fa-solid fa-eye"></i> View {{ $post->view + 1 }}</p>
                    <p class="text-left text-sm text-slate-400 ">ditulis oleh {{ $post->user->name }}</p>
                    <p class="text-right text-sm text-slate-400 my-4"><i class="fa-solid fa-calendar"></i> {{ $post->created_at }}</p>
                    <div class="flex justify-end">
                    <a href="#" class="text-white p-2 bg-blue-700 rounded-lg text-2xl m-2 text-right" ><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-white p-2 bg-blue-400 rounded-lg text-2xl m-2"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="text-white p-2 bg-green-500 rounded-lg text-2xl m-2"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                    <img src="{{ asset('') }}/postImage/{{ $post->img_url }}" class="h-80 w-full object-cover" width="100" height="100">
                    <p class="my-10"><?php echo $post->content ?> </p>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="px-10 py-5">
                    @foreach ($posts as $post )    
       
                      <div class="w-full border-b">
                            <div class="p-4">
                                <div class="w-full h-52 overflow-hidden">
                                    <img src="{{ asset('') }}/postImage/{{ $post->img_url }}" class="h-48 w-96 object-cover" width="100" height="100">
                                </div>
                                <p class="text-right text-sm text-slate-400 my-4"><i class="fa-solid fa-calendar"></i> {{ $post->created_at }}</p>
                                <p class="">{{ $post->title }}</p>
                                <p class="text-sm"><?php echo substr($post->content, 0, 50),"..." ?> </p>
                                <div class="flex items-end justify-end">
                                    <a href="{{ route('articles.show', $post->id) }}" class=" px-2 py-1 rounded-lg bg-slate-300 text-sm hover:bg-amber-500 text-white">read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
     
    </div>
</div>
