<div>
    <form wire:submit.prevent="saveExample">
        @csrf
        
        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="first_name" class="mb-2 mt-10 text-sm font-medium">First Name</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="first_name" id="first_name" type="text" placeholder="Your First Name" >  
            @error('first_name')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="last_name" class="mb-2 text-sm font-medium">Last Name</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="last_name" id="last_name" type="text" placeholder="Your Last Name">             
            @error('last_name')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>
        
        <button>
            
        </button>
    </form>
</div>
