<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batik jamu Gendong</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')
    {{-- Hero Section Start --}}
    <section id="details" class="pt-16 lg:pt-36 bg-cream">
        <div class="container mx-auto px-8">
        @if(isset($articles) && isset($articles->judul))
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16 ">{{ $articles->judul }}</h1>
            <div class="items-center">
                <img src="{{ asset($articles->foto) }}" alt="{{ $articles->judul }}" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md pb-16">
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">{{ $articles->opening }}</p>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">ASAL USUL</h4>
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">{{ $articles->asal_usul }}</p>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">FILOSOFI</h4>

                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">{{ $articles->filosofi }}</p>
                
            </div>
            @endif
        </div>
    </section>
    {{-- Hero Section End --}}

    @include('components.footer')
</body>
</html>