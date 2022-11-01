<div class="w-1/5 mx-auto">


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

    

        <button wire:click="updateProject()" type="button" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
                            font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>

        <button wire:click="cancel()" type="button" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
                            font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</button>         

  </form>
</div>