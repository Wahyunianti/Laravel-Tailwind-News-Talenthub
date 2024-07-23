@extends('layouts.main')

@section('content')
<div class="flex  flex-grow min-h-min " style="
    width: -webkit-fill-available;
">
    <div class="flex mx-0 xl:mx-40 mt-10 border-0 xl:border-2 shadow-md w-full rounded-lg">

        <div class="flex flex-row mx-5 lg:mx-10 mt-10  p-0 md:p-5 w-full rounded-lg">


            <div class="flex flex-col  w-full ">
                <p class="text-lg ml-10 mb-5 font-medium text-blue-800">Semua Berita</p>
                <div class="flex flex-row flex-wrap justify-center gap-8">

                    <a href="/swberita">
                        <div
                            class="flex flex-col min-h-min rounded-md w-80 border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                            <img src="{{ asset('img/bunga.jpeg')}}" class="h-60 object-cover w-full rounded-l-md"
                                alt="">
                            <div class="flex w-96 h-full flex-col p-5">
                                <p class="text-md  w-60 font-semibold uppercase mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                    Bunga yang bersemayam diatas senja</p>
                                <p class="text-md font-normal w-60 mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2;">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At obcaecati
                                    maiores a. Ex quis dolores laborum id exercitationem quo quaerat animi
                                    molestias aliquid iusto eum, commodi voluptate, praesentium asperiores
                                    adipisci.</p>


                            </div>
                            
                        </div>
                        
                    </a>

                    
                    <a href="">
                        <div
                            class="flex flex-col min-h-min rounded-md w-80 border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                            <img src="{{ asset('img/bunga.jpeg')}}" class="h-60 object-cover w-full rounded-l-md"
                                alt="">
                            <div class="flex w-96 h-full flex-col p-5">
                                <p class="text-md  w-60 font-semibold uppercase mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                    Bunga yang bersemayam diatas senja</p>
                                <p class="text-md font-normal w-60 mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2;">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At obcaecati
                                    maiores a. Ex quis dolores laborum id exercitationem quo quaerat animi
                                    molestias aliquid iusto eum, commodi voluptate, praesentium asperiores
                                    adipisci.</p>


                            </div>
                            
                        </div>
                        
                    </a>

                    
                    <a href="">
                        <div
                            class="flex flex-col min-h-min rounded-md w-80 border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                            <img src="{{ asset('img/bunga.jpeg')}}" class="h-60 object-cover w-full rounded-l-md"
                                alt="">
                            <div class="flex w-96 h-full flex-col p-5">
                                <p class="text-md  w-60 font-semibold uppercase mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                    Bunga yang bersemayam diatas senja</p>
                                <p class="text-md font-normal w-60 mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2;">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At obcaecati
                                    maiores a. Ex quis dolores laborum id exercitationem quo quaerat animi
                                    molestias aliquid iusto eum, commodi voluptate, praesentium asperiores
                                    adipisci.</p>


                            </div>
                            
                        </div>
                        
                    </a>

                    <a href="">
                        <div
                            class="flex flex-col min-h-min rounded-md w-80 border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                            <img src="{{ asset('img/bunga.jpeg')}}" class="h-60 object-cover w-full rounded-l-md"
                                alt="">
                            <div class="flex w-96 h-full flex-col p-5">
                                <p class="text-md  w-60 font-semibold uppercase mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                    Bunga yang bersemayam diatas senja</p>
                                <p class="text-md font-normal w-60 mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2;">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At obcaecati
                                    maiores a. Ex quis dolores laborum id exercitationem quo quaerat animi
                                    molestias aliquid iusto eum, commodi voluptate, praesentium asperiores
                                    adipisci.</p>


                            </div>
                            
                        </div>
                        
                    </a>
                </div>


            </div>


        </div>

    </div>

</div>

@endsection