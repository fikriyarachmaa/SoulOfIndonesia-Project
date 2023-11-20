<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BatikShop</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-cream">
@include('components.header')

<section class="text-gray-600 body-font overflow-hidden pt-10">
  <div class="container px-5 py-24 mx-auto">
  @if(isset($produks) && isset($produks->judul))
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $produks->kategori }}</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $produks->nama }}</h1>
        <div class="flex mb-4">
          <a class="flex-grow text-green-medium border-b-2 border-green-medium py-2 text-lg px-1">Deskripsi</a>
        </div>
        <p class="leading-relaxed mb-4">{{ $produks->deskripsi }}</p>
        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Stok</span>
          <span class="ml-auto text-gray-900">{{ $produks->stok }}</span>
        </div>
        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Kota</span>
          <span class="ml-auto text-gray-900">{{ $produks->kota }}</span>
        </div>
        <div class="flex pt-8">
          <span class="title-font font-medium text-2xl text-gray-900">Rp {{ $produks->harga }}</span>
          <a href="{{ $produks->kontak_penjual }}">
            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Chat Seller</button>
          </a>
        </div>
      </div>
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset($produks->foto) }}">
    </div>
    @endif
  </div>
</section>

    
@include('components.footer')
</body>
</html>