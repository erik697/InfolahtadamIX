
    <!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Log in</title>


      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
  
<div class="min-h-dvh w-dvw flex items-center justify-center">
  <div class="w-full mx-5 lg:mx-5 lg:w-3/4 lg:flex border border-slate-200 rounded-lg shadow-2xl">
      <div class="w-full lg:w-1/2">
      <img src="{{ asset('images/ppid.jpeg') }}" class="w-full h-full lg:rounded-l-lg" alt="">
      </div>
      <div class="w-full lg:w-1/2">

        <div class="w-full flex items-center justify-center">
          <img src="{{ asset('images/logo_inloahtanew2.png') }}" class="w-20 h-20 pt-5" width="100" alt="Centered Image">
        </div>
      <h2 class="text-xl font-bold text-center pb-5">INFOLAHTADAM IX/UDY</h2>
      <div class="p-5 lg:p-10">
        <form action="{{ route('login.authenticate') }}" method="post">
             @csrf
              
              <div class="w-full">
                <label for="" class="font-semibold uppercase">Username</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border focus:outline-emerald-400 border-slate-200 w-full p-2" placeholder="Email" required>
                @error('email')
                          <label for="" class="text-red-500">{{ $message }}</label>
                          
                        @enderror
              </div>
              <div class="w-full mt-4">
                <label for="" class="font-semibold uppercase">Password</label>
                <input type="password" name="password" class="border focus:outline-emerald-400 border-slate-200 w-full p-2" placeholder="Password" required>
              </div>
  
              <div class="w-full mt-4">
                      <div class="captcha flex">
                        <span class="w-5/6 bg-slate-200"> {!! captcha_img() !!} </span>
                        <button type="button" class="bg-slate-300 reload w-1/6 cursor-pointer" id="reload">&#x21bb;</button>
                      </div>
                    </div>
  
                    <div class="w-full mt-2">
                        <input type="text" class="border focus:outline-emerald-400 border-slate-200 w-full p-2" name="captcha" placeholder="captcha">
                        @error('captcha')
                          <label for="" class="text-red-500">{{ $message }}</label>
                          
                        @enderror
                    </div>
  
                    <div class="w-full flex mt-7">
                      <div class=" w-1/2">
                        <label>
                          <input name="remember" value="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 cursor-pointer " type="checkbox"> Remember Me
                        </label>
                      </div>
                  <!-- /.col -->
                  <div class="w-1/2 flex items-end justify-end">
                    <button type="submit" class="bg-sky-500 text-white font-bold px-10 py-2 cursor-pointer">Sign In</button>
                  </div>
                    </div>
  
        </form>
      </div>
      </div>
  </div>
</div>

<!-- jQuery 3 -->
<script src="{{ asset('AdminTemplate/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
{{-- <script src="{{ asset('AdminTemplate/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}
<!-- iCheck -->
{{-- <script src="{{ asset('AdminTemplate/plugins/iCheck/icheck.min.js')}}"></script> --}}
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
    AOS.init();
  </script>
    </body>
</html>
</body>
</html>
