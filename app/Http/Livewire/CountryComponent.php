<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;

class CountryComponent extends Component
{
    public $name;
    public $pop;

    protected $rules = [
        'name'  => 'required',
        'pop'   => 'required'
    ];

    public function storeCountry()
    {
        $this->validate();

        Country::create([
            'name'       => $this->name,
            'pop'        => $this->pop
        ]);

        $this->reset(['name','pop']);

        session()->flash('submitted', 'Submitted!');
    }

    public function render()
    {
        $countries = Country::all();
        return view('livewire.country-component', compact('countries'));
    }
}
