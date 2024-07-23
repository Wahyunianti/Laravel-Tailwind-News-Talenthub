@extends('layouts.main3')

@section('content')
<div class="flex flex-col xl:flex-col h-auto w-full px-20 gap-7 justify-around">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between h-auto content-center mb-5">
            <p class="font-semibold text-lg">Tambah Artikel</p>
            <a class="p-1 cursor-pointer  px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-arrow-left mr-2 text-sm"></i>Kembali</a>
           
        </div>
        <div class="flex flex-row flex-grow-1 h-auto w-full border border-black rounded-md shadow-sm p-10 gap-5">
            <div class="flex flex-col w-full">
                <label for="" class="my-2" >Judul Artikel</label>
                <input type="text" name="judul" placeholder="judul artikel" id="" class="rounded-md">
                <label for="" class="my-2">Kategori Artikel</label>
                <select name="kategoris_id" class="rounded-md cursor-pointer">
                    <option selected>Pilih kategori</option>
                    <option value="1">Gosip</option>
                    <option value="2">Tetangga</option>
                </select>
                <label for="" class="my-2">Tag Artikel</label>
                <input type="text" name="tags" placeholder="namatag, namatag, namatag" id="" class="rounded-md">
                <label for="" class="my-2">Thumbnail</label>
                <input type="file" class="border border-gray-600 rounded-md" name="foto" id="" class="rounded-md">
            </div>
            <div class="flex flex-col w-full">
                <label for="" class="my-2">Konten</label>
                <textarea name="" id=""></textarea>
                <button
                    class="p-2 px-4 mt-5 self-end  w-40 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">Simpan</button>
            </div>


        </div>


    </div>


</div>

@endsection