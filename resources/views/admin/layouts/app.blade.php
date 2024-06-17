<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Especializa TI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="container">
    <header>
        <h4>Header Default</h4>
    </header>
    <div class="text-center">@yield('content')</div>
    <footer>
        <h4>Footer Default</h4>
    </footer>
</body>
</html>
