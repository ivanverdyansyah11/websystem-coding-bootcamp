<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- END STYLE --}}
</head>
<body>

    @if (!Request::is('login') || !Request::is('register'))
        @yield('main.authentication')
    @else
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae distinctio deserunt provident neque architecto suscipit enim qui dolorem reiciendis dignissimos veritatis fuga eligendi, minima aut sequi, facere aliquam inventore tempore.
    @endif
    
    {{-- SCRIPT --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    @stack('js')
    {{-- END SCRIPT --}}
</body>
</html>