<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awani News</title>

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="inset-0 w-full" id="app">
        <div class="flex flex-col h-full w-full inset-x-0 bg-slate-200">
            <nav class="flex flex-initial w-full h-20 bg-black shadow-md z-30">
                <div class="flex flex-row h-full w-full px-5 xl:px-20 ">
                    <div class="flex w-full h-full ">
                        <a href="" class="text-xl text-white self-center font-semibold">AWANI News</a>
                    </div>
                    <div class="hidden lg:flex flex-row justify-evenly w-full h-full ">

                        <a href="/" class="text-xl text-white hover:text-blue-400 self-center font-normal ">Home</a>
                        <a href="/berita" class="text-xl text-white  hover:text-blue-400 self-center font-normal ">Berita</a>
                        <a href="/kategori" class="text-xl text-white  hover:text-blue-400 self-center font-normal ">Kategori</a>

                    </div>
                    <div class="hidden lg:flex flex-row-reverse w-full h-full ">
                        <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-xl  hover:text-blue-400 text-white self-center font-semibold ">Login</button>
                    </div>
                    <div class="flex lg:hidden flex-row-reverse w-full h-full ">
                        <button data-collapse-toggle="navbar-default" type="button"
                            class="text-xl text-white self-center font-semibold " aria-controls="navbar-default"
                            aria-expanded="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
            <div id="navbar-default" class="hidden w-screen">
                <div data-aos="fade-in" class="flex flex-col lg:hidden w-full min-h-min shadow-sm bg-white ">
                    <a href="" class="text-md self-center font-normal my-2">Home</a>
                    <a href="" class="text-md self-center font-normal my-2">Berita</a>
                    <a href="" class="text-md self-center font-normal my-2">Kategori</a>
                    <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-md self-center font-normal my-2">Login</button>
                </div>
            </div>


            <div class="flex flex-col min-h-min w-screen flex-wrap object-cover  bg-white">

            @yield('content')
                <div
                    class="flex flex-col xl:flex-row gap-5 xl:gap-0 px-10 xl:px-40 py-5 inset-x-0 h-auto bg-black mt-10">
                    <div class="flex w-full min-h flex-col gap-3">
                        <p class="text-white text-xl font-semibold">Kategori Berita</p>
                        <a href="" class="text-white hover:text-blue-400">Berita Panas</a>
                        <a href="" class="text-white  hover:text-blue-400">Gosip Artis</a>
                        <a href="" class="text-white  hover:text-blue-400">Viral Terkini</a>
                        <a href="" class="text-white  hover:text-blue-400">Mancanegara</a>
                        <a href="" class="text-white  hover:text-blue-400">Dalam Negeri</a>
                    </div>
                    <div class="flex w-full min-h flex-col gap-3">
                        <p class="text-white text-xl font-semibold">Follow Social Media Kami</p>
                        <a href="" class="text-white  hover:text-blue-400">Instagram</a>
                        <a href="" class="text-white  hover:text-blue-400">Facebook</a>
                        <a href="" class="text-white  hover:text-blue-400">Youtube</a>
                        <a href="" class="text-white  hover:text-blue-400">Threads</a>
                    </div>
                    <div class="flex w-full min-h flex-col gap-3">
                        <p class="text-white text-xl font-semibold ">Ikuti Terus</p>
                        <a href="" class="text-white  hover:text-blue-400">Awani News</a>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Login Admin/Penulis
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="email@gmail.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login</button>
                    
                </form>
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