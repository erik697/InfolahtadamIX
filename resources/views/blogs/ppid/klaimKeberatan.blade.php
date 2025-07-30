@extends('blogs.template.ppidT')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-20">
    <div class="mx-4 lg:mx-32">

<div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Klaim Keberatan
            </div>
        </div>
      {{-- tentang start --}}
        <div class="my-24 lg:mx-32 lg:my-32">
        <h3 class="text-center my-6 font-bold text-lg lg:text-2xl">Klaim Keberatan</h3>
            <div class="w-full my-10">
                <div class="mx-8 text-justify lg:text-lg">
                    <p>Untuk mengajukan klaim keberatan, pemohon diharapkan untuk melengkapi formulir yang telah disediakan dengan detail mengenai alasan keberatan, nomor permohonan informasi sebelumnya, serta keterangan tambahan yang diperlukan. Proses ini bertujuan untuk menjaga hak publik dalam memperoleh informasi yang transparan dan akuntabel.</p>
                     <iframe src="{{ asset('fileStatic/FORMULIR_KEBERATAN.pdf') }}" width="600" height="400"></iframe>
                    
                </div>

            </div>
        </div>
    </div>
      {{-- tentang end --}}


    </div>
</div>
