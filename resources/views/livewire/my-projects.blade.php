<div>
    {{-- <nav class="bg-white border-gray-200 px-2 md:px-4 py-2.5">
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
                    </ul>
                </div>
            </div>
        </div>
    </nav> --}}
    
    <div class="w-3/5 mx-auto">
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
    
        <div class="w-3/5 mx-auto">

        
        @foreach (Auth::user()->projects as $project)

        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-{{ $project->id }}">
              <button type="button" class="w-4/5 mx-auto flex items-center justify-between p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100" 
                    data-accordion-target="#accordion-collapse-body-{{ $project->id }}" aria-expanded="true" aria-controls="accordion-collapse-body-{{ $project->id }}">
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
    
    
    
                        <div class="p-3 flex flex-col">

                            <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 mb-8 border border-gray-400 rounded-lg shadow" 
                                    wire:click="editProject({{ $project->id }})">Edit<i class="fa-sharp fa-solid fa-pen ml-5"></i></button>

                            <button class="bg-white hover:bg-red-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                                    wire:click="deleteProject({{ $project->id }})">Delete<i class="fa-solid fa-trash ml-5"></i></button>

                        </div>  
    
                    </div>
                </div>
              </div>
            </div>
          
      @endforeach
    
    </div>
</div>
        {{-- @foreach (Auth::user()->projects as $project)
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
                </div> --}}
    
    {{-- <button type="button" wire:click="editProject({{ $project->id }})">
        edit button
    </button> --}}
    
            {{-- <div> --}}
    
    
    {{-- <!-- Edit modal toggle -->
    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" 
            type="button" wire:click="editProject({{ $project->id }})" data-modal-toggle="edit-modal-{{ $project->id }}">
        Edit
    </button> --}}
    
    {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $project->id }}">
        Bootstrap EDIT
      </button> --}}
      
    @if ($updateProject)
        {{-- @include('livewire.edit-modal') --}}
        @include('livewire.edit-page')
    @endif
    {{-- <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 mb-8 border border-gray-400 rounded-lg shadow" 
            wire:click="editProject({{ $project->id }})">Edit<i class="fa-sharp fa-solid fa-pen ml-5"></i></button> --}}

      {{-- <!-- TAILWIND modal -->
<div id="edit-modal-{{ $project->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " 
                      type="button" data-modal-toggle="edit-modal-{{ $project->id }}">

                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">{{ $project->project_name }}</h3>

                <form class="space-y-6" wire:submit.prevent="updateProject">
                  @csrf

                  <div class="flex flex-col w-4/5 mx-auto my-8">

                      <label for="project_priority" class="mb-2 mt-10 text-sm font-medium">Project Priority</label>
                      <select class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" wire:model="project_priority" id="project_priority" name="project_priority">
                          <option value="" disabled>Please select one</option>
                          <option value="LOW">Low</option>
                          <option value="MEDIUM">Medium</option>
                          <option value="HIGH">High</option>
                      </select>
                  
                      @error('project_priority')<span class="text-red-600">{{ $message }}</span>@enderror
                  </div>
                  
                  <div class="flex flex-col w-4/5 mx-auto my-8">
                  
                      <label for="project_status" class="mb-2 text-sm font-medium">Project Status</label>        
                      <select class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" wire:model="project_status" id="project_status" name="project_status">
                          <option value="" disabled>Please select one</option>
                          <option value="Design">Design</option>
                          <option value="Ready">Ready</option>
                          <option value="In Progress">In Progress</option>
                          <option value="On Hold">On Hold</option>
                          <option value="Completed">Completed</option>
                      </select>
                  
                      @error('project_status')<span class="text-red-600">{{ $message }}</span>@enderror
                  </div>
                  
                  <div class="flex flex-col w-4/5 mx-auto my-8">
                  
                      <label for="project_person" class="mb-2 text-sm font-medium">Project Person</label>
                      <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" wire:model="project_person" id="project_person" type="text" placeholder="Contact Email" name="project_person" />
                      
                      @error('project_person')<span class="text-red-600">{{ $message }}</span>@enderror
                  </div>
              
                    <button wire:click="updateProject()" type="button" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>

                </form>

            </div>
        </div>
    </div>
</div>  --}}


    
                </div>
    
            </div>
        </div>    
        {{-- @endforeach --}}
</div>


{{-- <div class="flex flex-col">
    <div class="my-2 overflow-x-auto sm:mx-6 lg:mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="table-head">Title</th>
                            <th class="table-head">Link</th>
                            <th class="table-head">email</th>
                            <th class="table-head"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if ($projects->count())
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="table-data">
                                        {{ $project->first_name }}
                                   
                                    </td>
                                    <td class="table-data">
                                            {{ $project->last_name }}
                                        </a>
                                    </td>
                                    <td class="table-data">{{ $project->email }}</td>
                                    <td class="table-data flex justify-end gap-2">
                                        <button wire:click="updateShowModal({{ $project->id }})">
                                            {{ __('Edit') }}
                                        </button>
                                        <button wire:click="deleteShowModal({{ $project->id }})">
                                            {{ __('Delete') }}
                                            </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="table-data" colspan="4">No Results Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}

   {{-- Modal Form --}}
   {{-- <x-dialog-modal wire:model="modalFormVisible"> --}}
    {{-- <x-slot name="title">
        {{ __('Save Page') }} {{ $modelId }}
    </x-slot>

    <x-slot name="content">
        <div class="mt-4">
            <x-jet-label for="title" value="{{ __('Title') }}" />
            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"
                wire:model.debounce.500ms="title" />
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="slug" value="{{ __('Slug') }}" />
            <div class="mt-1 flex rounded-md shadow-sm">
                <span
                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 py-3 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://localhost:8000/
                </span>
                <input wire:model.lazy="slug"
                    class="form-input flex-1 block w-full pl-1 rounded-none border rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                    placeholder="url-slug">
            </div>
            @error('slug')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-4">
            <label>
                <input class="form-checkbox" type="checkbox" value="{{ $isDefaultHome }}"
                    wire:model="isDefaultHome">
                <span class="ml-2 text-sm text-gray-600">Set as the default home page</span>
            </label>
        </div>
        <div class="mt-4">
            <label>
                <input class="form-checkbox" type="checkbox" value="{{ $isDefault404 }}"
                    wire:model="isDefault404">
                <span class="ml-2 text-sm text-red-600">Set as the default 404 error page</span>
            </label>
        </div>
        <div class="mt-4">
            <x-jet-label for="title" value="{{ __('Content') }}" />
            <div class="rounded-md shadow-sm">
                <div class="mt-1 bg-white">
                    <div class="body-content" wire:ignore>
                        <trix-editor class="trix-content" x-ref="trix" wire:model.debounce.500ms="content"
                            wire:key="trix-content-unique-key"></trix-editor>
                    </div>
                </div>
            </div>
            @error('content')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        @if ($modelId)
            <x-jet-danger-button class="ml-3" wire:click="update" wire:loading.attr="disabled">
                {{ __('Update') }}
            </x-jet-danger-button>
        @else
            <x-jet-danger-button class="ml-3" wire:click="create" wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-jet-danger-button>
        @endif
    </x-slot> --}}
{{-- </x-dialog-modal> --}}