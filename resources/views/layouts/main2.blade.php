<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awani News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="inset-0 w-full" id="app">
        <div class="flex flex-row w-full h-auto">
            <div id="navbar-default" class=" z-40 absolute xl:static w-60 h-screen bg-slate-50 border-r">
                <div class="flex flex-col h-auto w-full justify-center  pt-2 px-3">
                    <div class="flex flex-row justify-between">
                        <a href="" class="text-md font-semibold w-full"><i class="fas fa-newspaper mr-2"></i>AWANI
                            PORTAL</a>

                        <button data-collapse-toggle="navbar-default" type="button"
                            class="flex xl:hidden text-xl text-black self-center font-semibold w-full justify-end"
                            aria-controls="navbar-default" aria-expanded="false">
                            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18"></path>
                            </svg>

                        </button>
                    </div>

                    <ul class=" flex flex-col w-full h-auto mt-10">
                        <a href="/admin" class="text-md font-semibold w-auto">
                            <li class="hover:bg-slate-100 w-full py-2"><i class="fas fa-home mr-2"></i>Dashboard</li>
                        </a>
                        <a href="/user" class="text-md font-semibold w-auto">
                            <li class="hover:bg-slate-100 w-full py-2"><i class="fas fa-user mr-2"></i>Pengguna Aplikasi
                            </li>
                        </a>
                        <a href="" class="text-md font-semibold w-auto">
                            <li class="hover:bg-slate-100 w-full py-2"><i
                                    class="fas fa-window-restore mr-2"></i>Kategori Berita</li>
                        </a>
                        <a href="" class="text-md font-semibold w-auto">
                            <li class="hover:bg-slate-100 w-full py-2"><i class="fas fa-weight-hanging mr-2"></i>Bobot
                                Berita</li>
                        </a>
                        <a href="" class="text-md font-semibold w-auto">
                            <li class="hover:bg-slate-100 w-full py-2"><i class="fas fa-ad mr-2"></i>Iklan</li>
                        </a>
                    </ul>

                </div>
            </div>
            <div class="flex flex-col w-full h-auto">
                <nav class="flex flex-row w-full h-10 bg-slate-50 border-b justify-between px-10">
                    <button data-collapse-toggle="navbar-default" type="button"
                        class="text-xl text-black self-center font-semibold " aria-controls="navbar-default"
                        aria-expanded="false">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <a href="" class="text-md font-semibold content-center">Logout</a>
                </nav>

                <div class="flex flex-col h-auto w-full p-5 pt-10 xl:p-20">
                    @yield('content')


                </div>
            </div>


        </div>



    </div>


    @vite('resources/js/app.js')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>