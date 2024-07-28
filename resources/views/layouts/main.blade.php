<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awani News</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body class="flex inset-0 flex-col min-h-screen w-screen overflow-x-hidden ">
    <div class="inset-0 min-h-screen w-screen" id="app">
        <div class="flex flex-col min-h-screen w-screen inset-x-0 bg-slate-200">
            <nav class="flex flex-initial w-screen h-20 bg-black shadow-md z-30">
                <div class="flex flex-row h-full w-full px-5 xl:px-20 ">
                    <div class="flex w-full h-full ">
                        <a href="/" class="text-xl text-white self-center font-semibold">AWANI News</a>
                    </div>
                    <div class="hidden lg:flex flex-row justify-evenly w-full h-full ">

                        <a href="/" class="text-lg text-white hover:text-blue-400 self-center font-normal ">Home</a>
                        <a href="{{route('all.berita')}}"
                            class="text-lg text-white  hover:text-blue-400 self-center font-normal ">Berita</a>
                        <a href="{{route('all.kategori')}}"
                            class="text-lg text-white  hover:text-blue-400 self-center font-normal ">Kategori</a>

                    </div>
                    <div class="hidden lg:flex flex-row-reverse w-full h-full ">
                        <form class="flex items-center max-w-sm mx-auto gap-5 float-right" method="GET"
                            action="{{ route('berita.search') }}">
                            <div class="relative w-full">

                                <input type="text" id="simple-search" name="query"
                                    class="bg-gray-400 border border-gray-600 text-gray-900 text-sm rounded-lg"
                                    placeholder="Cari Kata Kunci Berita..." required />
                            </div>
                            <button type="submit"
                                class="p-2.5 ms-2 text-sm font-medium self-center text-white bg-gray-800 rounded-md w-auto content-center hover:bg-gray-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                    <div class="hidden lg:flex flex-row-reverse w-full h-full ">
                        <button type="button" data-modal-target="authentication-modal"
                            data-modal-toggle="authentication-modal"
                            class="text-lg  hover:text-blue-400 text-white self-center font-semibold ">Login</button>
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
                <div data-aos="fadeIn" class="flex flex-col lg:hidden w-full min-h-min shadow-sm bg-white ">
                    <a href="/" class="text-md self-center font-normal my-2">Home</a>
                    <a href="{{route('all.berita')}}" class="text-md self-center font-normal my-2">Berita</a>
                    <a href="{{route('all.kategori')}}" class="text-md self-center font-normal my-2">Kategori</a>
                    <button type="button" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="text-md self-center font-normal my-2">Login</button>
                </div>
            </div>


            <div class="flex flex-col w-screen flex-wrap min-h-screen  bg-white">
                <div class="flex-grow">
                    @yield('content')

                </div>
                <div
                    class="flex flex-col xl:flex-row gap-5 xl:gap-0 px-10 xl:px-40 py-5 inset-x-0 b-0 sticky h-auto bg-black mt-10">
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
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Login Admin/Penulis
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{route('login')}}" method="post">
                        @csrf
                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="username" required />
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" placeholder="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    @vite('resources/js/app.js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @yield('scripts')
</body>

</html>