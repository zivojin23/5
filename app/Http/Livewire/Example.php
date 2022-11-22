<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $example_name;
    public $example_level = '';

    public function render()
    {
        return view('livewire.example');
    }
}
