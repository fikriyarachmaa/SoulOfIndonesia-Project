<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-cream">
    @include('components.header')

   <!-- produk -->
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-8">
    <div class="w-full px-4 pt-20 pb-6">
        <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center">Lebih Banyak Produk Untukmu</h1>
    </div>

    <div class="flex grid grid-cols gap-8 xl:mt-8 xl:gap-8 md:grid-cols-2 xl:grid-cols-4">
    @foreach ($produks as $produk)
      <div class="p-4 w-full bg-cream border border-green-medium border-1 rounded-xl overflow-hidden shadow-lg mb-10">
        <a href="/batikshop/{{ $produk->id }}" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset($produk->foto) }}">
        </a>
        <div class="mt-4">
          <h3 class="text-green-darkest text-xs tracking-widest title-font mb-1">{{ $produk->kategori }}</h3>
          <h2 class="text-green-medium title-font text-lg font-medium">{{ $produk->nama }}</h2>
          <p class="mt-1 text-yellow font-medium">Rp {{ $produk->harga }}</p>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
  <!-- produk -->

    @include('components.footer')
</body>
</html>