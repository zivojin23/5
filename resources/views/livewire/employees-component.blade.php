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

    <div class="w-3/5 mx-auto">

    <form wire:submit.prevent="storeEmployee">
        @csrf

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="first_name" class="mb-2 mt-10 text-sm font-medium">First Name</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="first_name" id="first_name" type="text" placeholder="Your First Name" >  
            @error('first_name')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="last_name" class="mb-2 text-sm font-medium">Last Name</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="last_name" id="last_name" type="text" placeholder="Your Last Name">             
            @error('last_name')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="email" class="mb-2 text-sm font-medium">Email</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="email"  id="email" type="email" placeholder="Your Email">             
            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="date_of_birth" class="mb-2 text-sm font-medium">Date of Birth</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="date_of_birth"  id="date_of_birth" type="date" placeholder="">             
            @error('date_of_birth')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="phone_number" class="mb-2 text-sm font-medium">Phone Number</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="phone_number"  id="phone_number" type="text" placeholder="Your Phone Number">             
            @error('phone_number')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="p-5 flex justify-end">
            <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                wire:click.prevent="storeEmployee()" type="submit">Insert<i class="fa-solid fa-check ml-5"></i></button>
        </div>

    </form>

    </div>

    <div class="mx-auto mt-10">
        
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Employee's First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Date of Birth
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Phone Number
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)    

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $employee->first_name }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $employee->last_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $employee->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $employee->date_of_birth }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $employee->phone_number }}
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button class="bg-white hover:bg-red-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                                wire:click="deleteEmployee({{ $employee->id }})">Delete<i class="fa-solid fa-trash ml-5"></i></button>
                        <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 mb-8 border border-gray-400 rounded-lg shadow" 
                                wire:click="editEmployee({{ $employee->id }})">Edit<i class="fa-sharp fa-solid fa-pen ml-5"></i></button>       
                    </td>
                </tr>
             
                @endforeach
            </tbody>
        </table>
    </div>

    @if ($updateEmployee)
        @include('livewire.edit-page')
    @endif

    </div>

</div>

</div>
