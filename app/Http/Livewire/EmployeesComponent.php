<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Role;

class EmployeesComponent extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $date_of_birth;
    public $phone_number;

    // public $roles;
    public $role_name;
    public $role_id = '';
    public $employees;
    public $employee_id;

    public $updateEmployee = false;

    protected $rules = [
        'first_name'        => 'required',
        'last_name'         => 'required',
        'email'             => 'required|email', 
        'date_of_birth'     => 'required',
        'phone_number'      => 'required',
        'role_id'           => 'required'
    ];

    // public function mount()
    // {
    //     $this->employees = Employee::find('role_id')->with('role')->get();
    // }

    public function storeEmployee()
    {
        $this->validate();

        Employee::create([
            'first_name'       => $this->first_name,
            'last_name'        => $this->last_name,
            'email'            => $this->email,
            'date_of_birth'    => $this->date_of_birth,
            'phone_number'     => $this->phone_number,
            'role_id'          => $this->role_id
        ]);

        $this->reset(['first_name','last_name','email', 'date_of_birth', 'phone_number', 'role_id']);

        session()->flash('submitted', 'Submitted!');
    }

    public function editEmployee($id)
    {
        $employee = Employee::findOrFail($id);

        $this->employee_id      = $employee->id;
        
        $this->first_name       = $employee->first_name;
        $this->last_name        = $employee->last_name;
        $this->email            = $employee->email;
        $this->date_of_birth    = $employee->date_of_birth;
        $this->phone_number     = $employee->phone_number;
        $this->role_id          = $employee->role_id;

        $this->updateEmployee   = true;
    }

    public function updateEmployee()
    {
        $this->validate();

        Employee::find($this->employee_id)->update([
            'first_name'        => $this->first_name,
            'last_name'         => $this->last_name,
            'email'             => $this->email,
            'date_of_birth'     => $this->date_of_birth,
            'phone_number'      => $this->phone_number
        ]);

        $this->updateEmployee = false;
        $this->reset(['first_name','last_name','email', 'date_of_birth', 'phone_number']);

        session()->flash('updated', 'Updated!');
    }

    public function deleteEmployee($id)
    {
        Employee::findOrFail($id)->delete();

        session()->flash('deleted', 'Deleted!');
    }

    public function cancel()
    {
        $this->updateEmployee = false;
        $this->reset(['first_name','last_name','email', 'date_of_birth', 'phone_number']);
    }

    // public function showRoleName()
    // {
    //     $this->roles = Employee::where('role_id', '2')-with('role')->get();
    // }

    public function render()
    {
        // , [
        //     'roles' => Role::where('role_id', '1')->with('role')->get()
        // ]

        // $role_name = Employee::where('role_id', '1')->with('role')->get();

        $this->roles = Role::get();

        $this->employees = Employee::with('role')->get();

        return view('livewire.employees-component', compact('roles', 'employees'));
    }
}
