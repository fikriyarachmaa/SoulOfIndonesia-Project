<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css') 
</head>
<body id="landingpage">
@include('components.header')
<section class="bg-cream" >
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


<section class="bg-cream">
     <!-- Ini adalah halaman kedua -->
     <div class="min-w-screen min-h-screen flex items-center justify-center py-12  ">
    <div class="w-full flex rounded-lg bg-gradient-to-r   from-green-light via-30% to-green-pastel to-90% shadow-lg " style="margin: 50px; padding: 0px; position: relative; pt-12">
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

</body>
</html>