<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Header Start -->
<header class=" bg-green-pastel absolute top-0 left-0 w-full flex items-center z-10 mx-auto">
    <div class="container mx-auto">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home"><img src="/img/logo.png" alt="SoulOfIndonesia" class="py-2 w-[60px] h-[60px]"></a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-green-light shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/landingpage" class="text-base font-semibold text-green-darkest py-2 mx-8 flex group-hover:text-cream">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/galeribatik" class="text-base font-semibold text-green-darkest py-2 mx-8 flex group-hover:text-cream">Galeri Batik</a>
                        </li>
                        <li class="group">
                            <a href="/rekomendasiwisata" class="text-base font-semibold text-green-darkest py-2 mx-8 flex group-hover:text-cream">Rekomendasi Wisata</a>
                        </li>
                        <li class="group">
                            <a href="/batikshop" class="text-base font-semibold text-green-darkest py-2 mx-8 flex group-hover:text-cream">Batik Shop</a>
                        </li>
                        <li class="group">
                            <a href="/profil" class="text-base font-semibold text-green-darkest py-2 mx-8 flex group-hover:text-cream">Profile</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<script src="/js/script.js"></script>
</body>
</html>