<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Search</title>
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
                    <form action="{{ route('produks.search') }}" method="GET" class="w-full mt-8">
                 
                        <div class="relative flex p-1 rounded-full bg-white shadow-md md:p-2">
                            <input placeholder="Search by category" class="w-full p-4 rounded-full" type="search" id="default-search" name="kategori">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 
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
  
  <!-- Check if there are results -->
  @if ($produks->isEmpty())
      <div class="text-gray-900 text-lg font-bold py-2 px-20">
        Nothing Found
      </div>
      <div class="text-gray-700 py-2 px-20">
        Sorry, but nothing matched your search terms. Please try again with different keywords.
      </div>
      @else


<!-- Result -->
<div class="w-2/4 text-gray-900 md:text-left t text-2xl font-bold py-1 pl-20 mb-4">
        Search results: <span>{{ $kategori }}</span>
      </div>
      
      <!-- Display search results -->
      <h5 class="md:text-left text-2xl font-bold text-gray-900"></h5>
      <!-- Result end -->
      
      <!-- card start-->
      <div class="flex justify-center mb-5 pt-4 px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
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
      <!-- card end-->
    </div>
  </div>
  @endif
</section>


  @include('components.footer')
</body>
</html>