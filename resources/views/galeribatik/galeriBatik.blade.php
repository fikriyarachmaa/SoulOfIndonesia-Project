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
                    <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}


    {{-- List Section Start--}}
    <section id="listbatik" class="pt-16 pb-32 bg-cream">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Ingin tahu banyak ragam batik Indonesia?</h1>
            </div>
    
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/megamendung.png" alt="batik mega mendung" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Mega Mendung</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/parang.png" alt="batik parang" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Parang</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/kawung.png" alt="batik kawung" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Kawung</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/banten.png" alt="batik banten" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Banten</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/kalimantan.png" alt="batik kalimantan" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Kalimantan</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/padang.png" alt="batik padang" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Padang</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/meda.png" alt="batik medan" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Medan</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/sekarjagad.png" alt="batik sekar jagad" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Batik Sekar Jagad</h3>
                            <div class="text-center">
                                <a href="/galeribatik/batikjamugendong" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    
            <div class="w-full px-4 flex items-center justify-center">
                <button type="submit" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-8 rounded-lg hover:bg-yellow hover:text-cream">Telusuri lebih banyak</button>
            </div>
        </div>
    </section>
    {{-- LIst Section End --}}

    @include('components.footer')
</body>
</html>