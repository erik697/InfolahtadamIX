@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full py-32" style="background-image: url({{ asset('images/visimisi.jpg') }})">
    <div class="mx-4 lg:mx-32">
        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 mb-10 text-center uppercase">
                Visi & Misi
            </div>
        </div>
        <div class="w-full lg:flex">
               <div class="w-full lg:w-1/2">
                <div class="p-4">
                    <img src="{{ asset('images/visinew.png') }}" class="w-full" alt="">
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="p-2 lg:p-12 border shadow-2xl rounded-2xl text-white backdrop-blur-xl">
                    <h3 class="text-xl lg:text-3xl text-green-200 font-bold text-center"><i class="fa-solid fa-eye"></i> VISI </h3>
                    <ul class="ml-8">
                        <li class="my-4 text-lg lg:text-xl text-justify">Infolahta Angkatan Darat yang solid, profesional, tangguh, modern, berwawasan kebangsaan dan dicintai rakyat serta mampu menyajikan informasi secara cepat, tepat dan akurat</li>
                    </ul>
                    <h3 class="text-xl lg:text-3xl text-green-200 font-bold text-center"><i class="fa-regular fa-clipboard"></i> MISI </h3>
                     <ul class="ml-8">
                        <li class="my-4 text-md lg:text-xl text-justify">1. Mewujudkan Sistem Informasi Angkatan Darat berbasis teknologi secara terpadu.</li>
                        <li class="my-4 text-md lg:text-xl text-justify">2. Meningkatkan kualitas sumber daya manusia yang profesional sesuai perkembangan ilmu pengetahuan dan teknologi.</li>
                        <li class="my-4 text-md lg:text-xl text-justify">3. Mewujudkan organisasi infolahta angkatan darat yang mampu menjawab tuntutan tugas.</li>
                        <li class="my-4 text-md lg:text-xl text-justify">4. Mewujudkan kesiapan materiil sistem informasi sesuai dengan kebutuhan dan perkembangan teknologi informasi.</li>
                    </ul>
                </div>
            </div>
          
        </div>
    </div>
</div>