<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | @yield('title', 'Home')</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="/">Home</a>
            <a href="/ninjas">All Ninjas</a>
            <a href="/ninjas/create">Create New Ninjas</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }} 
        {{-- whatever content we pass from child component will be placed here --}}
    </main>

</body>
</html>