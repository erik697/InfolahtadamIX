@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-20">
    <div class="mx-2 lg:mx-32">
    
        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Stuktur Organisasi
            </div>
        </div>
        <img src="{{ asset('images/organitation.jpeg') }}" class="w-full h-96 mb-32" data-aos="fade-up" alt="">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 my-14 lg:my-14">

            @foreach ( $pejabats as $pejabat )
           
                <div class="w-full">
                    <div class="p-4 border rounded-lg border-slate-200 shadow" data-aos="flip-left">
                        <div class="px-10 mb-5 lg:h-56 overflow-hidden">
                            <img class="rounded-lg object-fill lg:h-56 w-full" class="w-full h-52 lg:h-56" src="{{ asset('') }}/Personel/{{ $pejabat->img_url }}">
                        </div>
                            <p class="text-xl text-center">{{ $pejabat->name }}</p>
                            <p class="text-md text-slate-500 text-center">{{ $pejabat->position->name }}</p>
                            {{-- <p class="text-sm text-slate-300 text-center">{{ $pejabat->period_start }} - {{ $pejabat->period_end }}</p> --}}
                    </div>

            </div>
            @endforeach
            
   
        </div>
    </div>
</div>