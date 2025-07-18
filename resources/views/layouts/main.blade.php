<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('storage/favicon.svg') }}" rel="shortcut icon" type="image/x-icon">
    <title>Base Laravel Blade</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @yield('content')


    @yield('scripts')
</body>

</html>
