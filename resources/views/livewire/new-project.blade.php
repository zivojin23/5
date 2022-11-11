<div class="w-3/5 mx-auto">

    <form wire:submit.prevent="saveProject">
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
            <label for="project_name" class="mb-2 text-sm font-medium">Project Name</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="project_name" id="project_name" type="text" placeholder="Name of your project">              
            @error('project_name')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="project_priority" class="mb-2 text-sm font-medium">Project Priority</label>
            <select class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="project_priority" id="project_priority">
                <option value="" disabled selected>Please select one</option>
                <option value="LOW">Low</option>
                <option value="MEDIUM">Medium</option>
                <option value="HIGH">High</option>
            </select>      
            @error('project_priority')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>
    
        <div class="flex flex-col w-4/5 mx-auto my-8">      
            <label for="project_status" class="mb-2 text-sm font-medium">Project Status</label>        
            <select class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="project_status" id="project_status">
                <option value="" disabled selected>Please select one</option>
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
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="project_person" id="project_person" type="text" placeholder="Contact Email">              
            @error('project_person')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>
    
        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="attachment" class="mb-2 text-sm font-medium">Attachment</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="attachment" id="attachment" type="file">     
            
            @if ($attachment)
            <img src="{{ $attachment->temporaryUrl() }}" alt="">
            @endif 

            @error('attachment')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>

        <div class="p-5 flex justify-end">
            <button class="bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" 
                    wire:click.prevent="saveProject()" type="submit">Submit<i class="fa-solid fa-check ml-5"></i></button>
        </div>
        
    </form>
</div>