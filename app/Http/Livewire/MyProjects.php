<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;


class MyProjects extends Component
{
    public $project_priority = '';
    public $project_status = '';
    public $project_person;

    public $updateProject = false;

    public $projects;
    public $project_id;

    public function mount()
    {
        $this->projects = Project::orderBy('updated_at', 'desc')->get();
    }


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

    public function updateProject()
    {
        $this->validate([
            'project_priority'  => 'required',
            'project_status'    => 'required',
            'project_person'    => 'required|email',
        ]);

        Project::where('id', $this->project_id)->update([
            'project_priority' => $this->project_priority,
            'project_status' => $this->project_status,
            'project_person' => $this->project_person
        ]);

        session()->flash('updated', 'Updated!');

        // $this->reset(['first_name','last_name','email', 'project_name', 'project_priority', 'project_status', 'project_person']);

    }

    public function deleteProject($id)
    {

        Project::findOrFail($id)->delete();

        session()->flash('deleted', 'Deleted!');

        // $this->reset(['first_name','last_name','email', 'project_name', 'project_priority', 'project_status', 'project_person', 'attachment']);

    }



    public function render()
    {
        // $user = Auth::user();

        return view('livewire.my-projects');
    }
}
