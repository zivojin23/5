<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Role;

class RolesComponent extends Component
{
    public $role_name;
    public $role_description;
    public $reports_to;

    public $roles;


    protected $rules = [
        'role_name'         => 'required',
        'role_description'  => 'required'
    ];

    public function mount()
    {
        $this->roles = Role::orderBy('updated_at', 'desc')->get();
    }

    public function storeRole()
    {
        $this->validate();

        Role::create([
            'role_name'         => $this->role_name,
            'role_description'  => $this->role_description,
            'reports_to'        => $this->reports_to
        ]);

        $this->reset(['role_name','role_description','reports_to']);

        session()->flash('submitted', 'Submitted!');
    }

    public function deleteRole($id)
    {
        Role::findOrFail($id)->delete();

        session()->flash('deleted', 'Deleted!');
    }

    public function render()
    {
        return view('livewire.roles-component');
    }
}
