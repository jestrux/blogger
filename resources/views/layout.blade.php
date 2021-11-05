<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blogger</title>
    
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/micromodal.css') }}" /> --}}
</head>

<body>
    <main class="flex-1 overflow-y-auto p-8 bg-gray-100">
        @yield('content')
    </main>
</body>
</html>