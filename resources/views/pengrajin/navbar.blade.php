<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- navbar start-->
    <div class="bg-white text-black shadow w-full p-2 flex items-center justify-between">
        <div class="flex items-center">
            <div class="hidden md:flex items-center px-4"> <!-- logo -->
                <img src="/img/logoSOI.png" alt="Logo" class="w-10 h-10 mr-2">
                <a href="/landingpage"><h2 class="font-bold text-xl">Soul of Indonesia</h2></a>
            </div>
        </div>
            <div class="px-5 space-x-5">
                <button>
                    <i class="fas fa-user text-gray-500 text-lg"></i>
                </button>
            </div>
        </div>
    <!-- navbar end-->

</body>
</html>