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
                <a class="block text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/pengrajin/pengrajin">
                    <i class="fas fa-home mr-2"></i>Dashboard
                </a>
                <a class="flex items-center text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/pengrajin/biodata">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0Zm0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5H8Z" clip-rule="evenodd"/>
                        </svg>
                    </i>
                    <span class="ml-1">Profile</span>
                </a>
                
                <a class="flex items-center text-green-dark py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="/pengrajin/produk">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 48 48">
                            <g fill="none" stroke="#000" stroke-linejoin="round" stroke-width="4">
                                <path d="M44 14L24 4L4 14V34L24 44L44 34V14Z"/>
                                <path stroke-linecap="round" d="M4 14L24 24"/>
                                <path stroke-linecap="round" d="M24 44V24"/>
                                <path stroke-linecap="round" d="M44 14L24 24"/>
                                <path stroke-linecap="round" d="M34 9L14 19"/>
                            </g>
                        </svg>
                    </i>
                    <span class="ml-1">Produk</span>
                </a>   
            </nav>
            
        
            <!-- logout start -->
            <a class="block text-green-dark py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white mt-auto" href="#">
                <i class="fas fa-sign-out-alt mr-2"></i>Log out
            </a>
                <!-- garis batas -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
                <!-- Copyright start -->
                <p class="mb-1 px-5 py-3 text-left text-xs text-green-dark">Copyright SOI@2023</p>
                <!-- Copyright end -->
            <!-- logout end -->
        </div>
        <!-- sidebar end -->
</body>
</html>