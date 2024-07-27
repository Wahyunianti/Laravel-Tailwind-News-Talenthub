@extends('layouts.main2')

@section('content')
<div data-aos="fadeIn" class="flex flex-col h-auto w-full border shadow-sm rounded-md p-3 gap-7">
    <p class="bg-slate-800 text-white px-3 py-2 text-center rounded-t-md font-medium">Data Bobot
        Aplikasi Awani News</p>
    <div class="flex flex-row justify-between content-center">
        <p>Cari Artikel</p>

        <form class="flex items-center max-w-sm mx-auto gap-5 float-right" method="GET" action="{{ route('articles.search') }}">
            <div class="relative w-full">

                <input type="text" id="simple-search" name="query"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Judul Artikel..." required />
            </div>
            <button type="submit"
                class="p-2.5 ms-2 text-sm font-medium text-white bg-gray-800 rounded-md w-20 content-center hover:bg-gray-500">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>

    </div>

    <div class="relative overflow-x-auto">
        <table id="userTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 w-40">Thumbnail</th>

                    <th scope="col" class="px-6 py-3">Artikel</th>
                    <th scope="col" class="px-6 py-3 w-40">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($atk as $a)
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-2 ">
                            @if($a->foto)
                                <img src="{{ asset('uploads/' . $a->foto) }}" alt="Nama"
                                    class="h-10 object-cover w-10 rounded-md">
                            @else
                                <img src="{{ asset('img/bunga.jpeg')}}" class="h-10 object-cover w-10  rounded-md" alt="">
                            @endif
                        </th>
                        <th scope="row"
                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white truncate">
                            {{ $a->judul }}
                        </th>
                        <td class="px-6 py-2">
                            <div class="flex flex-row gap-3">
                                <button type="button" data-modal-target="edit-modal-{{ $a->id }}"
                                    data-modal-toggle="edit-modal-{{ $a->id }}"
                                    class="bg-slate-600 hover:bg-slate-800 text-white px-3 py-1 rounded-md">Edit
                                    Bobot</button>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Edit Pengguna -->
@foreach ($atk as $a)
    <div data-aos="fadeIn" id="edit-modal-{{ $a->id }}" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Bobot</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="edit-modal-{{ $a->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" action="{{ route('bobot.update', $a->id) }}" method="post">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="edit-name-{{ $a->id }}"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot</label>
                            @if (is_null($a->bobot))

                                <input type="text" name="nilai" id="edit-name-{{ $a->id }}" value=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Nilai Bobot" required="">

                            @else

                                <input type="text" name="nilai" id="edit-name-{{ $a->id }}" value="{{ $a->bobot->nilai }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Nilai Bobot" required="">

                            @endif

                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#userTable').DataTable({
            "paging": true,
            "pageLength": 5,
            "searching": true,
            "language": {
                "search": "Mencari",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
        $('#userTable_length').hide();
    });
</script>
@endsection