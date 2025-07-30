@extends('blogs.template.ppidT')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-20">
    <div class="mx-4 lg:mx-32">

<div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Biaya Salinan
            </div>
        </div>
      {{-- tentang start --}}
        <div class="my-24 lg:mx-32 lg:my-32">
        <h3 class="text-center my-6 font-bold text-lg lg:text-2xl">Biaya Salinan</h3>
            <div class="w-full my-10">
                <div class="mx-8 text-justify lg:text-lg">
                    <p>Biaya salinan dalam layanan Pejabat Pengelola Informasi dan Dokumentasi (PPID) dikenakan untuk penggandaan atau penyalinan informasi publik yang diminta oleh pemohon. Biaya ini mencakup biaya cetak, fotokopi, atau penggandaan dalam bentuk elektronik seperti CD/DVD atau media penyimpanan lainnya, sesuai dengan ketentuan yang berlaku.</p>
                     <iframe src="{{ asset('fileStatic/FORM_BIAYA.pdf') }}" width="600" height="400"></iframe>
                    
                </div>

            </div>
        </div>
    </div>
      {{-- tentang end --}}


    </div>
</div>
