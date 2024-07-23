@extends('layouts.main')

@section('content')
<div class="flex  flex-grow min-h-min " style="
    width: -webkit-fill-available;
">
                    <div class="flex mx-0 xl:mx-40 mt-10 border-0 xl:border-2 shadow-none xl:shadow-md w-full rounded-lg">

                        <div class="flex flex-row mx-5 lg:mx-10 mt-10  p-0 md:p-5 w-full rounded-lg">
                            <div class="flex flex-col  w-full ">
                                <div
                                    class="flex flex-none w-96 xl:w-full pr-10 justify-between content-center truncate">
                                    <p class="text-lg ml-10 my-0 font-medium text-blue-800 float-left">TAGS</p>
                                    <a href="" class="text-md ml-10 my-0 font-normal hover:text-blue-500">virall</a>
                                    <a href="" class="text-md ml-10 my-0 font-normal hover:text-blue-500 ">random</a>
                                    <a href="" class="text-md ml-10 my-0 font-normal hover:text-blue-500 ">terbaru</a>
                                    <a href="" class="text-md ml-10 my-0 font-normal hover:text-blue-500 ">panas</a>
                                    <a href="" class="text-md ml-10 my-0 font-normal hover:text-blue-500 ">kesehatan</a>
                                    <a href="" class="text-md ml-10 my-0 font-normal hover:text-blue-500 ">virall</a>
                                    <a href="" class="text-md ml-10 my-0 font-normal hover:text-blue-500 ">virall</a>
                                </div>

                                <p class="text-lg ml-10 my-5 font-medium text-blue-800">Berita Terbaru</p>
                                <div 
                                    class="flex flex-col md:flex-row mx-10 min-h-min rounded-md border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                    <img src="{{ asset('img/bunga.jpeg')}}"
                                        class="h-60 object-cover w-full md:w-60 rounded-l-md" alt="">
                                    <div class="flex w-96 h-full flex-col p-5">
                                        <p class="text-lg font-semibold uppercase mb-5 cursor-default"
                                            style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                            Bunga yang bersemayam diatas senja</p>
                                        <p class="text-md font-normal mb-5 cursor-default"
                                            style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At obcaecati
                                            maiores a. Ex quis dolores laborum id exercitationem quo quaerat animi
                                            molestias aliquid iusto eum, commodi voluptate, praesentium asperiores
                                            adipisci.</p>
                                        <p
                                            class="text-sm cursor-default text-blue-400 overflow-hidden font-normal truncate mb-2">
                                            Tanggal
                                            Posting : 2024/05/12</p>

                                        <a href=""
                                            class="text-md text-blue-800 hover:text-blue-500 overflow-hidden font-normal truncate">Selengkapnya..</a>

                                    </div>
                                </div>


                            </div>
                            <div class="hidden lg:flex flex-col w-6/12 rounded-lg">
                                <p class="hidden xl:flex text-xl w-full text-left ml-10">Kategori</p>
                                <div class="flex h-auto w-auto m-10 mt-5 border-t ">
                                    <ul class="flex w-full flex-col  text-gray-600">
                                        <li
                                            class="p-2 border-b w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                            <a href="" class="hover:text-blue-700">Artis (20)</a>
                                        </li>
                                        <li
                                            class="p-2 border-b w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                            <a href="" class="hover:text-blue-700">Viral (10)</a>
                                        </li>
                                        <li
                                            class="p-2 border-b w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                            <a href="" class="hover:text-blue-700">Lokal (5)</a>
                                        </li>
                                        <li
                                            class="p-2 border-b w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                            <a href="" class="hover:text-blue-700">Mancanegara (2)</a>
                                        </li>
                                        <li
                                            class="p-2 border-b w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                            <a href="" class="hover:text-blue-700">Crypto (1)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex flex-col h-auto w-auto m-10 mt-0 border shadow-sm transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                    <div
                                        class="flex flex-col m-5 h-auto w-auto bg-gray-900 rounded-t-md justify-center">
                                        <p class="text-xl text-white w-full text-center">Berita Viral</p>
                                    </div>
                                    <a href="">
                                        <div class="flex flex-col m-5 mt-0 h-auto w-auto justify-center">
                                            <img src="{{ asset('img/bunga.jpeg')}}"
                                                class="h-24 object-cover w-full md:w-full rounded-b-md" alt="">
                                        </div>
                                        <div class="flex flex-col m-5 mt-0 h-auto w-auto justify-center">
                                            <p class="text-md w-full font-medium"
                                                style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                                Bunga yang bersemayam diatas senja</p>
                                            <p class="text-md w-full "
                                                style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At obcaecati
                                                maiores a. Ex quis dolores laborum id exercitationem quo quaerat animi
                                                molestias aliquid iusto eum, commodi voluptate, praesentium asperiores
                                                adipisci.</p>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div
                                            class="flex flex-col m-5 mt-0 h-auto w-auto bg-blue-900 hover:bg-blue-800 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100 rounded-md justify-center">
                                            <p class="text-md text-white w-full text-center">Lihat Lebih Lengkap..</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="flex flex-col h-auto w-auto m-10 mt-0 border shadow-sm transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                    <a href="">
                                        <div class="flex flex-col m-5 h-auto w-auto justify-center">
                                            <img src="{{ asset('img/adss.jpeg')}}"
                                                class="h-auto object-fit w-full md:w-full rounded-md" alt="">
                                        </div>
                                       
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

@endsection