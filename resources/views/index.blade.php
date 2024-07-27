@extends('layouts.main')

@section('content')
<div class="flex  flex-grow min-h-min pt-10" style="
    width: -webkit-fill-available; 
">
                    <div class="flex mx-0  xl:mx-40 border-0 xl:border-2 shadow-none xl:shadow-md w-full rounded-lg">

                        <div class="flex flex-row mx-5 lg:mx-10 mt-0 md:mt-10 p-0 md:p-5 w-full rounded-lg">
                            <div class="flex flex-col  w-full ">
                                <div
                                    class="flex flex-none w-80 xl:w-full pr-10 justify-between content-center truncate">
                                    <p class="text-lg  my-0 font-medium text-blue-800 float-left">TAGS</p>
                                    @foreach($tag as $tg)
                                    <a href="" class="text-md  my-0 font-normal hover:text-blue-500">{{$tg->nama}}</a>
                                    @endforeach
                                    
                                </div>

                                <p class="text-lg  my-5 font-medium text-blue-800">Berita Terbaru</p>
                                @foreach($atk as $a)

                                <div 
                                    class="flex flex-col md:flex-row  min-h-min rounded-md border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                    @if($a->foto)
                            <img src="{{ asset('uploads/' . $a->foto) }}" alt="Nama"
                            class="h-auto object-cover w-full md:w-60 rounded-l-md">
                            @else
                            <img src="{{ asset('img/bunga.jpeg')}}"
                            class="h-60 object-cover w-full md:w-60 rounded-l-md" alt="">
                            @endif
                                    
                            
                                    <div class="flex w-80 h-full flex-col p-5">
                                        <p class="text-lg font-semibold uppercase mb-5 cursor-default"
                                            style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                            {{$a->judul}}</p>
                                        <div class="text-md font-normal mb-5 cursor-default"
                                            style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">
                                            {!! $a->konten !!}</div>
                                        <p
                                            class="text-sm cursor-default text-blue-400 overflow-hidden font-normal truncate mb-2">
                                            Tanggal
                                            Posting : {{$a->updated_at}}</p>

                                        <a href="{{ route('view.artikel', ['id' => $a->id, 'judul' => $a->judul]) }}"
                                            class="text-md text-blue-800 hover:text-blue-500 overflow-hidden font-normal truncate">Selengkapnya..</a>

                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <div class="hidden lg:flex flex-col w-6/12 rounded-lg">
                                <p class="hidden xl:flex text-xl w-full text-left ml-10">Kategori</p>
                                <div class="flex h-auto w-auto m-10 mt-5 border-t ">
                                    <ul class="flex w-full flex-col  text-gray-600">
                                        @foreach($ktg as $k)

                                        <li
                                            class="p-2 border-b w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                            <a href="{{ route('sub.kategori', ['id' => $k->id]) }}" class="hover:text-blue-700">{{$k->nama}}</a>
                                        </li>
                                        @endforeach
                                    
                                    </ul>
                                </div>
                                <div class="flex flex-col h-auto w-auto m-10 mt-0 border shadow-sm transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                    <div
                                        class="flex flex-col m-5 h-auto w-auto bg-gray-900 rounded-t-md justify-center">
                                        <p class="text-xl text-white w-full text-center">Berita Viral</p>
                                    </div>
                                    <a href="">
                                        <div class="flex flex-col m-5 mt-0 h-auto w-auto justify-center">
                                        @if($afoto->foto)
                            <img src="{{ asset('uploads/' . $afoto->foto) }}" alt="Nama"
                            class="h-24 object-cover w-full md:w-full rounded-b-md">
                            @else
                            <img src="{{ asset('img/bunga.jpeg')}}"
                                                class="h-24 object-cover w-full md:w-full rounded-b-md" alt="">
                            @endif
                                            
                                        </div>
                                        <div class="flex flex-col m-5 mt-0 h-auto w-auto justify-center">
                                            <p class="text-md w-full font-medium"
                                                style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                                {{$afoto->judul}}</p>
                                            <div class="text-md w-full "
                                                style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">
                                                {!!$afoto->konten!!}</div>
                                        </div>
                                    </a>
                                    <a href="{{ route('view.artikel', ['id' => $afoto->id, 'judul' => $afoto->judul]) }}">
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