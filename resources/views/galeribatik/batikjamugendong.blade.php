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
    <section id="jamugendong" class="pt-16 lg:pt-36 bg-cream">
        <div class="container mx-auto px-8">
            <h1 class="text-green-darkest font-bold text-2xl md:text-4xl lg:text-4xl flex justify-center pb-16">Batik Jamu Gendong Motif Tejo</h1>
            <div class="flex flex-wrap items-center">
                <img src="/img/jamugendong.png" alt="Batik Jamu Gendong" class="max-w-full h-auto mx-auto md:max-w-md lg:max-w-md pb-16">
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">Batik Jamu Gendong atau Batik Mbok Jamu adalah salah satu motif batik tradisional Indonesia yang menggambarkan seorang wanita yang membawa keranjang atau gendongan berisi ramuan jamu tradisional.</p>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">ASAL USUL</h4>
                <p class="text-green-darkest font-regular pb-8 md:pb-10 text-justify">Asal-usul motif Batik Jamu Gendong tidak terlalu jelas, tetapi motif ini memiliki akar dalam budaya Jawa, terutama di Jawa Tengah dan Jawa Timur, yang merupakan daerah yang kaya akan tradisi jamu. Sebagian besar produksi Batik Jamu Gendong dapat ditemukan di berbagai daerah di Jawa, yang dikenal karena warisan seni batiknya.</p>
                <h4 class="text-yellow font-semibold pb-8 md:pb-10 text-justify">FILOSOFI</h4>

                <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10"><span class="text-green-darkest font-medium pb-16">Motif Batik Jamu Gendong atau Batik Mbok Jamu memiliki filosofi yang dalam yang mencerminkan berbagai nilai dan aspek budaya Indonesia, antara lain: <br></span>
            1. Kesehatan dan Kesejahteraan: Motif ini menggambarkan seorang wanita penjual jamu yang membawa ramuan tradisional untuk kesehatan dan kesejahteraan masyarakat. Ini mencerminkan perhatian terhadap kesehatan dan kebahagiaan anggota masyarakat.</p>
            <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">2. Tradisi dan Warisan: Batik Jamu Gendong mengingatkan kita akan pentingnya menjaga dan merawat tradisi dan warisan budaya, termasuk penggunaan jamu sebagai metode pengobatan tradisional yang telah ada selama berabad-abad.</p>
            <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">3. Kerja Keras dan Kreativitas: Motif ini mencerminkan kerja keras para penjual jamu yang sering kali berjalan berkeliling untuk mencari pembeli. Hal ini mengingatkan kita akan nilai-nilai kerja keras, ketekunan, dan kreativitas dalam menjalankan usaha kecil dan menopang kehidupan.</p>
            <p class="text-green-darkest font-regular text-justify pb-8 md:pb-10">4. Keseimbangan Alam dan Manusia: Seperti banyak motif batik lainnya, Batik Jamu Gendong juga menggambarkan keseimbangan antara manusia dan alam. Penggunaan bahan alami dalam ramuan jamu menunjukkan rasa hormat terhadap alam dan hubungan harmonis antara manusia dan lingkungannya.</p>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    @include('components.footer')
</body>
</html>