<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\City;

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
        // $cities = City::get();

        // $collection = City::where('country_id', '5')->with('country')->get();
        // dd($collection->toJson(JSON_PRETTY_PRINT));
        // exit;


        $countries = Country::get();
        return view('livewire.country-component', compact('countries'));
    }
}
