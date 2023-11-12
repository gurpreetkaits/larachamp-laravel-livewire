<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&family=Open+Sans&family=Outfit:wght@500&family=Poppins:wght@500&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/single-post.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @stack('styles')
    @livewireStyles
</head>

<body>
    @include('frontend.components.nav')
    <div class="post-template">
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('frontend.components.footer')
    @stack('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
