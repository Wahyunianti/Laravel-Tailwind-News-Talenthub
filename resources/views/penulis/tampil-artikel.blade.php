@extends('layouts.main3')

@section('content')
<div class="flex flex-col xl:flex-col h-auto w-full px-5 xl:px-20 gap-7 justify-around">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between h-auto content-center mb-5">
            <p class="font-semibold text-lg">Artikel</p>
            <a class="p-1 cursor-pointer  px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-arrow-left mr-2 text-sm"></i>Kembali</a>
        </div>
        <div class="flex flex-row flex-grow-1 h-auto w-full border border-black rounded-md shadow-sm p-5 xl:p-10 gap-5">

        <div class="flex flex-col w-full h-auto p-5 xl:p-10 pt-0">
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

                    </div>
        </div>
    </div>
</div>

@endsection