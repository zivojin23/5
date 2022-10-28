<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>My Projects</title>

    <link href="/css/app.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5592293c7c.js"></script>

    @livewireStyles
</head>
<body>

<nav class="bg-white border-gray-200 px-2 md:px-4 py-2.5">
    <div class="flex flex-wrap justify-end items-center mx-auto">
        <div class="flex items-center md:order-2">
            <div class="flex items-center md:order-2 ">
                <button type="button" class="flex mr-3 text-sm bg-blue-200 rounded-lg md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <div class="py-2.5 px-5">{{ $user->first_name }}</div>
                </button>
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="user-dropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 9.77778px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
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
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="w-2/5 mx-auto">
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

<div>
    <div class="p-5 flex justify-center text-center">
        <h1 class="font-bold text-gray-600 text-2xl">
            Hello, {{ auth()->user()->first_name }} !
        </h1>
    </div>

    @foreach (Auth::user()->projects as $project)
        

    <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-{{ $project->id }}">
          <button type="button" class="w-4/5 mx-auto flex items-center justify-between p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-{{ $project->id }}" aria-expanded="true" aria-controls="accordion-collapse-body-{{ $project->id }}">
            <span class="flex items-center">{{ $project->project_name }}</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-{{ $project->id }}" class="hidden" aria-labelledby="accordion-collapse-heading-{{ $project->id }}">
          <div class="w-4/5 mx-auto p-5 font-light border border-b-0 border-gray-200">
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

 {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}} {{-- MODALS --}}

                    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
                            type="button" data-modal-toggle="delete-modal">
                        Delete
                    </button>

                    <div id="delete-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" 
                                        data-modal-toggle="delete-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>

                            <form wire:submit.prevent="removeProject">
                                <div class="p-6 text-center">
                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this project?</h3>
                                    <button data-modal-toggle="delete-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-toggle="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                        No, cancel
                                    </button>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
          </div>
        </div>
      
  @endforeach

</div>


    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    @livewireScripts
    {{-- <script>
        window.addEventListener('close-modal', event => {       
            $('#newProjectModal').modal('hide');
            $('#editProjectModal').modal('hide');
            $('#deleteProjectModal').modal('hide');
        })
    </script> --}}
</body>
</html>