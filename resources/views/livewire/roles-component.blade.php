<div>

<div class="w-2/5 mx-auto">
    @if (session()->has('submitted'))
    <div class="bg-green-100 p-4 flex justify-center rounded-lg w-full mx-auto">
        <div class="font-bold text-xl text-green-700">
            {{ session()->get('submitted') }}
            <i class="fa-solid fa-thumbs-up ml-5"></i>
        </div>    
    </div>
    @endif
</div>

<div class="sm:grid sm:grid-cols-2 flex flex-col">

    {{-- Levo --}}
    <div class="w-3/5 mx-auto">

        <form wire:submit.prevent="storeRole">
            @csrf
    
            <div class="flex flex-col w-4/5 mx-auto my-8">
                <label for="role_name" class="mb-2 mt-10 text-sm font-medium">Role Name</label>
                <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                    wire:model="role_name" id="role_name" type="text" placeholder="Name of the Role" >  
                @error('role_name')<span class="text-red-600">{{ $message }}</span>@enderror
            </div>
    
            <div class="flex flex-col w-4/5 mx-auto my-8">
                <label for="role_description" class="mb-2 text-sm font-medium">Role Description</label>
                <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                    wire:model="role_description" id="role_description" type="text" placeholder="Level of responsibility">             
                @error('role_description')<span class="text-red-600">{{ $message }}</span>@enderror
            </div>
    
            <div class="flex flex-col w-4/5 mx-auto my-8">
                <label for="reports_to" class="mb-2 text-sm font-medium">Reports to:</label>
                <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                    wire:model="reports_to" id="reports_to" type="text" placeholder="(Optional)">
            </div>
    
            <div class="p-5 flex justify-end">
                <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                        wire:click.prevent="storeRole()" type="submit">Insert<i class="fa-solid fa-check ml-5"></i></button>
            </div>
    
        </form>
    </div>

    {{-- Desno --}}
    <div class="mx-auto mt-10">
        
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>                      
                        <th scope="col" class="py-3 px-6">Role ID</th>
                        <th scope="col" class="py-3 px-6">Role Name</th>
                        <th scope="col" class="py-3 px-6">Description</th>
                        <th scope="col" class="py-3 px-6">Reports to</th>
                        <th scope="col" class="py-3 px-6"><span class="sr-only"></span></th>
                        {{-- <th scope="col" class="py-3 px-6"><span class="sr-only"></span></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)    
    
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            {{ $role->id }}</th>
                        <td class="py-4 px-6">{{ $role->role_name }}</td>
                        <td class="py-4 px-6">{{ $role->role_description }}</td>
                        <td class="py-4 px-6">{{ $role->reports_to }}</td>
                        {{-- <td class="py-4 px-6 text-right">
                            <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                                    wire:click="editEmployee({{ $employee->id }})">Edit</button>   
                        </td>    
                        <td class="py-4 px-6 text-right">        
                            <button class="bg-white hover:bg-red-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                                    wire:click="deleteEmployee({{ $employee->id }})">Delete</button>
                        </td> --}}
                        <td class="py-4 px-6 text-right">        
                            <button class="bg-white hover:bg-red-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                                    wire:click="deleteRole({{ $role->id }})">Delete</button>
                        </td>
                    </tr>
                 
                    @endforeach
                </tbody>

                
            </table>
            
        </div>
    </div>
</div>
</div>
