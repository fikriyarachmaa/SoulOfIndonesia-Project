<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Galeri Batik</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')

    {{-- List Section Start--}}
    <section id="listbatik" class="pt-16 pb-32 bg-cream">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <h1 class="text-green-darkest font-bold text-2xl py-4 md:text-4xl lg:text-4xl flex justify-center pb-16">Ingin tahu banyak ragam batik Indonesia?</h1>
            </div>
    
            <div class="flex flex-wrap">
        @foreach ($articles as $artikel)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="{{ asset($artikel->foto) }}" alt="{{ $artikel->judul }}" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">{{ $artikel->judul }}</h3>
                            <div class="text-center">
                                <a href="/galeribatik/{{ $artikel->id }}" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    
        </div>
    </section>
    {{-- LIst Section End --}}

    @include('components.footer')
</body>
</html>