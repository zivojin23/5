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

    public $project_id;

    // public $updateProject = false;

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

    public function mount()
    {
        $this->projects = Project::orderBy('updated_at', 'desc')->get();
    }

    public function saveProject()
    {
    
        if (Auth::user()) {
            
            $this->first_name  = Auth::user()->first_name;
            $this->last_name   = Auth::user()->last_name;
            $this->email       = Auth::user()->email;
        }

        $this->validate([
            'first_name'        => 'required',
            'last_name'         => 'required',
            'email'             => 'required|email',
            'project_name'      => 'required',
            'project_priority'  => 'required',
            'project_status'    => 'required',
            'project_person'    => 'required|email',
            'attachment'        => 'required',
            
        ]);

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
    }

    public function updateProject()
    {
        $this->validate();

        Project::where('id', $this->project_id)->update([
            'first_name'        => $this->first_name,
            'last_name'         => $this->last_name,
            'email'             => $this->email,
            'project_name'      => $this->project_name,
            'project_priority'  => $this->project_priority,
            'project_status'    => $this->project_status,
            'project_person'    => $this->project_person
        ])->save();

        session()->flash('updated', 'Updated!');
    }

    public function render()
    {
        return view('livewire.form');
    }
}
