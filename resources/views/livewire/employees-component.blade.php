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

<div class="sm:grid sm:grid-cols-2 flex flex-col">

<div>
    @if ($updateEmployee)
        @include('livewire.edit-employee')
    @else
        @include('livewire.new-employee')
    @endif
</div>

<div class="mx-auto mt-10">
        
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="flex justify-center items-center mb-10">
        <a href="/salary">Salary</a>
    </div>

        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">Employee's ID</th>
                    <th scope="col" class="py-3 px-6">First Name</th>
                    <th scope="col" class="py-3 px-6">Last Name</th>
                    <th scope="col" class="py-3 px-6">Email</th>
                    <th scope="col" class="py-3 px-6">Date of Birth</th>
                    <th scope="col" class="py-3 px-6">Phone Number</th>
                    <th scope="col" class="py-3 px-6">Role ID</th>
                    <th scope="col" class="py-3 px-6"><span class="sr-only"></span></th>
                    <th scope="col" class="py-3 px-6"><span class="sr-only"></span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)    

                <tr class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        {{ $employee->id }}</th>
                    <td class="py-4 px-6">{{ $employee->first_name }}</td>
                    <td class="py-4 px-6">{{ $employee->last_name }}</td>
                    <td class="py-4 px-6">{{ $employee->email }}</td>
                    <td class="py-4 px-6">{{ $employee->date_of_birth }}</td>
                    <td class="py-4 px-6">{{ $employee->phone_number }}</td>
                    
                    
                    
                    <td class="py-4 px-6">{{ $employee->role->role_name }}</td>



                    <td class="py-4 px-6 text-right">
                        <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                                wire:click="editEmployee({{ $employee->id }})">Edit</button>   
                    </td>    
                    <td class="py-4 px-6 text-right">        
                        <button class="bg-white hover:bg-red-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                                wire:click="deleteEmployee({{ $employee->id }})">Delete</button>
                    </td>
                </tr>
             
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
</div>
</div>
