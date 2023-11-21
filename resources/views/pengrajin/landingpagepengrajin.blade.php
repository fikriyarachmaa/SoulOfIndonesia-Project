<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soul of Indonesia</title>
  @vite('resources/css/app.css') 
</head>
<body id="landingpage" class="bg-cream">
@include('components.headerpengrajin')
<section>
    <!-- Ini adalah halaman awal -->
    <div class="grid max-w-screen-xl px-4 pt-16 pb-8 mx-auto lg:grid-cols-12">
        <div class="lg:col-span-7 flex flex-col justify-center">
            <div style="text-align: center;">
                <h1 class="max-w-2xl mb-4 text-4xl font-bold leading-none md:text-5xl xl:text-6xl text-green-darkest">Soul Of Indonesia</h1>
                <p class="max-w-4xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl text-green-darkest">Get To Know About Batik Nusantara</p>
                <a href="#section2" class="inline-flex items-center px-5 py-3 text-base font-bold text-center text-green-darkest rounded-lg bg-green-pastel hover:bg-yellow hover:text-cream" style="border-radius: 70px; display: inline-block; margin: 0 auto; margin-top: 20px;">
                    Mulai Jelajah Batik
                </a>
            </div>
        </div>
        <div class="lg:col-span-5 lg:flex pt-20">
            <img src="\img\hero.png" alt="" class="max-w-full mx-auto"> 
        </div>
    </div>
</section>


     <!-- Ini adalah halaman kedua -->
     <section id="section2">
    <div class="min-w-screen min-h-screen flex items-center justify-center pt-16 pb-8">
        <div class="w-full flex rounded-lg bg-gradient-to-r from-green-light via-30% to-green-pastel to-90% shadow-lg" style="margin: 50px; padding: 0px;">
            <div class="w-1/2 p-5">
                <p class="text-lg md:text-xl lg:text-2xl text-green-darkest font-bold text-justify px-5 pt-12">
                    "Seni tradisional pembuatan kain yang unik dan khas dari Indonesia. Dengan melalui proses pewarnaan kain menggunakan malam lilin untuk melindungi bagian tertentu dari kain sehingga motif dan pola tertentu dapat terbentuk ketika kain diwarnai. Batik sendiri bagian ciri khas serta budaya Indonesia dan telah menjadi salah satu ikon budaya yang paling dikenal di dunia."
                </p>
                <div class="flex justify-center items-center pt-8">
                    <a href ="/galeribatik/galeribatik" class="bg-cream mt-5 py-3 px-6 rounded-2xl hover:bg-yellow-700 hover:-translate-y-1 transition-all duration-500 text-green-dark font-semibold mb-2 hover:bg-yellow hover:text-cream">Galeri Batik</a>
                </div>
            </div>
            <!-- Garis Vertikal -->
            <div class="w-1 border-l border-green-darkest"></div>
            <div class="w-1/2 p-5">
                <h1 class="max-w-2xl mb-4 text-4xl font-bold leading-none md:text-5xl xl:text-6xl text-green-darkest text-center pt-12">Apa itu Batik Indonesia?</h1>
                <div class="text-center mx-auto"> <!-- Tambahkan class text-center dan mx-auto di sini -->
                    <img src="\img\hiasan2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Ini adalah halaman ketiga -->

    <section id="opening" class="pt-16 pb-16">
        <div class="container mx-auto">
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Trending Batik</h1>
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 px-4 text-center">
                    <div class="mt-10">
                        <img src="/img/jamugendong.png" alt="Batik Jamu Gendong" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <h2 class="text-yellow font-semibold text-xl md:text-2xl lg:text-3xl mb-4">Batik Jamu Gendong Motif Tejo</h2>
                    <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">Batik Jamu Gendong atau Batik Mbok Jamu adalah salah satu motif batik tradisional Indonesia yang menggambarkan seorang wanita yang membawa keranjang atau gendongan berisi ramuan jamu tradisional.</p>
                    
                    <div class="flex justify-center items-center pt-8">
                    <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                    <a href="/galeribatik/galeribatik" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out ml-4">Informasi Batik Lainnya</a>
                    </div>
                  </div>
            </div>
        </div>
    </section>

<!-- Ini adalah halaman keempat -->
    {{-- List Section Start--}}
    <section id="listbatik" class="pt-16 pb-8">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-4">Bosen wisata itu-itu aja?</h1>
                <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Cobain jelajah wisata batik Indonesia</h1>
            </div>
    
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/kampunggiriloyo.png" alt="kampung batik giriloyo" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-2 truncate hover:text-green-darkest text-center">Kampung Batik Giriloyo</h3>
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Yogyakarta</h3>
                            <div class="text-center">
                                <a href="/rekom/kampungkauman" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/kampungsemarang.png" alt="batik parang" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-2 truncate hover:text-green-darkest text-center">Semarang Batik Village</h3>
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Semarang</h3>
                            <div class="text-center">
                                <a href="/rekom/kampungkauman" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/rumahpalbatu.png" alt="Rumah batik palbatu, jakarta" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-2 truncate hover:text-green-darkest text-center">Rumah Batik Palbatu</h3>
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Jakarta</h3>
                            <div class="text-center">
                                <a href="/rekom/kampungkauman" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="w-full px-4 flex items-center justify-center">
                <a href ="/rekom/rekomwisata" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-8 rounded-lg hover:bg-yellow hover:text-cream">Telusuri lebih banyak</a>
            </div>
        </div>
    </section>



     <!-- Ini adalah halaman kelima -->
     <section class="text-gray-600 body-font">
  <div class="container mx-auto pt-16 pb-16">
    <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16 pt-16">Batikshop</h1>
    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Produk Untukmu</h2>
    <div class="flex grid grid-cols gap-8 xl:mt-8 xl:gap-8 md:grid-cols-2 xl:grid-cols-4">
      <div class="p-4 w-full shadow-lg bg-slate-100 rounded-lg">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="/img/blousesandra.png">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">KATEGORI</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Kemeja Wanita</h2>
          <p class="mt-1">Rp 120.000</p>
        </div>
      </div>
      <div class="p-4 w-full shadow-lg bg-slate-100 rounded-lg">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="/img/batiksolo.png">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">KATEGORI</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Kain Batik</h2>
          <p class="mt-1">Rp 100.000</p>
        </div>
      </div>
      <div class="p-4 w-full shadow-lg bg-slate-100 rounded-lg">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="/img/roklilit.png">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
            KATEGORI
          </h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Rok Batik</h2>
          <p class="mt-1">Rp 170.000</p>
        </div>
      </div>
      <div class="p-4 w-full shadow-lg bg-slate-100 rounded-lg">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="/img/batiksoganparang.png">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">KATEGORI</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Kain Batik</h2>
          <p class="mt-1">Rp 200.000</p>
        </div>
      </div>
    </div>
    <div class="flex justify-center items-center pt-12">
      <a href="/batikshop/batikshop" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-8 rounded-lg hover:bg-yellow hover:text-cream">Jelajahi Hasil Karya Batik Lainnya</a>
    </div>
  </div>
</section>


<section>
     <!-- Ini adalah halaman keenam -->
<div class="container my-24 mx-auto md:px-6 pt-8">
  <section class="mb-32 text-center">
    <h2 class="mb-12 text-3xl font-bold">Ulasan</h2>

    <div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12">
      <div class="mb-12 md:mb-0">
        <h5 class="mb-2 text-lg font-bold">Maria Smantha</h5>
        <p class="mb-4">
        Website ini sangat bermanfaat untuk mengenal berbagai jenis batik di Indonesia. Melalui website ini bisa membantu saya sebagai pelanggan untuk membeli produk batik. 
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
            <path fill="currentColor"
              d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
          </svg>
        </p>
      </div>
      <div class="mb-12 md:mb-0">
        <h5 class="mb-2 text-lg font-bold">Lisa Barito</h5>
        <p class="mb-4">
          Melalui website ini saya dapat membeli produk batik, sehingga memudahkan saya membeli fashion yang mengangkat kebudayaan Indonesia. Serta saya senang bisa memakai karya batik dari para pengrajin batik.
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
            <path fill="currentColor"
              d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
          </svg>
        </p>
      </div>
      <div class="mb-0">
        <h5 class="mb-2 text-lg font-bold">Bagus Adi Kara</h5>
        <p class="mb-4">
         Saya senang dapat dengan mudah menemukan rekomendasi tempat wisata batik. Sehingga saya bisa mengajak anak saya liburan sekaligus mengenalkan warisan budaya Indonesia.
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
            <path fill="currentColor"
              d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
          </svg>
        </p>
      </div>
    </div>
  </section>
</div>
</section>
@include('components.footer')
</body>
</html>