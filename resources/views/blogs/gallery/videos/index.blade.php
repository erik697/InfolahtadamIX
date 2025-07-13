@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-32">
    <div class="mx-4 lg:mx-32">
        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2">
                Video
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 my-14 lg:my-14">

            @foreach ($galleryVideos as $galleryVideo)     
                <div class="w-full">
                    <div class="w-full">
                        <div class="p-4 border rounded-lg border-slate-200 shadow">
                            <div class="w-full h-52 mb-5 lg:h-56 overflow-hidden">
        
                                              <video class="w-full h-full" controls>
                                            <source src="{{ asset('') }}/Gallery/Videos/{{ $galleryVideo->url }}" type="video/mp4">
                                            {{-- Your browser does not support the video tag. --}}
                                            </video>
                            </div>
                            
                            <p class="text-xl">{{ $galleryVideo->title }}</p>
                        </div>
                    </div>

                </div>
            @endforeach

   
        </div>

        <div class="flex justify-between mb-32">
            {{ $galleryVideos->links() }}
        </div>
    </div>
</div>