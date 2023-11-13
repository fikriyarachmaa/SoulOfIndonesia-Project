<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wisata</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')
    {{-- Hero Section Start --}}
    <section id="" class="pt-16 lg:pt-36 bg-cream">
        <div class="container mx-auto px-8">
        @if(isset($rekom) && isset($rekom->judul))
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16 ">{{ $rekom->judul }}</h1>
            <div class="items-center">
                <img src="{{ asset($rekom->foto) }}" alt="{{ $rekom->judul }}" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md pb-16">
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">{{ $rekom->opening }}</p>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">ALAMAT</h4>
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">{{ $rekom->alamat }}</p>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">DESKRIPSI</h4>
                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">{{ $rekom->deskripsi }}</p>
                
            </div>
            @endif
        </div>
    </section>
    {{-- Hero Section End --}}

    @include('components.footer')
</body>
</html>