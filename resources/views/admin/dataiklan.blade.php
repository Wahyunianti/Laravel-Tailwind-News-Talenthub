@extends('layouts.main2')

@section('content')
<div data-aos="fadeIn" class="flex flex-col h-auto w-full border shadow-sm rounded-md p-3 gap-7">
    <p class="bg-slate-800 text-white px-3 py-2 text-center rounded-t-md font-medium">Data Iklan
        Aplikasi Awani News</p>
    <div class="flex flex-row justify-between">
        <p>Total : {{ $count }} Iklan</p>
        <button type="button" data-modal-target="add-modal" data-modal-toggle="add-modal"
            class="bg-slate-600 hover:bg-slate-800 text-white font-medium px-3 py-1 rounded-md">+
            Tambah</button>
    </div>

    <div class="relative overflow-x-auto">
        <table id="userTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Posisi</th>
                    <th scope="col" class="px-6 py-3 w-40">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($iklan as $u)
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $u->nama }}
                        </th>
                        <td class="px-6 py-2">{{ $u->posisi }}</td>
                        <td class="px-6 py-2">
                            <div class="flex flex-row gap-3">
                                <button type="button" data-modal-target="edit-modal-{{ $u->id }}"
                                    data-modal-toggle="edit-modal-{{ $u->id }}"
                                    class="bg-slate-600 hover:bg-slate-800 text-white px-3 py-1 rounded-md">Edit</button>
                                <form action="{{ route('iklan.destroy', $u->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-slate-600 hover:bg-slate-800 text-white px-3 py-1 rounded-md">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah Pengguna -->
<div id="add-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Iklan</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="add-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form class="p-4 md:p-5" action="{{ route('iklan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nama" required="">

                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL
                            Iklan</label>
                        <input type="text" name="url" id="url"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="URL Iklan" required="">

                        <label for="foto"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Banner</label>
                        <input type="file" name="foto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">

                        <label for="posisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi
                            Iklan</label>
                        <select id="posisi" name="posisi"
                            class="block w-full cursor-pointer p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Posisi</option>
                            <option value="Halaman Depan">Halaman Depan</option>
                            <option value="Halaman Berita">Halaman Berita</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="w-full text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Simpan</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Pengguna -->
@foreach ($iklan as $u)
    <div data-aos="fadeIn" id="edit-modal-{{ $u->id }}" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Iklan</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="edit-modal-{{ $u->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" action="{{ route('iklan.update', $u->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="edit-name-{{ $u->id }}"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="edit-name-{{ $u->id }}" value="{{ $u->nama }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Nama" required>

                            <!-- URL Iklan field with value -->
                            <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL
                                Iklan</label>
                            <input type="text" name="url" id="url" value="{{ $u->url }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="URL Iklan" required>

                            <!-- Banner field (file input does not support value attribute) -->
                            <label for="foto"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Banner</label>
                            <input type="file" name="foto"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>

                            <!-- Posisi Iklan field with value -->
                            <label for="posisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi
                                Iklan</label>
                            <select id="posisi" name="posisi"
                                class="block w-full cursor-pointer p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled {{ $u->posisi ? '' : 'selected' }}>Pilih Posisi</option>
                                <option value="Halaman Depan" {{ $u->posisi == 1 ? 'selected' : '' }}>Halaman Depan</option>
                                <option value="Halaman Berita" {{ $u->posisi == 2 ? 'selected' : '' }}>Halaman Berita</option>
                            </select>
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