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

    public $projects;
    public $project_id;
    
    public $updateProject = false;

    protected $rules = [
        'project_priority'  => 'required',
        'project_status'    => 'required',
        'project_person'    => 'required|email', 
    ];

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

        $this->updateProject    = true;
    }

    public function cancel()
    {
        $this->updateProject = false;

        $this->reset(['project_priority', 'project_status', 'project_person']);
    }

    public function updateProject()
    {
        $this->validate();
        
        Project::find($this->project_id)->update($this->projectData());

        $this->updateProject = false;

        session()->flash('updated', 'Updated!');
    }

    public function deleteProject($id)
    {
        Project::findOrFail($id)->delete();

        session()->flash('deleted', 'Deleted!');
    }

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
        return view('livewire.my-projects');
    }
}
