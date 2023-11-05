<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
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
        @include('pengrajin.sidebar')

        <!-- main start -->
        <div class="flex-1 p-4">
            <!-- welcome start -->
            <div class="bg-white w-full rounded shadow">
                <div class="grid grid-cols-2">
                    <div class="p-auto m-auto">
                        <h1 class="font-semibold text-3xl text-yellow">HALLO!</h1>
                        <h3 class="font-regular text-xl py-6 text-yellow">Mari kelola produkmu!</h3>
                    </div>
                    <div class="p-auto m-auto">
                        <img src="/img/hiasan2.png" alt="imgadmin">
                    </div>
                </div>
            </div>
            <!-- welcome end -->

                <!-- isi start -->
    <div class="flex-1 flex">
        <div class="grid grid-cols-1 justify-start items-start w-full"> 
            <div class="m-10 relative overflow-x-auto shadow-md sm:rounded-lg w-400">  
            <div class="grid grid-cols-2 items-center bg-white text-yellow">
                <div>
                    <h2 class="p-5 text-xl font-semibold text-left text-yellow">Daftar Produk</h2>
                </div>
                <div class="flex justify-end pr-4">
                <button class="flex items-center w-auto px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-yellow rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-green-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Tambah</span>
                </button>
                </div>    
            </div>   
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">      
                <div class="p-4">
			        <label for="table-search" class="sr-only">Search</label>
			        <div class="relative mt-1">
				        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
						        xmlns="http://www.w3.org/2000/svg">
						    <path fill-rule="evenodd"
							    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							    clip-rule="evenodd"></path>
					        </svg>
				        </div>
				            <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5 w" placeholder="Search by title">
                </div>
                    <thead class="text-xs text-white uppercase bg-yellow">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stok
                        </th>
                        <th scope="col" class="pr-10 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-green-darkest whitespace-nowrap">
                            1001
                        </th>
                            <td class="px-6 py-4">
                                Batik Jamu Gendong Motif Tejo
                            </td>
                            <td class="px-6 py-4">
                                Rp. 90.000
                            </td>
                            <td class="px-6 py-4">
                                80
                            </td>
                            <td class="pr-10 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-green-darkest whitespace-nowrap">
                            1002
                        </th>
                            <td class="px-6 py-4">
                                Batik Mega Mendung
                            </td>
                            <td class="px-6 py-4">
                                Rp. 90.000
                            </td>
                            <td class="px-6 py-4">
                                80
                            </td>
                            <td class="pr-10 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                    </tr>
                    <tr class="bg-white ">
                        <th scope="row" class="px-6 py-4 font-medium text-green-darkest whitespace-nowrap">
                            1003
                        </th>
                            <td class="px-6 py-4">
                                Batik Parang
                            </td>
                            <td class="px-6 py-4">
                                Rp. 90.000
                            </td>
                            <td class="px-6 py-4">
                                80
                            </td>
                            <td class="pr-10 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
                <div class="flex justify-end pr-10">
                    <a href="#" class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
        </div>

    </div>
    <!-- isi end -->
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