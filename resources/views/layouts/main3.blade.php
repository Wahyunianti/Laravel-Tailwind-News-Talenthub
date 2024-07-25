<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awani News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <div class="inset-0 w-full" id="app">
        <div class="flex flex-row w-full h-auto">
            <div class="flex flex-col w-full h-auto">
                <nav class="flex flex-row w-full h-20 border border-b-black shadow-sm justify-between px-10">
                    <p class="text-md font-semibold content-center">{{auth()->user()->nama}} ({{auth()->user()->roles->nama}})</p>
                    <form action="{{ route('logout') }}" class="content-center" method="post">
                                @csrf
                    <button type="submit" class="text-md font-semibold ">Logout</button>

                    </form>
                </nav>

                <div class="flex flex-col h-auto w-full p-5 pt-10 xl:p-20">
                    @yield('content')

                </div>

            </div>


        </div>



    </div>


    @vite('resources/js/app.js')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        Quill.init();
    </script>
    @yield('scripts')
</body>

</html>