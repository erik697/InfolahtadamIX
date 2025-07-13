@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-32">
    <div class="mx-4 lg:mx-32">

          <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2">
                Contact 
            </div>
        </div>
@if ($message = Session::get('success'))
	  <div class="w-full bg-green-700 text-white">
		  <strong class="px-4 py-2">{{ $message }}</strong>
      </div>
	@endif
        <div class="lg:flex w-full">
            <div class="w-full lg:w-1/2">
            <div class="p-10">
                <div class="p-10 border rounded-2xl border-slate-300 mb-10">
                    <h3 class="text-2xl font-bold mb-5">Alamat</h3>
                    <p class="text-lg">Jl. Udayana No.1, Dauh Puri Kangin, Kec. Denpasar Barat, Kota Denpasar, Bali (80232)</p>
                </div>
                <div class="p-10 border rounded-2xl border-slate-300">
                    <h3 class="text-2xl font-bold mb-5">Email</h3>
                    <p class="text-lg">infolahta9@gmail.com</p>
                </div>
            </div>
            </div>
            <div class="w-full lg:w-1/2">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31552.63911536943!2d115.19059765722089!3d-8.68395299729909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23bb28ecb97a9%3A0xdcbc5c1d9c580562!2sUdayana!5e0!3m2!1sen!2sid!4v1752379851939!5m2!1sen!2sid" width="600" height="450" class="w-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="w-full lg:flex flex-row mt-14 mb-32">
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('images/contact.png') }}" class="w-full" alt="">
            </div>
            <div class="w-full lg:w-1/2">
                <div class="p-12 border shadow-2xl rounded-2xl">
                    <h1 class="text-2xl font-bold text-center border-b-4">Kritik dan Saran</h1>
                    <form action="{{ route('feedbackCustomer') }}" method="POST">
                        @csrf
                        <div class="my-5">
                            <label for="">nama <span class="text-red-500">*</span></label>
                            <input name="name" class="mt-4 border p-3 rounded-lg focus:outline-0 w-full focus:border-blue-500" placeholder="tulis disini" type="text" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="my-5">
                            <label for="">Email <span class="text-red-500">*</span></label>
                            <input name="email" class="mt-4 border p-3 rounded-lg focus:outline-0 w-full focus:border-blue-500" placeholder="tulis disini" type="email" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="my-5">
                            <label for="">Pesan <span class="text-red-500">*</span></label>
                            <textarea name="message" class="mt-4 border p-3 rounded-lg focus:outline-0 w-full focus:border-blue-500" placeholder="tulis disini" name="" id="" cols="30" rows="10" required></textarea>
                            @error('message')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                        <div class="flex justify-end">
                            <button class="px-8 py-3 rounded-2xl bg-blue-400 text-white cursor-pointer "><i class="fa-solid fa-paper-plane"></i> Kirim</button>
                        </div>
                    </form>
                </div>
                
            </div>

            
           
        </div>
    </div>
</div>