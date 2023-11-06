<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekomendasi Wisata Batik</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')
    {{-- Hero Section Start --}}
    <section id="opening" class="pt-16 lg:pt-36 bg-cream">
        <div class="container mx-auto">
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Trending Wisata Batik</h1>
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 px-4 text-center">
                    <div class="mt-10">
                        <img src="/img/kampungkauman.png" alt="Kampung batik kauman" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <h2 class="text-yellow font-semibold text-xl md:text-2xl lg:text-3xl mb-4">Kampung Batik Kauman, Solo</h2>
                    <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">Kampung Batik Kauman adalah salah satu kawasan yang terkenal sebagai pusat produksi dan pengembangan batik di Solo, yang merupakan salah satu pusat batik tradisional terkemuka di Indonesia.</p>
                    <a href="/rekom/kampungkauman" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}


    {{-- List Section Start--}}
    <section id="listbatik" class="pt-16 pb-32 bg-cream">
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

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/kampunglaweyan.png" alt="Kampung batik laweyan, Solo" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-2 truncate hover:text-green-darkest text-center">Kampung Batik Laweyan</h3>
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Solo</h3>
                            <div class="text-center">
                                <a href="/rekom/kampungkauman" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/kampungtrusmi.png" alt="Kampung batik trusmi, Cirebon" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-2 truncate hover:text-green-darkest text-center">Kampung Batik Trusmi</h3>
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Cirebon</h3>
                            <div class="text-center">
                                <a href="/rekom/kampungkauman" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10 ">
                        <img src="/img/kampunglasem.png" alt="Kampung batik lasem, Rembang" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-2 truncate hover:text-green-darkest text-center">Kampung Batik Lasem</h3>
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">Rembang</h3>
                            <div class="text-center">
                                <a href="/rekom/kampungkauman" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
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