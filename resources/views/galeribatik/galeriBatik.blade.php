<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>galeri batik</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')
    {{-- Hero Section Start --}}
    <section id="opening" class="pt-16 lg:pt-36 bg-cream">
        <div class="container mx-auto">
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center">Trending Batik</h1>
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 px-4 text-center">
                    <div class="mt-10">
                        <img src="/img/batikjamu.png" alt="Batik Jamu Gendong" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <h2 class="text-yellow font-semibold text-xl md:text-2xl lg:text-3xl mb-4">Batik Jamu Gendong Motif Tejo</h2>
                    <p class="text-green-darkest font-regular pb-2 md:pb-10 text-justify">Batik Jamu Gendong atau Batik Mbok Jamu adalah salah satu motif batik tradisional Indonesia yang menggambarkan seorang wanita yang membawa keranjang atau gendongan berisi ramuan jamu tradisional.</p>
                    <a href="" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-full hover-bg-yellow transition duration-300 ease-in-out">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}


    {{-- List Section Start--}}
    
    {{-- LIst Section End --}}

    @include('components.footer')
</body>
</html>