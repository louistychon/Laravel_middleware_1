<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('partial.header')
    <main>
        @yield('content')
    </main>
    @include('partial.footer')

    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>

</html>
