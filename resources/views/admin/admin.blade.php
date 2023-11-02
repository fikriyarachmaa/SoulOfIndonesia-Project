<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Agregar estilos para la vista de dispositivos pequeños */
        @media (max-width: 768px) {
            .flex-wrap {
                display: flex;
                flex-wrap: wrap;
            }
            .section-small {
                width: 50%;
            }
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex flex-col h-screen bg-gray-100">
    <!-- navbar start-->
    <div class="bg-white text-black shadow w-full p-2 flex items-center justify-between">
        <div class="flex items-center">
            <div class="hidden md:flex items-center px-4"> <!-- logo -->
                <img src="/img/logoSOI.png" alt="Logo" class="w-10 h-10 mr-2">
                <h2 class="font-bold text-xl">Soul of Indonesia</h2>
            </div>
        </div>
            <div class="px-5 space-x-5">
                <button>
                    <i class="fas fa-user text-gray-500 text-lg"></i>
                </button>
            </div>
        </div>
    <!-- navbar end-->

    <!-- isi start -->
    <div class="flex-1 flex">
        <!-- sidebar start -->
        <div class="p-2 bg-white shadow h-full w-60 flex flex-col hidden md:flex" id="sideNav">
            <nav>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="#">
                    <i class="fas fa-home mr-2"></i>Dashboard
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="#">
                    <i class="fas fa-file-alt mr-2"></i>Profile
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="#">
                    <i class="fas fa-users mr-2"></i>Artikel
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="#">
                    <i class="fas fa-store mr-2"></i>Rekomendasi Wisata
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan- 400 hover:to-cyan-300 hover:text-white"href="#">
                    <i class="fas fa-exchange-alt mr-2"></i>Produk
                </a>
            </nav>

            <!-- logout start -->
            <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white mt-auto" href="#">
                <i class="fas fa-sign-out-alt mr-2"></i>Log out
            </a>
                <!-- garis batas -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
                <!-- Copyright start -->
                <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright SOI@2023</p>
                <!-- Copyright end -->
            <!-- logout end -->
        </div>
        <!-- sidebar end -->

        <!-- main start -->
        <div class="flex-1 p-4">
            <!-- welcome start -->
            <div class="bg-white w-full rounded shadow">
                <div class="grid grid-cols-2">
                    <div class="p-auto m-auto">
                        <h1 class="font-semibold text-3xl">Selamat Datang Fikriya!</h1>
                        <h3 class="font-regular text-xl py-6">Lihat apa yang baru hari ini</h3>
                    </div>
                    <div class="p-auto m-auto">
                        <img src="/img/dashboardmin.png" alt="imgadmin">
                    </div>
                </div>
            </div>
            <!-- welcome end -->

            <!-- count start -->
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3  gap-4 mt-2 p-2">
                <!-- Bagian 1 - Galeri Batik start-->
                <div class="bg-white p-4 rounded-md shadow">
                    <h2 class="text-black text-2xl font-bold pb-1 text-right">Galeri Batik</h2>
                    <div class="my1-"></div> <!-- ruang batas -->
                    <h2 class="text-yellow  text-5xl font-semibold pb-1">10</h2>
                    <p class="text-gray-500 text-medium font-regular pb-1 text-right">Artikel terposting</p>
                </div>
                <!-- Bagian 1 - Galeri Batik end-->

                <!-- Bagian 2 - Rekomendasi wisata start-->
                <div class="bg-white p-4 rounded-md shadow">
                    <h2 class="text-black text-2xl font-bold pb-1 text-right">Rekomendasi Wisata</h2>
                    <div class="my1-"></div> <!-- ruang batas -->
                    <h2 class="text-yellow  text-5xl font-semibold pb-1">10</h2>
                    <p class="text-gray-500 text-medium font-regular pb-1 text-right">Artikel terposting</p>
                </div>
                <!-- Bagian 2 - Rekomendasi wisata end-->

                <!-- Bagian 3 - Produk start-->
                <div class="bg-white p-4 rounded-md shadow">
                    <h2 class="text-black text-2xl font-bold pb-1 text-right">Produk</h2>
                    <div class="my1-"></div> <!-- ruang batas -->
                    <h2 class="text-yellow  text-5xl font-semibold pb-1">10</h2>
                    <p class="text-gray-500 text-medium font-regular pb-1 text-right">Produk approve</p>
                </div>
                <!-- Bagian 3 - Produk end-->
                

            </div>
            <!-- count end -->
        </div>
        <!-- main end -->
    </div>
    <!-- isi end -->
 
<!-- div tutup flex awal -->  
</div>


<!-- Script para las gráficas -->
<script>
    // Gráfica de Usuarios
    var usersChart = new Chart(document.getElementById('usersChart'), {
        type: 'doughnut',
        data: {
            labels: ['Nuevos', 'Registrados'],
            datasets: [{
                data: [30, 65],
                backgroundColor: ['#00F0FF', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Gráfica de Comercios
    var commercesChart = new Chart(document.getElementById('commercesChart'), {
        type: 'doughnut',
        data: {
            labels: ['Nuevos', 'Registrados'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#FEC500', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
    const menuBtn = document.getElementById('menuBtn');
    const sideNav = document.getElementById('sideNav');

    menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle('hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
    });
</script>
</body>
</html>