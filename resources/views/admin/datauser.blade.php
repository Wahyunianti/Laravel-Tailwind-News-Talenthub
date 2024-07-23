@extends('layouts.main2')

@section('content')
<div class="flex flex-col h-auto w-full border shadow-sm rounded-md p-3 gap-7">
    <p class="bg-slate-800 text-white px-3 py-2 text-center rounded-t-md font-medium">Data Pengguna
        Aplikasi Awani News</p>
    <div class="flex flex-row justify-between">
        <p>Total : 12 Pengguna</p>
        <button class="bg-slate-600 hover:bg-slate-800 text-white font-medium px-3 py-1 rounded-md">+
            Tambah</button>
    </div>



    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Level
                    </th>
                    <th scope="col" class="px-6 py-3 w-40">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-row gap-3">
                            <button
                                class="bg-slate-600 hover:bg-slate-800 text-white px-3 py-1 rounded-md">Edit</button>
                            <form action="" method="post">
                                <button type="button"
                                    class="bg-slate-600 hover:bg-slate-800 text-white px-3 py-1  rounded-md">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</div>

@endsection