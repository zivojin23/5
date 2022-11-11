<div>    

@foreach ($projects as $project)

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

            </div>
        </div>
        </div>
    </div>
    
@endforeach

</div>
</div>