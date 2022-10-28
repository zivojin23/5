<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class Form extends Component
{
    use WithFileUploads;

    public $projects;

    public $first_name;
    public $last_name;
    public $email;
    public $project_name;
    public $project_priority = '';
    public $project_status = '';
    public $project_person;
    public $attachment;

    // public $search = '';

    public $user_id;
    public $project_id;
    

    protected $rules = [
        'first_name'        => 'required',
        'last_name'         => 'required',
        'email'             => 'required|email',
        'project_name'      => 'required',
        'project_priority'  => 'required',
        'project_status'    => 'required',
        'project_person'    => 'required|email',
        'attachment'        => 'required',
        
    ];

// SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE 
    public function saveProject()
    {
        $this->validate();

        if (Auth::user()) {
            
            $this->first_name  = Auth::user()->first_name;
            $this->last_name   = Auth::user()->last_name;
            $this->email       = Auth::user()->email;
        }

        Project::create([
            'first_name'       => $this->first_name,
            'last_name'        => $this->last_name,
            'email'            => $this->email,
            'project_name'     => $this->project_name,
            'project_priority' => $this->project_priority,
            'project_status'   => $this->project_status,
            'project_person'   => $this->project_person,
            'attachment'       => $this->attachment->store('public/docs'),
            'user_id'          => Auth::id()
 
        ]);

        session()->flash('submitted', 'Submitted!');

        $this->reset(['first_name','last_name','email', 'project_name', 'project_priority', 'project_status', 'project_person', 'attachment']);
        $this->dispatchBrowserEvent('close-modal');
    }
// SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE  // SAVE 

    public function closeModal()
    {
        $this->resetInput();
    }

// DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  
    public function deleteProject($project_id)
    {
        $this->project_id = $project_id;
    }

    public function removeProject()
    {
        Project::find($this->project_id)->delete();
        
        session()->flash('deleted', 'deleted!');
        $this->dispatchBrowserEvent('close-modal');
    }
// DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  // DELETE  

    public function render()
    {
        $this->projects = Project::orderBy('updated_at', 'desc')->get();

        return view('livewire.main');
    }
}
