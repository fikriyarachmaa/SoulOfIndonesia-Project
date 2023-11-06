<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Biodata | Pengrajin</title>
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

                    <!-- div grid bagi dua start -->
        <div class="grid grid-cols-1 gap-4 mt-2 p-2">
            <!-- kolom edit profile start -->
            <div class="flex flex-col justify-start items-center">
            <div class="bg-white p-4 rounded-md shadow m-4 w-3/4">
            <p class="text-black text-2xl font-semibold pb-1 text-center">Biodata</p>           
            <form>
                <div class="mb-2">
                    <label for="nama" class="pt-2 block mb-2 text-sm font-medium text-green-dark">Nama</label>
                    <input type="nama" id="nama" class="bg-cream w-full border border-gray-300 text-green-dark text-sm rounded-md block w-full p-2.5 border-yellow dark:placeholder-green-pastel" placeholder="Salma Novita" required>
                </div>
                <div class="mb-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-green-dark">Email</label>
                    <input type="email" id="email" class="bg-cream w-full border border-gray-300 text-green-dark text-sm rounded-md block w-full p-2.5 border-yellow dark:placeholder-green-pastel" placeholder="salmanovita95@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="block mb-2 text-sm font-medium text-green-dark">Jenis Kelamin</label>
                    <select class="bg-cream w-full border border-gray-300 text-green-dark text-sm rounded-md block w-full p-2.5 border-yellow dark:placeholder-green-pastel" 
                            value={selectedValue} onChange={handleSelectChange}>
                        {genre.map((item, i) => (
                            <option value={item} key={i}>
                                Perempuan 
                            </option>
                            <option value={item} key={i}>
                                Laki-Laki 
                            </option>
                        ))}
                    </select>
                </div>
                <div class="mb-2">
                    <label for="nama" class="pt-2 block mb-2 text-sm font-medium text-green-dark">Nama Usaha</label>
                    <input type="nama" id="nama" class="bg-cream w-full border border-gray-300 text-green-dark text-sm rounded-md block w-full p-2.5 border-yellow dark:placeholder-green-light" placeholder="BatikOenik" required>
                </div>
                <div class="mb-2">
                    <label for="kontak" class="pt-2 block mb-2 text-sm font-medium text-green-dark">Kontak</label>
                    <input type="kontak" id="kontak" class="bg-cream w-full border border-gray-300 text-green-dark text-sm rounded-md block w-full p-2.5 border-yellow dark:placeholder-green-light" placeholder="0851-2345-6789" required>
                </div>
                <div class="mb-2">
                    <label for="password" class="pt-2 block mb-2 text-sm font-medium text-green-dark">Kata Sandi</label>
                    <input type="password" id="password" class="bg-cream w-full border border-gray-300 text-green-dark text-sm rounded-md block w-full p-2.5 border-yellow dark:placeholder-green-light" placeholder="**********" required>
                </div>
        
            </form>
            <div class="text-center pt-4">
                <a href="/pengrajin/profile" class="text-base font-semibold text-white bg-yellow py-1 px-6 rounded-lg hover:bg-green-darkest hover:text-green-pastel transition duration-300 ease-in-out">Edit</a>
            </div>

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