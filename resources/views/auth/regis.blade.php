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

    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="nama">Nama Pemilik Usaha :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="text" name="username" id="username" placeholder="Tulis Disini..." />
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
        <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Alamat Email :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="text" name="email" id="email" placeholder="Tulis Disini..." />
    </div>
    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="text" name="password" id="password" placeholder="Konfirmasi Kata Sandi" />
    </div>
    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="text" name="confirm" id="confirm" placeholder="confirm password" />
    </div>
    <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="logo_bisnis">Logo Bisnis :</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg" style="outline: 1px solid green;" type="file" name="logo_bisnis" id="logo_bisnis" accept="image/*" />
    </div>
    <button type="submit" class="w-full h-50 mt-6 bg-green-500 rounded-lg px-1 py-2 text-lg text-white tracking-wide font-bold font-sans hover:bg-green-300 hover:text-white mx-auto block" >Daftar</button>
</form>
</div>
</body>
</html>
