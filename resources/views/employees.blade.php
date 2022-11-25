<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Employees</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5592293c7c.js"></script>
    @livewireStyles
</head>
<body>
    
<x-nav />

    <div>
        @livewire('employees-component')
    </div>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    @livewireScripts
</body>
</html>