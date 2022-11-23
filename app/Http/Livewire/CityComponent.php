<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\Country;

class CityComponent extends Component
{
    public $city_name;
    public $city_pop;
    public $country_id = '';

    protected $rules = [
        'city_name'  => 'required',
        'city_pop'   => 'required',
        'country_id' => 'required',
    ];

    public function storeCity()
    {
        $this->validate();

        City::create([
            'city_name'   => $this->city_name,
            'city_pop'    => $this->city_pop,
            'country_id'  => $this->country_id
        ]);

        $this->reset(['city_name','city_pop', 'country_id']);

        session()->flash('submitted', 'Submitted!');
    }

    public function render()
    {
        $countries = Country::all();
        $cities = City::all();
        return view('livewire.city-component', compact('countries'), compact('cities'));
    }
}
