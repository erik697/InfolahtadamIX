@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-32">
    <div class="mx-4 lg:mx-32">

          <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2 text-center uppercase">
                Pengaduan 
            </div>
        </div>
@if ($message = Session::get('success'))
	  <div class="w-full bg-green-700 text-white">
		  <strong class="px-4 py-2">{{ $message }}</strong>
      </div>
	@endif

        <div class="w-full lg:flex flex-row mt-14 mb-32">
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('images/contact.png') }}" class="w-full" alt="">
            </div>
            <div class="w-full lg:w-1/2">
                <div class="p-12 border shadow-2xl rounded-2xl">
                    <h1 class="text-2xl font-bold text-center border-b-4">Kritik, Saran dan Pengaduan</h1>
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

                        <div class="form-group">
              <div class="captcha">
                <span> {!! captcha_img() !!} </span>
                <button type="button" class="py-2 text-white px-3 bg-red-500 rounded-2xl" id="reload">&#x21bb;</button>
              </div>
            </div>

            <div class="form-group mt-2">
                <input type="text" class="mt-4 border p-3 rounded-lg focus:outline-0 w-full focus:border-blue-500" name="captcha" placeholder="captcha">
                @error('captcha')
                  <label for="" class="text-danger">Captcha salah</label>
                  
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>

  $('#reload').click(function(){
    $.ajax({
      type:'GET',
      url:'reload-captcha',
      success:function(data){
        $(".captcha span").html(data.captcha)
      }
    })
  })
</script>