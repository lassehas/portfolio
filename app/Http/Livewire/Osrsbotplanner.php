<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Osrsbotplanner extends Component
{
    public $list = [];

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
        dd($this->list->toArray());
    }

    public function render()
    {
        //Number of options to pick
        $options = 3;
        $random = array_rand($options);


        //Add num1, num2, num3 to time array
        $time = [];
        array_push($time, $num1, $num2, $num3);
        return view('livewire.osrsbotplanner', ['list' => $list, 'random' => $random, 'runTime' => $time]);
    }

    public function randomizeList($options = 3){
        $this->randomList = array_rand($this->list, $options);
    }
}
