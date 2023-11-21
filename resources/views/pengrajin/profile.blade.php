<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Pengrajin</title>
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
<body class="bg-gray-100">
<!-- div awal -->
<div class="flex flex-col h-screen">
    @include('pengrajin.navbar')
    <!-- isi start -->
    <div class="flex-1 flex ">
        @include('pengrajin.sidebar')
        <!-- div grid bagi dua start -->
        <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-4 mt-2 p-2">
            <!-- kolom edit profile start -->
            <div class="flex flex-col justify-start items-center">
            <div class="bg-white p-4 rounded-md shadow m-4 w-96">
            <p class="text-green-dark text-2xl font-semibold pb-1 text-left">Edit Profile</p>           
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>
             
            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')
                <div class="mb-2">
                    <x-input-label for="name" :value="__('Name')" class="pt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                    <x-text-input id="name" name="name" type="text" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div class="mb-2">
                    <x-input-label for="email" :value="__('Email')" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                    <x-text-input id="email" name="email" type="email" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                    <button type="submit" class="mb-2 text-white bg-green-dark hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
            </form>
            <!-- garis batas -->
            <div class="bg-green-light h-px mt-2"></div>
            <!-- garis batas -->
            <p class="text-green-dark text-2xl font-semibold pb-1 pt-2 text-left">Password</p>           
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
                <div class="mb-2">
                    <x-input-label for="current_password" :value="__('Password Sekarang')" class="pt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                    <x-text-input id="current_password" name="current_password" type="password" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
                <div class="mb-2">
                    <x-input-label for="password" :value="__('Password Baru')" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                    <x-text-input id="password" name="password" type="password" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
                    <button type="submit" class="mb-2 text-white bg-green-dark hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center">Ubah password</button>
            </form>
            </div>
            </div>
            <!-- kolom edit profile end -->  

            <!-- kolom kotak profile start -->
            <div class="flex flex-col justify-start items-center h-[100vh] pt-4 px-4">
            <div class="relative flex flex-col items-center rounded-[10px] border-[1px] border-gray-200 w-[400px] mx-auto p-4 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover" >
                    <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png' class="absolute flex h-32 w-full justify-center rounded-xl bg-cover"> 
                    <div class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                        <img class="h-full w-full rounded-full" src='/img/logo.png' alt="" />
                    </div>
                </div> 
                <div class="mt-16 flex flex-col items-center">
                    <h4 class="text-xl font-bold text-gray-600">{{ auth()->user()->name }}</h4>
                    <p class="text-base font-normal text-gray-600">Pengrajin</p>
                    <p class="text-base font-normal text-gray-600 pt-4">{{ auth()->user()->email }}</p>
                </div> 
            </div>  
            </div>
            <!-- kolom kotak profile end -->

        </div>    
        <!-- div grid bagi dua end -->
    </div>




<!-- div tutup awal -->
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