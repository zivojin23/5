<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>layouts.app.blade.php</title>

    <link rel="stylesheet" href="/css/app.css" >
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    @livewireStyles
</head>
<body>
    


    {{-- {{ $slot }} --}}

        <main class="py-4">
            @yield('content')
        </main>
    
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    @livewireScripts
</body>
</html>