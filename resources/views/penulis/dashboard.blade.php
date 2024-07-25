@extends('layouts.main3')

@section('content')
<div class="flex flex-col xl:flex-col h-auto w-full p-10 pt-0 gap-7 justify-around">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between h-auto content-center">
            <p class="font-semibold">Total Artikel : {{$count}}</p>
            <a href="{{route('tambah.artikel')}}" class="p-2 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100"><i class="fas fa-book mr-2"></i>Tambah
                Artikel</a>
        </div>

    </div>
    <div class="flex px-0 xl:px-10 flex-col lg:flex-row flex-wrap gap-10 justify-start content-center flex-grow-1">
       
    @foreach ($atk as $a )

    <div class="flex flex-col h-auto w-96 border border-black shadow-sm rounded-md p-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
    <div class="flex h-auto w-full mb-2">
    @if($a->foto)
                            <img src="{{ asset('uploads/' . $a->foto) }}" alt="Nama"
                            class="h-40 object-cover w-full rounded-t-md">
                            @else
                            <img src="{{ asset('img/bunga.jpeg')}}" class="h-40 object-cover w-full rounded-t-md" alt="">
                            @endif

    </div>
    <p class="text-md font-semibold overflow-ellipsis cursor-default">{{ $a->judul }}</p>
    <p class="text-sm text-blue-600 mt-2 cursor-default">Tanggal Posting : {{ $a->updated_at }}</p>
    <div class="text-md overflow-ellipsis break-all cursor-default truncate" style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">
        {!! $a->konten !!}
</div>
    <div class="flex flex-row justify-between mt-5 b-0">
        <a href="{{ route('show.artikel', ['id' => $a->id]) }}" class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <i class="fas fa-search mr-2"></i>Lihat
        </a>
        <a href="{{ route('tampil.artikel', ['id' => $a->id]) }}" class="p-2 px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <i class="fas fa-pen-nib mr-2"></i>Edit
        </a>
        <form action="{{ route('artikel.destroy', $a->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2 px-4 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <i class="fas fa-trash mr-2"></i>Hapus
        </button>
                                </form>
        
    </div>
</div>

    @endforeach
       
    </div>




</div>

@endsection