@extends('layouts.main2')

@section('content')
<div class="flex flex-col xl:flex-row h-auto w-full p-10 gap-7 justify-around">
    <div class="flex flex-col h-40 w-full border shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
        <div class="flex flex-row justify-between h-full">
            <i class="fas fa-feather-alt text-4xl"></i>
            <p class="text-lg font-semibold">Total Penulis</p>
        </div>
        <p class="text-3xl font-semibold text-right">20</p>
    </div>
    <div class="flex flex-col h-40 w-full border shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
        <div class="flex flex-row justify-between h-full">
            <i class="fas fa-bookmark text-4xl"></i>
            <p class="text-lg font-semibold">Total Artikel</p>
        </div>
        <p class="text-3xl font-semibold text-right">16</p>
    </div>
    <div class="flex flex-col h-40 w-full border shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
        <div class="flex flex-row justify-between h-full">
            <i class="fas fa-book-reader text-4xl"></i>
            <p class="text-lg font-semibold">Total Interaksi</p>
        </div>
        <p class="text-3xl font-semibold text-right">10</p>
    </div>
   


</div>

@endsection