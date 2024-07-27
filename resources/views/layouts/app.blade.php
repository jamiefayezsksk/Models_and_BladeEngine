<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.header')
    
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>
    
    @include('partials.footer')
</body>
</html>
