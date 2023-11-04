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
            <form class="bg-green-pastel rounded-md shadow-2xl p-5">
              <h1 class="text-green-dark font-bold text-2xl mb-1 text-center">Selamat Datang!!</h1>
              <p class="text-green-dark text-sm font-normal text-gray-600 mb-8 text-center">Silahkan Masuk</p>
              <div class="relative w-full mb-3">
              <label class=" text-green-dark text-medium font-bold mb-2" for="grid-password">Alamat Email : </label>
               </div>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl bg-white"> 
                <input id="email" class=" pl-2 w-full outline-none border-none" type="email" name="email" placeholder="Tulis Disini..." /> 
              </div>
              <div class="relative w-full mb-3">
              <label class=" text-green-dark text-medium font-bold  " for="grid-password">Kata Sandi : </label>
               </div>
              <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl bg-white">
                <input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password" placeholder="Tulis Disini..." />
                
              </div>
              <button type="submit" class="block w-full bg-cream mt-5 py-3 px-2 rounded-2xl hover:bg-yellow  hover:-translate-y-1 transition-all duration-500 text-green-dark font-semibold mb-2">Masuk</button>

              <div class="flex justify-between mt-4">
                <span class="text-green-dark text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Lupa Kata Sandi?</span>

                <a href="#" class="text-green-dark text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Belum Meliliki Akun</a>
              </div>
              
            </form>
            </div>
            
          </div>
      </div>
      
</section>
</body>
</html>