@extends('layouts.main3')

@section('content')
<div class="flex flex-col xl:flex-col h-auto w-full p-10 gap-7 justify-around">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between h-auto content-center">
            <p class="font-semibold">Total Artikel : 8</p>
            <a href="/tbartikel" class="p-2 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-book mr-2"></i>Tambah
                Artikel</a>
        </div>

    </div>
    <div class="flex px-0 xl:px-10 flex-col lg:flex-row flex-wrap gap-10 justify-between content-center">
        <div
            class="flex flex-col h-auto w-96 border  border-black shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <div class="flex h-auto w-full mb-2">
                <img src="{{ asset('img/bunga.jpeg')}}" class="h-40 object-cover w-full rounded-t-md" alt="">
            </div>
            <p class="text-md font-semibold overflow-ellipsis cursor-default">Bunga Layuu yang sangat layu</p>
            
            <p class="text-sm text-blue-600 mt-2 cursor-default">Tanggal Posting : 2024/07/23</p>
            <p class="text-md overflow-ellipsis break-all cursor-default" style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente qui labore, cumque at dolores rerum numquam laborum voluptas explicabo nisi repudiandae nihil necessitatibus eius deserunt impedit odit similique est! Consectetur?</p>
            <div class="flex flex-row justify-between mt-5">
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-search mr-2"></i>Lihat</button>
            <button class="p-2 px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-pen-nib mr-2"></i>Edit</button>
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-trash mr-2"></i>Hapus</button>
            </div>
        </div>

        <div
            class="flex flex-col h-auto w-96 border  border-black shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <div class="flex h-auto w-full mb-2">
                <img src="{{ asset('img/bunga.jpeg')}}" class="h-40 object-cover w-full rounded-t-md" alt="">
            </div>
            <p class="text-md font-semibold overflow-ellipsis cursor-default">Bunga Layuu yang sangat layu</p>
            
            <p class="text-sm text-blue-600 mt-2 cursor-default">Tanggal Posting : 2024/07/23</p>
            <p class="text-md overflow-ellipsis break-all cursor-default" style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente qui labore, cumque at dolores rerum numquam laborum voluptas explicabo nisi repudiandae nihil necessitatibus eius deserunt impedit odit similique est! Consectetur?</p>
            <div class="flex flex-row justify-between mt-5">
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-search mr-2"></i>Lihat</button>
            <button class="p-2 px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-pen-nib mr-2"></i>Edit</button>
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-trash mr-2"></i>Hapus</button>
            </div>
        </div>

        <div
            class="flex flex-col h-auto w-96 border  border-black shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <div class="flex h-auto w-full mb-2">
                <img src="{{ asset('img/bunga.jpeg')}}" class="h-40 object-cover w-full rounded-t-md" alt="">
            </div>
            <p class="text-md font-semibold overflow-ellipsis cursor-default">Bunga Layuu yang sangat layu</p>
            
            <p class="text-sm text-blue-600 mt-2 cursor-default">Tanggal Posting : 2024/07/23</p>
            <p class="text-md overflow-ellipsis break-all cursor-default" style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente qui labore, cumque at dolores rerum numquam laborum voluptas explicabo nisi repudiandae nihil necessitatibus eius deserunt impedit odit similique est! Consectetur?</p>
            <div class="flex flex-row justify-between mt-5">
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-search mr-2"></i>Lihat</button>
            <button class="p-2 px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-pen-nib mr-2"></i>Edit</button>
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-trash mr-2"></i>Hapus</button>
            </div>
        </div>

        <div
            class="flex flex-col h-auto w-96 border  border-black shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <div class="flex h-auto w-full mb-2">
                <img src="{{ asset('img/bunga.jpeg')}}" class="h-40 object-cover w-full rounded-t-md" alt="">
            </div>
            <p class="text-md font-semibold overflow-ellipsis cursor-default">Bunga Layuu yang sangat layu</p>
            
            <p class="text-sm text-blue-600 mt-2 cursor-default">Tanggal Posting : 2024/07/23</p>
            <p class="text-md overflow-ellipsis break-all cursor-default" style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente qui labore, cumque at dolores rerum numquam laborum voluptas explicabo nisi repudiandae nihil necessitatibus eius deserunt impedit odit similique est! Consectetur?</p>
            <div class="flex flex-row justify-between mt-5">
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-search mr-2"></i>Lihat</button>
            <button class="p-2 px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-pen-nib mr-2"></i>Edit</button>
            <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white"><i class="fas fa-trash mr-2"></i>Hapus</button>
            </div>
        </div>
       
    </div>




</div>

@endsection