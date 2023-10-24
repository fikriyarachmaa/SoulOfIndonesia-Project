<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<section class="bg-cream">
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
     <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
    <div class="w-full flex rounded-lg bg-green-pastel shadow-lg" style="margin: 50px; padding: 50px; position: relative;">
        <div class="w-1/2 p-5">
            <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
            <p class="text-lg md:text-xl lg:text-2xl text-green-darkest font-bold text-justify px-5">
                Seni tradisional pembuatan kain yang unik dan khas dari Indonesia. 
                Dengan melalui proses pewarnaan kain menggunakan malam lilin untuk melindungi bagian tertentu dari kain sehingga motif dan pola tertentu dapat terbentuk ketika kain diwarnai. 
                Batik sendiri bagian ciri khas serta budaya Indonesia dan telah menjadi salah satu ikon budaya yang paling dikenal di dunia.
            </p>
            <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
        </div>
        
        <!-- Garis Vertikal -->
        <div class="w-1 border-l border-green-darkest"></div>
        
        <div class="w-1/2 p-5 relative" style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-end;">
            <h1 class="max-w-2xl mb-4 text-4xl font-bold leading-none md:text-5xl xl:text-6xl text-green-darkest text-center">Apa itu Batik Indonesia?</h1>
            <div style="position: relative; margin: 0; padding: 0;">
                <img src="\img\hiasan2.png" alt="" style="margin: 0; padding: 0;">
            </div>
        </div>
    </div>
</div>
</section>

</body>
</html>