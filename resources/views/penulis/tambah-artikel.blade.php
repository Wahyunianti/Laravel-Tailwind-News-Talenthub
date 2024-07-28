@extends('layouts.main3')

@section('content')
<div class="flex flex-col xl:flex-col h-auto w-full px-0 xl:px-20 gap-7 justify-around">
    <div class="flex flex-col">
        <div class="flex flex-row justify-between h-auto content-center mb-5">
            <p class="font-semibold text-lg">Tambah Artikel</p>
            @if($errors->any())
                @foreach($errors->all() as $pesan)
                    <p>{{ $pesan }}</p>
                @endforeach
            @endif
            <a href="{{ route('dashboard.penulis') }}"
                class="p-1 cursor-pointer px-5 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">
                <i class="fas fa-arrow-left mr-2 text-sm"></i>Kembali</a>
        </div>
        <div class="flex flex-col flex-grow-1 h-auto w-full border border-black rounded-md shadow-sm p-2 xl:p-10 gap-5">
            <form class="form" id="forms" action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col w-full">
                    <label for="" class="my-2">Judul Artikel</label>
                    <input type="text" name="judul" placeholder="judul artikel" id="" class="rounded-md">
                    <label for="" class="my-2">Kategori Artikel</label>
                    <select name="kategoris_id" class="rounded-md cursor-pointer">
                        <option selected>Pilih kategori</option>
                        @foreach ($ktg as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    <label for="" class="my-2">Tag Artikel</label>
                    <input type="text" name="tags" placeholder="namatag, namatag, namatag" id="" class="rounded-md">
                    <label for="" class="my-2">Thumbnail</label>
                    <input type="file" class="border border-gray-600 rounded-md" name="foto" id="" class="rounded-md">
                </div>
                <div class="flex flex-col w-full">
                    <label for="" class="my-2">Konten</label>
                    <div class="rounded-md" id="editor" style="height: 500px;"></div>
                    <input type="hidden" name="konten" id="content">
                    <button type="submit"
                        class="p-2 px-4 mt-5 self-end w-40 bg-slate-900 hover:bg-slate-800 rounded-md text-white transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-100">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                [{ 'font': [] }],
                [{ 'size': [] }],
                [{ 'header': [1, 2, false] }],
                ['bold', 'italic', 'underline'],
                [{'list': 'ordered'}, {'list': 'bullet'}],
                ['link', 'image'],
                [{ 'color': [] }, { 'background': [] }],
                ['clean']
                ]
            }
        });

        var form = document.getElementById('forms');
        form.onsubmit = function () {
            var content = document.getElementById('content');
            content.value = quill.root.innerHTML;
        };
    });
</script>
@endsection
