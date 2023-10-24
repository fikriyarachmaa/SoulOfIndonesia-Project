<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <form action="" class="w-full mt-12">
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
    <br> <br>
    <!--kategori produk -->
    <section class="my-10 font-Raleway">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Kategori Produk</h2>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <category class="max-w-xs">
                <a href="#">
                  <img src="/img/kain.png" class="mb-5 rounded-lg" alt="Image 1">
                </a>
          </category>
          <category class="max-w-xs">
              <a href="#">
              <img src="/img/pakaian.png" class="mb-5 rounded-lg" alt="Image 2">
              </a>
          </category>
          <category class="max-w-xs">
              <a href="#">
                  <img src="/img/aksesoris.png" class="mb-5 rounded-lg" alt="Image 3">
              </a>
          </category>
          <category class="max-w-xs">
              <a href="#">
                  <img src="/img/kerajinan.png" class="mb-5 rounded-lg" alt="Image 4">
              </a>
          </category>
      </div>                
        </div>
    </section>
  <!--kategori produk -->
  
  <!-- produk -->
  <section class="my-10 font-Raleway">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Produk Untukmu</h2>
            <div class="grid gap-4 sm:grid-cols-3 lg:grid-cols-5">
                
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

           <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>
        
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

           <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src="/img/batiksolo.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                         <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kain Batik Solo</h5>
                    </a>
                    <p class="text-gray-500 text-sm italic">Dikirim dari Solo</p>
                <div class="flex items-center justify-end">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">Rp 110.000</span>
                </div>
                    <div class="py-2">
                        <button type="button" class="text-white bg-gradient-to-r from-sky-400 to-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Show More</button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="flex justify-center py-10">
                <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Lihat Lainnya</button>
        </div>        
  </section>
  <!-- produk -->

  
  @include('components.footer')
</body>
</html>