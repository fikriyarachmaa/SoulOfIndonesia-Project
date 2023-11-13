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
