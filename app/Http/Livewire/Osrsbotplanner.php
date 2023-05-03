<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Osrsbotplanner extends Component
{
    public $list = [];

    protected $listeners = [
        '$refresh'
    ];

    public function mount(){
        $scripts = \App\Models\Script::all()->random(3);
        $sum = rand(5, 9);
        $num1 = rand(0, $sum);
        $num2 = rand(0, $sum - $num1);
        $num3 = $sum - $num1 - $num2;
        $runtime = [
            $num1, $num2, $num3
        ];
        foreach($scripts as $index => $script){
            $script->runtime = $runtime[$index];
        }
        $this->list = $scripts;
    }

    public function render()
    {
        return view('livewire.osrsbotplanner');
    }

    public function refreshComponent()
    {
        $this->emitSelf('refreshComponent');
    }
}
