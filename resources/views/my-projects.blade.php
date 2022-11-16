<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>My Projects</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5592293c7c.js"></script>
    @livewireStyles
</head>
<body>

<nav class="bg-white border-gray-200 px-2 md:px-4 py-2.5">
    <div class="flex flex-wrap justify-end items-center mx-auto">
        <div class="flex items-center md:order-2">
            <div class="flex items-center md:order-2 ">
                <button type="button" class="flex mr-3 text-sm bg-blue-200 rounded-lg md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" 
                aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <div class="py-2.5 px-5">{{ $user->first_name }}</div>
                </button>
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="user-dropdown" 
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 9.77778px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                    <div class="py-3 px-4">
                        <span class="block text-sm text-gray-900">{{ $user->first_name }}</span>
                        <span class="block text-sm font-medium text-gray-500 truncate">{{ $user->email }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="user-menu-button">
                        <li><a href="logout" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                    <li><a href="/home" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a></li>
                    <li><a href="/my-projects" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">My Projects</a></li>
                    <li><a href="/employees" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Employees</a></li>
                    <li><a href="/roles" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Roles</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

    <div>
        @livewire('my-projects')
    </div>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    @livewireScripts
</body>
</html>