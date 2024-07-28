@extends('layouts.main3')

@section('content')
<div class="flex flex-col xl:flex-col h-auto w-full px-0 xl:px-20 gap-7 justify-around">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between h-auto content-center mb-5">
            <p class="font-semibold text-lg">Artikel</p>
            <a href="{{ route('dashboard.penulis') }}" class="p-1 cursor-pointer  px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-arrow-left mr-2 text-sm"></i>Kembali</a>
        </div>
        <div class="flex flex-row flex-grow-1 h-auto w-full border border-black rounded-md shadow-sm p-5 xl:p-10 gap-5">

        <div class="flex flex-col w-full h-auto p-0 xl:p-10 pt-0">
                        <p class="text-xl font-semibold mb-2 w-full">{{$atk->judul}}</p>
                        <div class="flex flex-row gap-2 text-blue-900">
                            <p>Tanggal Posting : {{$atk->updated_at}}</p>
                            <p>Penulis : {{$atk->users->nama}}</p>
                            
                        </div>
                        
                            @if($atk->foto)
                            <img src="{{ asset('uploads/' . $atk->foto) }}" alt="Nama"
                            class="h-auto object-cover max-w-200 self-center rounded-md shadow-sm  my-5">
                            @else
                            <img src="{{ asset('img/kdrt.jpg')}}"
                            class="max-h-60 object-cover w-full rounded-md shadow-sm  my-5"
                            alt="">
                            @endif
                        <div class="flex flex-col w-full mt-10">
                        {!! $atk->konten !!}
                        </div>

                    </div>
        </div>
    </div>
</div>

@endsection