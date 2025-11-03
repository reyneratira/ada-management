<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ADA Barbershop</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100 font-sans flex h-screen" x-data x-init="$el.classList.add('page-transition'); setTimeout(() => $el.classList.add('loaded'), 50)">

    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
        @include('components.navbar')
        <main class="p-6 overflow-y-auto">
            @yield('content')
        </main>
    </div>

</body>

</html>