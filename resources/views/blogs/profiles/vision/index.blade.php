@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-32">
    <div class="mx-4 lg:mx-32">
        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 mb-10">
                Visi & Misi
            </div>
        </div>
        <div class="w-full lg:flex flex-row">
              <div class="w-full lg:w-1/3">
                 <img src="{{ asset('images/visi.png') }}" class="w-full" alt="">
            </div>
            <div class="w-full lg:w-2/3">
                <div class="p-4 lg:p-12 border shadow-2xl rounded-2xl mb-32">
                    <h3 class="text-xl lg:text-3xl text-green-400 font-bold"><i class="fa-solid fa-eye"></i> VISI </h3>
                    <ul class="ml-8">
                        <li class="my-4 text-lg lg:text-xl">Infolahta Angkatan Darat yang solid, profesional, tangguh, modern, berwawasan kebangsaan dan dicintai rakyat serta mampu menyajikan informasi secara cepat, tepat dan akurat</li>
                    </ul>
                    <h3 class="text-xl lg:text-3xl text-green-400 font-bold"><i class="fa-regular fa-clipboard"></i> MISI </h3>
                     <ul class="ml-8">
                        <li class="my-4 text-md lg:text-xl">1. Mewujudkan Sistem Informasi Angkatan Darat berbasis teknologi secara terpadu.</li>
                        <li class="my-4 text-md lg:text-xl">2. Meningkatkan kualitas sumber daya manusia yang profesional sesuai perkembangan ilmu pengetahuan dan teknologi.</li>
                        <li class="my-4 text-md lg:text-xl">3. Mewujudkan organisasi infolahta angkatan darat yang mampu menjawab tuntutan tugas.</li>
                        <li class="my-4 text-md lg:text-xl">4. Mewujudkan kesiapan materiil sistem informasi sesuai dengan kebutuhan dan perkembangan teknologi informasi.</li>
                    </ul>
                </div>
            </div>
          
        </div>
    </div>
</div>