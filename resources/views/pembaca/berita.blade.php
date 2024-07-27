@extends('layouts.main')

@section('content')
<div class="block   min-h-min">
    <div class="flex mx-0 xl:mx-40 mt-10 border-0 xl:border-2 shadow-none xl:shadow-md rounded-lg">

        <div class="flex flex-row mx-5 w-full lg:mx-10 mt-10  p-0 md:p-5 rounded-lg">


            <div class="flex flex-col  content-center justify-center w-full">
                <p class="text-lg ml-10 mb-5 font-medium text-blue-800">Semua Berita</p>
                <div class="flex flex-row flex-wrap px-0 xl:px-10 justify-center w-full xl:justify-start gap-8 ">

                    @foreach ($atk as $a)

                        <a href="{{ route('view.artikel', ['id' => $a->id, 'judul' => $a->judul]) }}">
                            <div
                                class="flex flex-col min-h-min rounded-md w-80 border shadow-sm mb-5 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                                @if($a->foto)
                                    <img src="{{ asset('uploads/' . $a->foto) }}" alt="Nama"
                                        class="h-60 object-cover rounded-l-md">
                                @else
                                    <img src="{{ asset('img/bunga.jpeg')}}" class="h-60 object-cover w-full rounded-l-md"
                                        alt="">
                                @endif

                                <div class="flex w-96 h-full flex-col p-5">
                                    <p class="text-md  w-60 font-semibold uppercase mb-5 cursor-default"
                                        style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 1;">
                                        {{$a->judul}}
                                    </p>
                                    <div class="text-md font-normal w-60 mb-5 cursor-default"
                                        style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2;">
                                        {!!$a->konten!!}
                                    </div>


                                </div>

                            </div>

                        </a>

                    @endforeach

                </div>
                <div class="mt-4">
                    {{ $atk->links() }}
                </div>



            </div>


        </div>

    </div>

</div>

@endsection