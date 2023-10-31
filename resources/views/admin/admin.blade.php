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
    <!-- navbar -->
    <div class="bg-white text-black shadow w-full p-2 flex items-center justify-between">
        <div class="flex items-center">
            <div class="hidden md:flex items-center"> <!-- logo -->
                <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo" class="w-28 h-18 mr-2">
                <h2 class="font-bold text-xl">Soul of Indonesia</h2>
            </div>
            <div class="md:hidden flex items-center"> <!-- Se muestra solo en dispositivos pequeños -->
                <button id="menuBtn">
                    <i class="fas fa-bars text-black text-lg"></i> <!-- Ícono de menú -->
                </button>
            </div>
        </div>

        <!-- icon notif -->
        <div class="px-5 space-x-5">
            <button>
                <i class="fas fa-bell text-gray-500 text-lg"></i>
            </button>
            <!-- icon profil -->
            <button>
                <i class="fas fa-user text-gray-500 text-lg"></i>
            </button>
        </div>
    </div>

    <!-- ISI -->
    <div class="flex-1 flex">
        <!-- sidebar -->
        <div class="p-2 bg-white w-60 flex flex-col hidden md:flex" id="sideNav">
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
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="#">
                    <i class="fas fa-exchange-alt mr-2"></i>Produk
                </a>
            </nav>

            <!-- logout -->
            <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white mt-auto" href="#">
                <i class="fas fa-sign-out-alt mr-2"></i>Log out
            </a>

            <!-- garis batas -->
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

            <!-- Copyright  -->
            <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright SOI@2023</p>

        </div>

        <!-- area content -->
        <div class="flex-1 p-4">
            <!-- search bar -->
           <div class="bg-white w-full rounded">
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

            <!-- Wadah 4 bagian (diperkecil untuk perangkat kecil) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3  gap-4 mt-2 p-2">
                <!-- Bagian 1 - Bagan Pengguna (diperkecil untuk perangkat -->
            
                <!-- Bagian 1 - Galeri Batik -->
                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Galeri Batik</h2>
                        <div class="my1-"></div> <!-- ruang batas -->
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px  mb-6"></div> <!-- garis batas -->
                        <div class="chart-container" style="position: relative; height:150px; width:100%">
                            <!-- container gambar -->
                            <canvas id="usersChart"></canvas>
                        </div>
                    </div>

                <!-- Bagian 2 - Rekomendasi Wisata -->
                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Rekomendasi Wisata</h2>
                        <div class="my1-"></div> <!-- ruang batas -->
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px  mb-6"></div> <!-- garis batas -->
                        <div class="chart-container" style="position: relative; height:150px; width:100%">
                            <!-- container gambar -->
                            <canvas id="usersChart"></canvas>
                        </div>
                    </div>

                <!-- Bagian 3 - Produk -->
                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Produk</h2>
                        <div class="my1-"></div> <!-- ruang batas -->
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px  mb-6"></div> <!-- garis batas -->
                        <div class="chart-container" style="position: relative; height:150px; width:100%">
                            <!-- container gambar -->
                            <canvas id="usersChart"></canvas>
                        </div>
                    </div>
                   

                    <!-- Sección 3 - Tabla de Autorizaciones Pendientes (disminuida para dispositivos pequeños) -->
            <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-4">Autorizaciones Pendientes</h2>
                <div class="my-1"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Foto</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Nombre</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Juan Pérez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                        </tr>
                        <!-- Añade más filas aquí como la anterior para cada autorización pendiente -->
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Carlos López</td>
                            <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Laura Torres</td>
                            <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Ana Ramírez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Luis Martínez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                        </tr>
                    </tbody>
                    </table>
                    <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->
                    <div class="text-right mt-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                            Ver más
                        </button>
                    </div>
                </div>

                <!-- Sección 4 - Tabla de Transacciones (disminuida para dispositivos pequeños) -->
                     <div class="bg-white p-4 rounded-md mt-4">
    <h2 class="text-gray-500 text-lg font-semibold pb-4">Transacciones</h2>
    <div class="my-1"></div> <!-- Espacio de separación -->
    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
    <table class="w-full table-auto text-sm">
        <thead>
            <tr class="text-sm leading-normal">
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Nombre</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Fecha</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">Monto</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Carlos Sánchez</td>
                <td class="py-2 px-4 border-b border-grey-light">27/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1500</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Ana Torres</td>
                <td class="py-2 px-4 border-b border-grey-light">28/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2000</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Juan Ramírez</td>
                <td class="py-2 px-4 border-b border-grey-light">29/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1800</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                <td class="py-2 px-4 border-b border-grey-light">30/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2100</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Luis González</td>
                <td class="py-2 px-4 border-b border-grey-light">31/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1700</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Laura Pérez</td>
                <td class="py-2 px-4 border-b border-grey-light">01/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2400</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Pedro Hernández</td>
                <td class="py-2 px-4 border-b border-grey-light">02/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1950</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Sara Ramírez</td>
                <td class="py-2 px-4 border-b border-grey-light">03/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1850</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Daniel Torres</td>
                <td class="py-2 px-4 border-b border-grey-light">04/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2300</td>
            </tr>
            
        </tbody>
    </table>
    <!-- Botón "Ver más" para la tabla de Transacciones -->
    <div class="text-right mt-4">
        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
            Ver más
        </button>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
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