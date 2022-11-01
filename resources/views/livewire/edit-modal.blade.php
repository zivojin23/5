<!-- TAILWIND modal -->
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
</div> 



  {{-- <!-- BOOTSTRAP Modal -->
  <div class="modal fade" id="exampleModal{{ $project->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $project->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel{{ $project->id }}">{{ $project->project_name }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
            
                

                  <button wire:click="updateProject()" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>

              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="updateProject()">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}