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
                wire:model="email" id="email" type="email" placeholder="Your Email">             
            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="date_of_birth" class="mb-2 text-sm font-medium">Date of Birth</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="date_of_birth" id="date_of_birth" type="date" placeholder="">             
            @error('date_of_birth')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="phone_number" class="mb-2 text-sm font-medium">Phone Number</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="phone_number" id="phone_number" type="text" placeholder="Your Phone Number">             
            @error('phone_number')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="p-5 flex justify-end">
            <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                    wire:click.prevent="storeEmployee()" type="submit">Insert<i class="fa-solid fa-check ml-5"></i></button>
        </div>

    </form>
</div>