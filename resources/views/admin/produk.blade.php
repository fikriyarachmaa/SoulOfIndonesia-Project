<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk | Admin</title>
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
<!-- div awal -->
<div class="flex flex-col h-screen bg-cream">
    @include('admin.navbar')
    <!-- isi start -->
    <div class="flex-1 flex">
        @include('admin.sidebar')
        <div class="grid grid-cols-1 justify-start items-start w-9/12"> 
            <div class="m-10 relative overflow-x-auto shadow-md sm:rounded-lg w-400">  
            <div class="grid grid-cols-1 items-center bg-white dark:text-white dark:bg-gray-800">
                <div>
                    <h2 class="p-5 text-xl font-semibold text-left text-yellow">
                        Produk
                    </h2>
                </div>
            </div>   
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-yellow">
            <tr>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-20 p-4">
                    <img src="{{ asset($produk->foto) }}" alt="blousesandra">
                </td>
                <td class="px-6 py-4 font-medium text-green-darkest whitespace-nowrap">
                    {{ $produk->nama }}
                </td>
                <td class="px-6 py-4 font-medium text-green-darkest whitespace-nowrap">
                    Rp {{ number_format($produk->harga, 0, ',', '.') }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('admin.produk.approve', $produk->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Approve</a>
                    <a href="{{ route('admin.produk.notapprove', $produk->id) }}" class="font-medium text-rose-600 dark:text-rose-600 hover:underline">Not approve</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
                <div class="flex justify-end pr-10">
                    <a href="#" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-yellow border-gray-300 rounded-lg hover:bg-green-dark hover:text-cream">
                        Next
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
        </div>

    </div>
    <!-- isi end -->

<!-- div akhir -->
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