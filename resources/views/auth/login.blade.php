<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<section class="bg-cream">
 <!-- component -->
  
<div class="h-screen flex">
          <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
          justify-around items-center">
            <div class="  bg-black opacity-20 inset-0 z-0" >
                  </div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6 pt-16">
            <img src="\img\login.png" alt="" class="max-w-full"> 
              
            </div>
          </div>
          <div class="flex w-full lg:w-1/2 justify-center items-center bg-cream space-y-8 pt-12">
            <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-green-pastel rounded-md shadow-2xl p-5" method="POST" action="{{ route('login') }}">
            @csrf
              <h1 class="text-green-dark font-bold text-2xl mb-1 text-center">Selamat Datang!!</h1>
              <p class="text-green-dark text-sm font-normal text-gray-600 mb-8 text-center">Silahkan Masuk</p>
              <!-- Email -->
              <div class="relative w-full mb-3">
            <x-input-label class=" text-green-dark text-medium font-bold mb-2" for="email" :value="__('Alamat Email :')" />
            <x-text-input id="email" class="block mt-1 w-full pl-2 py-2 outline-none border-none" type="email" name="email" :value="old('email')" placeholder="Tulis Disini..."  required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

                <!-- Password -->
              <div class="mt-4 relative w-full mb-3">
              <x-input-label class=" text-green-dark text-medium font-bold" for="password" :value="__('Kata Sandi : ')" />

            <x-text-input id="password" class="block mt-1 w-full pl-2 py-2 outline-none border-none"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Tulis Disini..."/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

            
              <button type="submit" class="block w-full bg-cream mt-5 py-3 px-2 rounded-2xl hover:bg-yellow  hover:-translate-y-1 transition-all duration-500 text-green-dark font-semibold mb-2 text-center">{{ __('Masuk') }}</button>

              <div class="flex justify-between mt-4">
              @if (Route::has('password.request'))
                <a class="text-green-dark text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all" href="{{ route('password.request') }}"> {{ __('Lupa Kata Sandi?') }}</a>
                @endif
                <a href="/auth/regis" class="text-green-dark text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Belum Meliliki Akun</a>
              </div>
              
            </form>
            </div>
            
          </div>
      </div>
      
</section>
</body>
</html>

<!-- component -->
<div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
    <img src="/img/pengrajin.jpg" alt="profile-picture" />
  </div>
  <div class="p-6 text-center">
    <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      Penjual Batik
    </h4>
  </div>
  <div class="flex justify-center gap-7 p-6 pt-2">
    <a
      href="#facebook"
      class="block bg-gradient-to-tr from-blue-600 to-blue-400 bg-clip-text font-sans text-xl font-normal leading-relaxed text-transparent antialiased"
    >
      <i class="fab fa-facebook" aria-hidden="true"></i>
    </a>
    <a
      href="#twitter"
      class="block bg-gradient-to-tr from-light-blue-600 to-light-blue-400 bg-clip-text font-sans text-xl font-normal leading-relaxed text-transparent antialiased"
    >
      <i class="fab fa-twitter" aria-hidden="true"></i>
    </a>
    <a
      href="#instagram"
      class="block bg-gradient-to-tr from-purple-600 to-purple-400 bg-clip-text font-sans text-xl font-normal leading-relaxed text-transparent antialiased"
    >
      <i class="fab fa-instagram" aria-hidden="true"></i>
    </a>
  </div>
</div>
<div class="w-full pt-5 px-4 mb-8 mx-auto ">
    <div class="text-sm text-gray-700 py-1">
        Made with <a class="text-gray-700 font-semibold" href="https://www.material-tailwind.com/docs/html/card?ref=tailwindcomponents" target="_blank">Material Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
    </div>
</div>

<!-- stylesheet -->
<link
  rel="stylesheet"
  href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
/>

 <!-- Font Awesome Link -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
  crossorigin="anonymous"
/>