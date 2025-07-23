@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-32">
    <div class="mx-4 lg:mx-32">
        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Gambar
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 my-14 lg:my-14">

            @foreach ( $galleryImages as $galleryImage )
           
                <div class="w-full">
                    <div class="p-4 border rounded-lg border-slate-200 shadow">
                        <div class="px-10 h-52 mb-5 lg:h-56 overflow-hidden">
                            <img class="rounded-lg object-fill lg:h-56 w-full" class="w-full h-52 lg:h-56" src="{{ asset('') }}/postImage/{{ $galleryImage->url }}">
                        </div>
                         @if ($galleryImage->post_id)
                            <a href="{{ route('articles.show',$galleryImage->post_id) }}" class="text-xl text-blue-600">{{ $galleryImage->title }}</a>
                         @else
                            <p class="text-xl">{{ $galleryImage->title }}</p>
                         @endif
                            <p class="text-sm mt-2">{{ $galleryImage->description }}</p>
                    </div>

            </div>
            @endforeach
            
   
        </div>

<div class="flex justify-between mb-32">
            {{ $galleryImages->links() }}
        </div>
    </div>
</div>