<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css') 
</head>
<body id="landingpage" class="bg-cream">
@include('components.header')
<section>
    <!-- Ini adalah halaman awal -->
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:grid-cols-12">
        <div class="lg:col-span-7 flex flex-col justify-center">
            <div style="text-align: center;">
                <h1 class="max-w-2xl mb-4 text-4xl font-bold leading-none md:text-5xl xl:text-6xl text-green-darkest">Soul Of Indonesia</h1>
                <p class="max-w-4xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl text-green-darkest">Get To Know About Batik Nusantara</p>
                <a href="#" class="inline-flex items-cente px-5 py-3 text-base font-bold text-center text-green-darkest rounded-lg bg-green-pastel hover:bg-yellow" style="border-radius: 70px; display: inline-block; margin: 0 auto; margin-top: 20px;">
                    Mulai Jelajah Batik
                </a>
            </div>
        </div>
        <div class="lg:col-span-5 hidden lg:flex pt-20">
            <img src="\img\hero.png" alt="" class="max-w-full">
        </div>
    </div>
</section>


<section>
     <!-- Ini adalah halaman kedua -->
     <div class="min-w-screen min-h-screen flex items-center justify-center py-12  ">
    <div class="w-full flex rounded-lg bg-gradient-to-r from-green-light via-30% to-green-pastel to-90% shadow-lg " style="margin: 50px; padding: 0px; position: relative; pt-12">
        <div class="w-1/2 p-5"> 
            <p class="text-lg md:text-xl lg:text-2xl text-green-darkest font-bold text-justify px-5 pt-12">
                "Seni tradisional pembuatan kain yang unik dan khas dari Indonesia. 
                Dengan melalui proses pewarnaan kain menggunakan malam lilin untuk melindungi bagian tertentu dari kain sehingga motif dan pola tertentu dapat terbentuk ketika kain diwarnai. 
                Batik sendiri bagian ciri khas serta budaya Indonesia dan telah menjadi salah satu ikon budaya yang paling dikenal di dunia."
            </p> 
            <div class="flex justify-center items-center pt-8">
            <button type="submit" class="bg-cream mt-5 py-3 px-6  rounded-2xl hover:bg-yellow-700 hover:-translate-y-1 transition-all duration-500 text-green-dark font-semibold mb-2">Galeri Batik</button>
            </div>
        </div>
        <!-- Garis Vertikal -->
        <div class="w-1 border-l border-green-darkest"></div>
        <div class="w-1/2 p-5 relative" style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-end;">
            <h1 class="max-w-2xl mb-4 text-4xl font-bold leading-none md:text-5xl xl:text-6xl text-green-darkest text-center pt-12">Apa itu Batik Indonesia?</h1>
            <div class="position: relative; margin: 0; padding: 0;">
                <img src="\img\hiasan2.png" alt="" class="margin: 0; padding: 0;">
            </div>
        </div>
    </div>
</div>
</section>

<section>
<div class="flex flex-row space-x-4" >
    <div class="relative flex w-96 flex-col rounded-xl bg-white text-gray-700 shadow-md ml-10">
      <div class="relative mx-4 my-4 mt-4 h-96 overflow-hidden rounded-xl bg-white text-gray-700">
        <img
          src="img/batiksoganparang.png"
          class="h-full w-full object-cover"
        />
        <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 hover:opacity-100 transition-opacity bg-white hover:bg-opacity-50 duration-300">
        
        Kain Batik Parang
        <br>Rp 170.000</br>
        </div>
      </div>
    </div>

    <div class="relative flex w-96 flex-col rounded-xl bg-white text-gray-700 shadow-md ml-20">
      <div class="relative mx-4 my-4 mt-4 h-96 overflow-hidden rounded-xl bg-white text-gray-700">
        <img
          src="img/kemejabatikpria.png"
          class="h-full w-full object-cover"
        />
        <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 hover:opacity-100 bg-white transition-opacity hover:bg-opacity-50 duration-300">
        Kemeja Batik Pria
          <br>Rp 130.000</br>
          </div>
        </div>
      </div>
    </div>

    <div class="relative flex w-96 flex-col rounded-xl bg-white text-gray-700 shadow-md ml-20">
  <div class="relative mx-4 my-4 mt-4 h-96 overflow-hidden rounded-xl bg-white text-gray-700">
    <img
      src="img/rokpendek.png"
      class="h-full w-full object-cover"
    />
    <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 hover:opacity-100 bg-white hover:bg-opacity-50 transition-opacity duration-300">
      Rok Batik Remaja
      <br>Rp 200.000</br>
    </div>
  </div>
</div>

    <div class="relative flex w-96 flex-col rounded-xl bg-white text-gray-700 shadow-md ml-20 mr-1">
      <div class="relative mx-4 my-4 mt-4 h-96 overflow-hidden rounded-xl bg-white text-gray-700">
        <img
          src= "img/blousesandra.png"
          class="h-full w-full object-cover"
        />
        <div class="absolute inset-0 flex items-center justify-center text-black text-lg font-semibold opacity-0 hover:opacity-100 hover:bg-opacity-50 transition-opacity bg-white duration-300">
          Blouse Batik Wanita
        <br>Rp 200.000</br>
        </div>
      </div>
    </div>
  </div>
</section>




  

</body>
</html>