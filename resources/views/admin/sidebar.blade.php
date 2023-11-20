<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- sidebar start -->
    <div class="p-2 bg-green-pastel shadow h-full w-60 flex flex-col hidden md:flex" id="sideNav">
            <nav>
                <a class="block text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/admin/dashboard">
                    <i class="fas fa-home mr-2"></i>Dashboard
                </a>
                <a class="block text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/admin/profile">
                    <i class="fas fa-file-alt mr-2"></i>Profile
                </a>
                <a class="block text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/admin/artikel">
                    <i class="fas fa-users mr-2"></i>Artikel
                </a>
                <a class="block text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/admin/rekomendasiWisata">
                    <i class="fas fa-store mr-2"></i>Rekomendasi Wisata
                </a>
                <a class="block text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/admin/produk">
                    <i class="fas fa-exchange-alt mr-2"></i>Produk
                </a>
            </nav>

            <!-- logout start --> 
            <a class="block text-green-dark py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white mt-auto" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt mr-2"></i>Log out
            </a>

            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                 @csrf
            </form>
                <!-- garis batas -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
                <!-- Copyright start -->
                <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright SOI@2023</p>
                <!-- Copyright end -->
            <!-- logout end -->
        </div>
        <!-- sidebar end -->
</body>
</html>