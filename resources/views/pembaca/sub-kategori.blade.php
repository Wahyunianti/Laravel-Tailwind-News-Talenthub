@extends('layouts.main')

@section('content')
<div class="flex  flex-grow min-h-min max-w" style="
    width: -webkit-fill-available;
">
    <div class="flex mx-0 xl:mx-40 mt-10 border-0 xl:border-2 shadow-none xl:shadow-md w-full rounded-lg">

        <div class="flex flex-row mx-5 lg:mx-10 mt-10  p-0 md:p-5 w-full rounded-lg">

        @foreach ($ktg as $k)
        @if ($k->artikel->count() > 0)

            <div class="flex flex-col  w-full ">
                <p class="text-lg ml-10 mb-5 font-medium text-blue-800">Sub Kategori : {{ $k->nama }}</p>
                <div class="flex flex-row flex-wrap justify-center gap-8">
                @foreach ($k->artikel as $atk)

                    <a href="{{ route('view.artikel', ['id' => $atk->id, 'judul' => $atk->judul]) }}">
                        <div
                            class="flex flex-col min-h-min rounded-md w-80 border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                            @if($atk->foto)
                        <img src="{{ asset('uploads/' . $atk->foto) }}" alt="Nama" class="h-60 object-cover w-full rounded-md">
                    @else
                    <img src="{{ asset('img/bunga.jpeg')}}" class="h-60 object-cover w-full rounded-md"
                                alt="">
                    @endif
                            
                            <div class="flex w-96 h-full flex-col p-5">
                                <p class="text-md  w-60 font-semibold uppercase mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                    {{$atk->judul}}</p>
                                <div class="text-md font-normal w-60 mb-5 cursor-default"
                                    style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2;">
                                    {!!$atk->konten!!}</div>


                            </div>
                            
                        </div>
                        
                    </a>
                    @endforeach

                </div>

            </div>
            @endif


            @endforeach


        </div>

    </div>

</div>

@endsection