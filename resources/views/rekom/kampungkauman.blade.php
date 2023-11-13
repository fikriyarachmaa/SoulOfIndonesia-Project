<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampung Batik Kauman</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')
    {{-- Hero Section Start --}}
    <section id="kampungbatikkauman" class="pt-16 lg:pt-36 bg-cream">
        <div class="container mx-auto px-8">
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Kampung Batik Kauman</h1>
            <div class=" items-center">
                <img src="/img/kampungkauman.png" alt="Kampung Batik Kauman, Solo" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md pb-16">
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">Kampung Batik Kauman adalah salah satu kawasan yang terkenal sebagai pusat produksi dan pengembangan batik di Solo, yang merupakan salah satu pusat batik tradisional terkemuka di Indonesia. Kampung Batik Kauman adalah salah satu tempat yang penting dalam pelestarian dan pengembangan seni batik di Indonesia. Ini menjadi saksi perkembangan seni batik dari masa lalu hingga masa kini, dan tempat di mana tradisi batik tetap hidup dan berkembang.</p>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">ALAMAT</h4>
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">Jl. Trisula III No.1, Kauman, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57112</p>
                <br>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">DESKRIPSI</h4>
                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">1. Sejarah: Kampung Batik Kauman memiliki sejarah panjang sebagai pusat pengembangan dan produksi batik di Solo. Kauman adalah salah satu kawasan yang paling terkemuka dalam dunia batik Solo, dan telah menjadi bagian integral dari warisan batik Jawa.</p>
                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">2. Pusat Batik Tradisional: Kampung Batik Kauman terkenal karena menjaga tradisi dan teknik batik tradisional. Di sini, Anda dapat menemukan banyak pengrajin batik yang masih menggunakan teknik cap (stamping) dan teknik tulis (hand-drawn) secara manual untuk membuat motif-motif batik yang indah.</p>
                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">3. Warisan Budaya: Kampung Batik Kauman adalah tempat yang penting dalam pelestarian warisan budaya batik Jawa. Di sini, Anda dapat menemukan banyak galeri, museum, toko batik, dan pusat pelatihan yang berfokus pada seni batik</p>
                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">4. Partisipasi Komunitas: Masyarakat lokal di Kampung Batik Kauman sangat terlibat dalam produksi batik, dan banyak keluarga yang menjalankan usaha kecil di rumah mereka. Ini menciptakan ikatan yang kuat antara seni batik dan kehidupan sehari-hari penduduk setempat.</p>
                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">5. Tempat Wisata: Kampung Batik Kauman juga menjadi tujuan wisata bagi para pengunjung yang tertarik dengan seni dan budaya batik. Pengunjung dapat melihat proses pembuatan batik secara langsung, membeli batik berkualitas tinggi, dan belajar lebih lanjut tentang sejarah dan teknik batik.</p>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    @include('components.footer')
</body>
</html>