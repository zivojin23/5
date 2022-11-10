<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;


class MyProjects extends Component
{
    // public $modalFormVisible = false;
    // public $modalConfirmDelete = false;
    
    public $project_id;

    public $project_priority = '';
    public $project_status = '';
    public $project_person;

    public $updateProject = false;

    public $projects;
    // public $project;


    protected $rules = [
        'project_priority'  => 'required',
        'project_status'    => 'required',
        'project_person'    => 'required|email', 
    ];

    public function mount()
    {
        $this->projects = Project::orderBy('updated_at', 'desc')->get();
    }

    // public function createShowModal()
    // {
    //     $this->resetValidation();
    //     $this->reset();
    //     $this->modalFormVisible = true;
    // }




    public function editProject($id)
    {

        $project = Project::findOrFail($id);

        $this->project_id       = $project->id;

        $this->project_priority = $project->project_priority;
        $this->project_status   = $project->project_status;
        $this->project_person   = $project->project_person;

        $this->updateProject = true;
    }

    public function cancel()
    {
        $this->updateProject = false;

        // $this->reset(['first_name','last_name','email', 'project_name', 'project_priority', 'project_status', 'project_person', 'attachment']);
    }

    // public function updateProject()
    // {
        // $this->validate([
        //     'project_priority'  => 'required',
        //     'project_status'    => 'required',
        //     'project_person'    => 'required|email',
        // ]);

        // Project::where('id', $this->project_id)->update([
        //     'project_priority'  => $this->project_priority,
        //     'project_status'    => $this->project_status,
        //     'project_person'    => $this->project_person
        // ]);

        // session()->flash('updated', 'Updated!');

        // $this->reset(['first_name','last_name','email', 'project_name', 'project_priority', 'project_status', 'project_person']);

        public function updateProject()
        {
            $this->validate();
            
            Project::find($this->project_id)->update($this->projectData());

            session()->flash('updated', 'Updated!');
            
            // $this->project_id = $project->id;

            // Project::where('id', $this->project_id)
            //     ->update($this->projectData());
                
            // $this->dispatchBrowserEvent('event-notification');
            // $this->reset();
        }
    // }

    // public function updateShowModal($id)
    // {
    //     // $this->resetValidation();
    //     // $this->reset();



    //     $project = Project::find($this->project_id);
    //     // $project = Project::findOrFail($id);
        
    //     $this->project_id       = $project->id;

    //     $this->project_priority = $project->project_priority;
    //     $this->project_status   = $project->project_status;
    //     $this->project_person   = $project->project_person;
    //     $this->modalFormVisible = true;
    // }

    public function deleteProject($id)
    {

        Project::findOrFail($id)->delete();

        session()->flash('deleted', 'Deleted!');

        // $this->reset(['first_name','last_name','email', 'project_name', 'project_priority', 'project_status', 'project_person', 'attachment']);

    }

    // public function deleteShowModal($id)
    // {
    //     $this->project_id = $id;
    //     $this->modalConfirmDelete = true;
    // }

    public function projectData()
    {
        return [
            'project_priority'  => $this->project_priority,
            'project_status'    => $this->project_status,
            'project_person'    => $this->project_person
        ];
    }



    public function render()
    {
        // $user = Auth::user();

        return view('livewire.my-projects');
    }
}
