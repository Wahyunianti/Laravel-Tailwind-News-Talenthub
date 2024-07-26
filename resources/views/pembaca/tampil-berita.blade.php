@extends('layouts.main')

@section('content')
<div class="flex  flex-grow min-h-min " style="
    width: -webkit-fill-available;
">
    <div class="flex mx-0 xl:mx-40 mt-10 border-0 xl:border-2 shadow-md w-full rounded-lg">

        <div class="flex flex-row mx-5 lg:mx-10 mt-10  p-0 md:p-5 w-full rounded-lg">


            <div class="flex flex-col flex-grow-1 w-full ">
                <div class="flex flex-row">
                    <div class="flex flex-col w-full h-auto p-10 pt-0">
                        <p class="text-xl font-semibold mb-2 w-full">{{ $atk->judul }}</p>
                        <div class="flex flex-row gap-2 text-blue-900 ">
                            <p>Tanggal Posting : {{ $atk->updated_at }}</p>
                            <p>Penulis : {{ $atk->users->nama }}</p>
                        </div>
                        @if($atk->foto)
                            <img src="{{ asset('uploads/' . $atk->foto) }}" alt="Nama"
                                class="h-auto object-cover w-200 self-center rounded-t-md mt-10">
                        @else
                            <img src="{{ asset('img/kdrt.jpg')}}"
                                class="max-h-60 object-cover w-full rounded-md shadow-sm  my-5" alt="">
                        @endif

                        <div class="flex flex-col w-full mt-10">
                            <div class="break-all">{!! $atk->konten !!}</div>
                        </div>
                        <form action="{{ route('add.komen', ['id' => $atk->id]) }}" method="post">
                            @csrf
                            <div class="flex flex-col w-full h-auto mt-20">
                                <div class="flex flex-row w-full gap-2 h-auto justify-between">
                                    <input class="w-full rounded-md" placeholder="Beri Komentar" type="text"
                                        name="komentar" id="">
                                    <button class="bg-black hover:bg-gray-900 rounded-md text-white px-5"
                                        type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                        @foreach ($kmt as $komentar_id => $group)
                                                @php
                                                    $komentarUtama = $group->first();
                                                @endphp
                                                <div class="flex flex-col w-full h-auto mt-5">
                                                    <div class="flex flex-row w-full gap-3 justify-start">
                                                        <img src="{{ asset('img/profile-user.png') }}" class="h-auto w-20" alt="">
                                                        <div class="flex flex-col gap-1">
                                                            <p class="text-sm font-semibold">{{ $komentarUtama->komentar_nama }}</p>
                                                            <p class="text-sm truncate">{{ $komentarUtama->komentar_isi }}</p>
                                                            <div class="flex flex-row gap-1">
                                                                <p class="text-xs font-semibold text-gray-600">
                                                                    {{ $komentarUtama->komentar_tanggal }}
                                                                </p>
                                                                <button type="button"
                                                                    data-modal-target="crud-modal-{{ $komentarUtama->komentar_id }}"
                                                                    data-modal-toggle="crud-modal-{{ $komentarUtama->komentar_id }}"
                                                                    class="text-xs font-semibold text-gray-800">Balas</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="text-xs font-semibold text-gray-600 mb-1 mt-2 pl-10 ml-10 w-full">Balasan --</p>


                                                    <!-- Tampilkan balasan -->
                                                    @foreach ($group as $balas)
                                                        @if ($balas->balasan_id)
                                                            <div class="flex flex-col w-full h-auto mt-5 pl-10">
                                                                <div class="flex flex-row w-full gap-3 h-auto justify-start">
                                                                    <img src="{{ asset('img/profile-user.png') }}" class="max-h-30 object-cover w-30"
                                                                        alt="">
                                                                    <div class="flex flex-col gap-1">
                                                                        <p class="text-sm font-semibold">{{ $balas->balasan_nama }}</p>
                                                                        <p class="text-sm truncate">{{ $balas->balasan_isi }}</p>
                                                                        <div class="flex flex-row gap-1">
                                                                            <p class="text-xs font-semibold text-gray-600">{{ $balas->balasan_tanggal }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                        @endforeach




                    </div>
                    <div class="hidden xl:flex flex-col w-1/3 ">
                        <a href="">
                            <img src="{{ asset('img/adss2.png')}}" class="h-auto object-cover w-full rounded-md "
                                alt="">
                        </a>
                    </div>

                </div>
            </div>


        </div>

    </div>

</div>

@foreach ($kmt as $komentar_id => $group)
    @php
        $komentarUtama = $group->first();
    @endphp

    <div id="crud-modal-{{ $komentarUtama->komentar_id }}" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Tambah Balasan
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal-{{ $komentarUtama->komentar_id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5"
                    action="{{ route('add.balasan', ['id' => $atk->id, 'komen' => $komentarUtama->komentar_id]) }}"
                    method="post">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Balasan</label>
                            <input type="text" name="balasan" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ketikkan balasan.." required="">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Kirim</button>
                </form>
            </div>
        </div>
    </div>

@endforeach



@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalTriggers = document.querySelectorAll('[data-modal-target]');

        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function () {
                const modalId = this.getAttribute('data-modal-target');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.remove('hidden');
                }
            });
        });

        const modalCloseButtons = document.querySelectorAll('[data-modal-toggle]');

        modalCloseButtons.forEach(button => {
            button.addEventListener('click', function () {
                const modalId = this.getAttribute('data-modal-toggle');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('hidden');
                }
            });
        });

        window.addEventListener('click', function (event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    });

</script>

@endsection