<?php

namespace App\Http\Livewire;

use App\Models\Groupe;
use Livewire\Component;
use App\Models\moniteur;

class EmploiDuTemps extends Component
{
    
    public function render()
    {
        $jour = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $emploiG = Groupe::all();
        $emploiM = moniteur::all();
        return view('livewire.emploi-du-temps', compact('jour', 'emploiM', 'emploiG'));
    }
}
