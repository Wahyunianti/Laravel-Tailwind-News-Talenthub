@extends('layouts.main')

@section('content')
<div class="flex  flex-grow min-h-min " style="
    width: -webkit-fill-available;
">
    <div class="flex mx-0 xl:mx-40 mt-10 border-0 xl:border-2 shadow-md w-full rounded-lg">

        <div class="flex flex-row mx-5 lg:mx-10 mt-10  p-0 md:p-5 w-full rounded-lg">


            <div class="flex flex-col flex-grow-1 w-full ">
                <div class="flex flex-row">
                    <div class="flex flex-col w-full h-auto p-10 pt-0">
                        <p class="text-xl font-semibold mb-2 w-full">Berita Pagi-pagi Ambyar Hari ini</p>
                        <div class="flex flex-row gap-2 text-blue-900">
                            <p>Tanggal Posting : 2024/07/23</p>
                            <p>Penulis : Syakira</p>
                        </div>
                        <img src="{{ asset('img/kdrt.jpg')}}"
                            class="max-h-60 object-cover w-full rounded-md shadow-sm  my-5"
                            alt="">
                        <div class="flex flex-col w-full">
                            <p class="break-all">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tempore soluta eos cum,
                                at facilis error doloremque rerum! Deleniti illum cum aut autem sit ex expedita error
                                culpa commodi similique!</p>
                            <p class="break-all">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tempore soluta eos cum,
                                at facilis error doloremque rerum! Deleniti illum cum aut autem sit ex expedita error
                                culpa commodi similique!</p>

                        </div>

                        <div class="flex flex-col w-full h-auto mt-20">
                            <div class="flex flex-row w-full gap-2 h-auto justify-between">
                                <input class="w-full rounded-md" placeholder="Beri Komentar" type="text" name="komentar" id="">
                                <button class="bg-black hover:bg-gray-900 rounded-md text-white px-5" type="button">Kirim</button>
                            </div>
                        </div>
                        <div class="flex flex-col w-full h-auto mt-5">
                            <div class="flex flex-row w-full gap-3 h-auto justify-start">
                            <img src="{{ asset('img/profile-user.png')}}"
                            class="max-h-30 object-cover w-30 "   alt="">
                            <div class="flex flex-col gap-1">
                                <p class="text-sm font-semibold">Anonymous</p>
                                <p class="text-sm truncate">Ga percaya gue sama beritanya</p>
                                <div class="flex flex-row gap-1">
                                <p class="text-xs font-semibold text-gray-600">2023/07/23</p>
                                <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-xs font-semibold text-gray-800">Balas</button>        
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="flex flex-col w-full h-auto mt-5 pl-10">
                        <p class="text-xs font-semibold text-gray-600 mb-2">Balasan --</p>
                            <div class="flex flex-row w-full gap-3 h-auto justify-start">
                            <img src="{{ asset('img/profile-user.png')}}"
                            class="max-h-30 object-cover w-30 "   alt="">
                            <div class="flex flex-col gap-1">
                                <p class="text-sm font-semibold">Anonymous</p>
                                <p class="text-sm truncate">Jangan ngomong gitu</p>
                                <div class="flex flex-row gap-1">
                                <p class="text-xs font-semibold text-gray-600">2023/07/23</p>        
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden xl:flex flex-col w-1/3 ">
                        <a href="">
                    <img src="{{ asset('img/adss2.png')}}"
                            class="h-auto object-cover w-full rounded-md "
                            alt="">
                            </a>
                    </div>

                </div>
            </div>


        </div>

    </div>

</div>

<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Balasan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Balasan</label>
                        <input type="text" name="balasan" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketikkan balasan.." required="">
                    </div>
                   
                </div>
                <button type="submit" class="w-full text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Kirim</button>

            </form>
        </div>
    </div>
</div> 

@endsection