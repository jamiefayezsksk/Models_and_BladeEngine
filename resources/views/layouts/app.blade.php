<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('partials.header')
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
</html>
