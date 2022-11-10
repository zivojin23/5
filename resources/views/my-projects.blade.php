<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>My Projects</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}

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
                        <li>
                            <a href="logout" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                    <li>
                        <a href="/home" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/my-projects" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">My Projects</a>
                    </li>
                    <li>
                        <a href="/employees" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Employees</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

{{-- <div class="w-2/5 mx-auto">
    @if (session()->has('deleted'))
    <div class="bg-green-100 p-4 flex justify-center rounded-lg w-full mx-auto">
        <div class="font-bold text-xl text-green-700">
            {{ session()->get('deleted') }}
            <i class="fa-solid fa-check ml-5"></i>
        </div>
    </div>   
    @endif

    @if (session()->has('updated'))
    <div class="bg-green-100 p-4 flex justify-center rounded-lg w-full mx-auto">
        <div class="font-bold text-xl text-green-700">
            {{ session()->get('updated') }}
            <i class="fa-solid fa-check ml-5"></i>
        </div>
    </div>                
    @endif
</div>

    <div class="p-5 flex justify-center text-center">
        <h1 class="font-bold text-gray-600 text-2xl">
            Hello, {{ auth()->user()->first_name }} !
        </h1>
    </div>


    @foreach (Auth::user()->projects as $project)
    <div class="sm:grid sm:grid-cols-4 flex">

        <div class="flex flex-col">
            <div class="p-3 text-base">
                <p class="py-2 ml-3">First Name</p>
                <p class="py-2 ml-3">Last Name</p>
                <p class="py-2 ml-3">Email</p>
                <p class="py-2 ml-3">Project Name</p>
                <p class="py-2 ml-3">Project Priority</p>
                <p class="py-2 ml-3">Project Status</p>
                <p class="py-2 ml-3">Project Person</p>
                <p class="py-2 ml-3">Attachment</p>
            </div>
        </div>

        <div class="sm:pl-10 grid col-span-2">
            <div class="p-3 text-base">
                <p class="py-2 ml-3">{{ $project->first_name }}</p>
                <p class="py-2 ml-3">{{ $project->last_name }}</p>
                <p class="py-2 ml-3">{{ $project->email }}</p>
                <p class="py-2 ml-3">{{ $project->project_name }}</p>
                <p class="py-2 ml-3">{{ $project->project_priority }}</p>
                <p class="py-2 ml-3">{{ $project->project_status }}</p>
                <p class="py-2 ml-3">{{ $project->project_person }}</p>
                <a class="flex items-center py-2 ml-3 hover:text-blue-600 hover:underline" target="_blank" href="{{ Storage::Url($project->attachment) }}">View</a>               
            </div>
        </div>

        <div class="px-4 py-2 flex flex-col justify-between">
            <div>  
                <p class="text-sm italic flex justify-end">{{ $project->updated_at }}</p>
            </div>

<button type="button" wire:click="editProject({{ $project->id }})">
    edit button
</button>

        <div>


<!-- Edit modal toggle -->
<button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" 
        type="button" wire:click="editProject({{ $project->id }})" data-modal-toggle="edit-modal-{{ $project->id }}">
    Edit
</button>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $project->id }}">
    Bootstrap EDIT
  </button>
  
    @include('livewire.edit-modal')
  

            </div>

        </div>
    </div>    
    @endforeach --}}

    <div>
        @livewire('my-projects')
    </div>


    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}

    @livewireScripts
</body>
</html>