<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Practice extends Component
{
    public $name;
    public $level = '';
    
    public function render()
    {
        return view('livewire.practice');
    }
}
