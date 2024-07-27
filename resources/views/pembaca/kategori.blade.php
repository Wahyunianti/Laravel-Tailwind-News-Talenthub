@extends('layouts.main')

@section('content')
<div class="flex  flex-grow " style="
    width: -webkit-fill-available;
">
    <div class="flex mx-0 xl:mx-40 mt-10 border-0 xl:border-2 shadow-none xl:shadow-md w-full rounded-lg">

        <div class="flex flex-col mx-5 lg:mx-10 mt-10  p-0 md:p-5 w-full rounded-lg">

        @foreach ($ktg as $k)
        @if ($k->count() > 0)
            @php
                $kategoriNama = $k->first()->kategori_nama;
                $artikels = $k->take(3);
            @endphp

            <div class="flex flex-col w-full">
                <p class="text-lg font-medium text-blue-800">{{ $kategoriNama }}</p>
                <a href="{{ route('sub.kategori', ['id' => $k->first()->kategori_id]) }}" class="text-sm mb-5 font-medium text-blue-800">Lihat Selengkapnya..</a>
                <div class="flex flex-col xl:flex-row flex-wrap justify-start content-center gap-8 px-0">
                    @foreach ($artikels as $atk)
                        @if ($artikels->count()  > 0)
                        <a href="">
                            <div class="flex flex-col min-h-min rounded-md w-80 border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                @if($atk->artikel_foto)
                                    <img src="{{ asset('uploads/' . $atk->artikel_foto) }}" alt="Nama" class="h-60 object-cover w-full rounded-md">
                                @else
                                    <img src="{{ asset('img/bunga.jpeg')}}" class="h-60 object-cover w-full rounded-md" alt="">
                                @endif
                                <div class="flex w-full h-full flex-col p-5 overflow-x-hidden">
                                    <p class="text-md w-full font-semibold uppercase mb-5 cursor-default"
                                        style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                        {{ $atk->artikel_judul }}</p>
                                    <div class="text-md font-normal w-full mb-5 cursor-default"
                                        style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2;">
                                        {!! $atk->artikel_konten !!}</div>
                                </div>
                            </div>
                        </a>
                        @endif
                    @endforeach

                    <a href="{{ route('sub.kategori', ['id' => $k->first()->kategori_id]) }}" class="hidden xl:flex self-center">
                        <svg class="animate-bounce w-8 h-8" fill="pink" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"></circle>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    @endforeach



        </div>

    </div>

</div>

@endsection