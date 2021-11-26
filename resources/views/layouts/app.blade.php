<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet">
    <style media="print">
        @page {
            size: auto;
            margin: 0;
        }
       </style>
</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <main class="">
            @yield('content')
        </main>
    </div>
    <script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
function download(el){
    var a = document.body.appendChild(
        document.createElement("a")
    );
    a.download = "export.jpg";
    a.href = "data:text/html," + document.getElementById(el).innerHTML; // Grab the HTML
    a.click(); // Trigger a click on the element
}
    </script>
</body>
</html>
