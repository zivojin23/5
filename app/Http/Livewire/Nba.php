<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\League;
use App\Models\Conference;
use App\Models\Division;
use App\Models\Team;

class Nba extends Component
{
    public function render()
    {
        $leagues = League::get();
        $conferences = Conference::get();
        $divisions = Division::get();
        $teams = Team::get();

        return view('livewire.nba', compact(
            'leagues',
            'conferences', 
            'divisions', 
            'teams'
        ));
    }
}
