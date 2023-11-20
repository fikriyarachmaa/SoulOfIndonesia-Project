<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-tl from-green-pastel to-green-light" >
@include('components.header')
<div style="display: flex; justify-content: center; align-items: center; margin-top: 20vh; margin-bottom: 8 vh;">
    <img src="\img\logoSOI.png" alt="" width="200" height="200" >
</div>

<div class="flex justify-center items-center mt-4 ">
<form class="bg-white p-10 my-12 rounded-lg shadow-lg w-" style="position: relative;">

<h1 class="text-green-900 font-bold text-2xl mb-1 text-center">Mari Bergabung Menjadi Penjual</h1>

        <!-- Name -->
    <div>
        <x-input-label class="text-gray-800 font-semibold block my-3 text-md" for="name" :value="__('Nama Pemilik Usaha :')" />
            <x-text-input id="name" class="w-full bg-gray-100 px-4 py-2 rounded-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="outline: 1px solid green;" type="text" name="username" id="username" placeholder="Tulis Disini..."/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="usaha">Nama Usaha :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="text" name="usaha" id="usaha" placeholder="Tulis Disini..." />
    </div>
    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="kontak">Nomor Kontak :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="number" name="kontak" id="kontak" placeholder="Tulis Disini..." />
    </div>
    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="alamat">Alamat Bisnis :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="text" name="alamat" id="alamat" placeholder="Tulis Disini..." />
    </div>
    <div>

     <!-- Email Address -->
        <x-input-label class="text-gray-800 font-semibold block my-3 text-md" for="email" :value="__('Alamat Email :')"></x-input-label>
        <x-text-input id="email" class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Tulis Disini..." />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div>

        <!-- Password -->
    <div class="text-gray-800 block my-3 text-md">
            <x-input-label  for="password" :value="__('Password :')" />
            <x-text-input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" id="password" placeholder="Tulis Kata Sandi"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
<!-- Confirm Password -->
        <div class="text-gray-800  block my-3 text-md">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password :')" />

            <x-text-input id="password_confirmation" class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" 
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
   
    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="logo_bisnis">Foto Profil :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="file" name="logo_bisnis" id="logo_bisnis" accept="image/*" />
    </div>
      
            <button type="submit" class="w-full h-50 mt-6 bg-green-500 rounded-lg px-1 py-2 text-lg text-white tracking-wide font-bold font-sans hover:bg-green-300 hover:text-white mx-auto block text-center">
                {{ __('Daftar') }}
            </button>
            <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Sudah Terdqaftar?') }}
            </a></div>
</div>
</body>
</html>
