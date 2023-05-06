<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Osrsbotplanner extends Component
{
    public $list = [];
    public function mount(){
        $this->reroll();
    }

    public function render()
    {
        return view('livewire.osrsbotplanner');
    }

    public function reroll()
    {
        $scripts = \App\Models\Script::all();
        if ($scripts->count() < 3) {
            return;
        }
        $scripts = $scripts->random(3);
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
}
