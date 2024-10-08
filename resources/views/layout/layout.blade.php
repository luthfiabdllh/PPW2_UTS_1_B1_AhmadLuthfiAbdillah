<!DOCTYPE html>
<html>
    <head>
        <meta charset=""UTF-8>
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        {{-- <meta name="wiewport" content="width-device-width, initial-scale" --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <style>
            #footer{
                width: 100%;
                height: auto;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: gray;
                color: white;
            }

        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>

        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="">News</a>
            <a href="">Contact</a>
            <a href="">About</a>
        </div>

        @yield('content')

        @include('layout.footer')

        <script src="{{asset('js/script.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
