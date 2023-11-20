<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dashboard | Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        
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
<div class="flex flex-col h-screen bg-cream">
    @include('admin.navbar')
    <!-- isi start -->
    <div class="flex-1 flex">
        @include('admin.sidebar')

        <!-- main start -->
        <div class="flex-1 p-4">
            <!-- welcome start -->
            <div class="bg-white w-full rounded shadow">
                <div class="grid grid-cols-2">
                    <div class="p-auto m-auto">
                        <h1 class="font-semibold text-3xl">Selamat Datang {{ auth()->user()->name }}!</h1>
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
                    <h2 class="text-yellow  text-5xl font-semibold pb-1">{{ $countArtikel }}</h2>
                    <p class="text-gray-500 text-medium font-regular pb-1 text-right">Artikel terposting</p>
                </div>
                <!-- Bagian 1 - Galeri Batik end-->

                <!-- Bagian 2 - Rekomendasi wisata start-->
                <div class="bg-white p-4 rounded-md shadow">
                    <h2 class="text-black text-2xl font-bold pb-1 text-right">Rekomendasi Wisata</h2>
                    <div class="my1-"></div> <!-- ruang batas -->
                    <h2 class="text-yellow  text-5xl font-semibold pb-1">{{ $countRekom }}</h2>
                    <p class="text-gray-500 text-medium font-regular pb-1 text-right">Artikel terposting</p>
                </div>
                <!-- Bagian 2 - Rekomendasi wisata end-->

                <!-- Bagian 3 - Produk start-->
                <div class="bg-white p-4 rounded-md shadow">
                    <h2 class="text-black text-2xl font-bold pb-1 text-right">Produk</h2>
                    <div class="my1-"></div> <!-- ruang batas -->
                    <h2 class="text-yellow  text-5xl font-semibold pb-1">{{ $countProduk }}</h2>
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