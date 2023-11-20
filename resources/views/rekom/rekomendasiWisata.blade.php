
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
    <section id="" class="pt-16 lg:pt-36 bg-cream">
        <div class="container mx-auto">
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Trending Wisata</h1>
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 px-4 text-center">
                    <a href="/rekom/{{ $rekom->find(1)->id }}">
                    <div class="mt-10">
                        <img src="{{ $rekom->find(1)->foto }}" alt="" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md">
                    </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <h2 class="text-yellow font-semibold text-xl md:text-2xl lg:text-3xl mb-4">{{ $rekom->find(1)->judul }}</h2>
                    <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">{{ $rekom->find(1)->opening }}</p>
                    <a href="/rekom/{{ $rekom->find(1)->id }}" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                </div>       
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}


    {{-- List Section Start--}}
    <section id="" class="pt-16 pb-32 bg-cream">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Mari kunjungi tempat-tempat wisata batik!</h1>
            </div>
    
            <div class="flex flex-wrap">
            @php $counter = 0; $heroArticleId = $rekom->find(1)->id; @endphp
        @foreach ($rekom as $rekoms)
            @if ($counter < 3 && $rekoms->id !== $heroArticleId)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-cream rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="{{ asset($rekoms->foto) }}" alt="{{ $rekoms->judul }}" class="w-full">
                            <div class="py-8 px-6">
                                <h3 class="text-medium font-semibold text-yellow mb-4 truncate hover:text-green-darkest text-center">{{ $rekoms->judul }}</h3>
                                <div class="text-center">
                                    <a href="/rekom/{{ $rekoms->id }}" class="text-base font-semibold text-green-darkest bg-green-pastel py-1 px-6 rounded-lg hover:bg-yellow hover:text-cream transition duration-300 ease-in-out">Selengkapnya</a>
                                </div>
                            </div>
                    </div>
                </div>
                @php $counter++; @endphp
            @elseif ($rekoms->id === $heroArticleId)
                <!-- Skip the hero article -->
                @continue
            @else
                @break
            @endif
        @endforeach
            </div>
    
            <div class="w-full px-4 flex items-center justify-center">
            <a href="/rekom/allArticle">
                <button type="submit" class="text-base font-semibold text-green-darkest bg-green-pastel py-2 px-8 rounded-lg hover:bg-yellow hover:text-cream">Telusuri lebih banyak</button>
            </a>   
            </div>
        </div>
    </section>
    {{-- LIst Section End --}}

    @include('components.footer')
</body>
</html>