<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\League;
use App\Models\Conference;
use App\Models\Division;
use App\Models\Team;
use App\Models\Player;
use App\Models\Movie;

class Nba extends Component
{
    public function render()
    {
        $leagues = League::get();
        $conferences = Conference::get();
        $divisions = Division::get();
        $teams = Team::get();
        $players = Player::get();
        $movies = Movie::get();

        return view('livewire.nba', compact(
            'leagues',
            'conferences', 
            'divisions', 
            'teams',
            'players',
            'movies'
        ));
    }
}
