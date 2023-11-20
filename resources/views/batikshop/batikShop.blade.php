<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BatikShop</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-cream">
    @include('components.header')
<div class="relative bg-green-pastel font-Raleway">
        <div class="container m-auto px-6 pt-32 md:px-12 lg:pt-[4.8rem] lg:px-7">
            <div class="flex items-center flex-wrap px-2 md:px-0">
                <div class="relative lg:w-6/12 lg:py-24 xl:py-32">
                    <h1 class="font-bold text-4xl text-green-dark md:text-5xl lg:w-10/12">Selamat Datang di Batik Shop !</h1>
                    <p class="text-base text-green-dark md:text-2xl lg:w-10/12 py-4">Eksplorasi produk seleramu lalu segera hubungi seller untuk miliki barang impianmu!</p>
                    <!--search bar -->
                    <form action="" class="w-full mt-8">
                        <div class="relative flex p-1 rounded-full bg-white shadow-md md:p-2">
                            <input placeholder="Search by category" class="w-full p-4 rounded-full" type="text">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
                <!--hero image -->
                <div class="ml-auto -mb-24 lg:-mb-56 lg:w-6/12">
                    <img src="/img/hero-batik.png" class="relative" alt="illustration" loading="lazy" width="4500" height="4500">
                </div>
            </div>
        </div>
    </div>
    <!--hero image -->
  
    <!--kelebihan -->
    <section class="mt-32 font-Raleway">
    <div class="grid grid-cols-1 gap-8 mt-10 mx-10 xl:mt-12 xl:gap-24 md:grid-cols-2 xl:grid-cols-2">
        <div class="md:flex md:items-start p-3 md:-mx-4 mt-8 border-2 border-green-darkest rounded-lg shadow-lg">
            <span class="inline-block p-2 text-blue-500 w-20 rounded-xl md:mx-4 dark:text-white">
                <img src="/img/phone-icon.png" alt="phone">
            </span>
            <div class="mt-4 md:mx-4 md:mt-0 p-2">
                <h1 class="text-xl font-semibold text-green-dark capitalize dark:text-white">Mudah Berkomunikasi</h1>
                    <p class="mt-3 text-green-dark dark:text-green-dark">
                        Cepat terhubung dengan seller melalui kontak yang tersedia
                    </p>
            </div>
        </div>
        <div class="md:flex md:items-start p-3 md:-mx-4 mt-8 border-2 border-green-darkest rounded-lg shadow-lg">
            <span class="inline-block p-2 text-blue-500 w-20 rounded-xl md:mx-4 dark:text-white">
                <img src="/img/cart-icon.png" alt="phone">
            </span>
            <div class="mt-4 md:mx-4 md:mt-0 p-2">
                <h1 class="text-xl font-semibold text-green-dark capitalize dark:text-white">Beragam Pilihan</h1>
                    <p class="mt-3 text-green-dark dark:text-green-dark">
                        Tersedia beberapa pilihan kategori produk dengan beragam pilihan
                    </p>
            </div>
        </div>
    </div>
    </section>
    <!--kelebihan -->
   
    <!--kategori produk -->
    <section class="-mb-10 -mb-10 font-Raleway">
        <div class="py-4 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Kategori Produk</h2>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <category class="max-w-xs">
                <a href="#">
                  <img src="/img/kain.png" class="rounded-lg shadow-lg" alt="Image 1">
                </a>
          </category>
          <category class="max-w-xs">
              <a href="#">
              <img src="/img/pakaian.png" class="rounded-lg shadow-lg" alt="Image 2">
              </a>
          </category>
          <category class="max-w-xs">
              <a href="#">
                  <img src="/img/aksesoris.png" class="rounded-lg shadow-lg" alt="Image 3">
              </a>
          </category>
          <category class="max-w-xs">
              <a href="#">
                  <img src="/img/kerajinan.png" class="rounded-lg shadow-lg" alt="Image 4">
              </a>
          </category>
      </div>                
        </div>
    </section>
  <!--kategori produk -->
  
  <!-- produk -->
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-8">
  <h2 class="text-xl font-bold text-gray-900 dark:text-white">Produk Untukmu</h2>
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
  <div class="flex justify-center items-center pb-12 pt-4">
    <a href="/batikshop/showAll">
        <button type="button" class="text-green-dark hover:text-white border-2 border-green-darkest hover:bg-green-light focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Lihat lainnya</button> 
    </a>
  </div>
 

  @include('components.footer')
</body>
</html>