<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OSRSController extends Controller
{
    public function planned(){
        //List of activities
        $list = [
            [
                'script' => 'ElAgility',
            ],
            [
                'script' => 'ElWintertodt',
            ],
            [
                'script' => 'ElThievier',
            ],
            [
                'script' => 'ElTempoross',
            ],
            [
                'script' => 'ElGuardians',
            ],
            [
                'script' => 'ElGemMine',
            ],
            [
                'script' => 'ElMotherlodeMine',
            ],
            [
                'script' => 'ElSkiller',
            ],
            [
                'script' => 'ElBankStander',
            ],
            [
                'script' => 'ElGiantFoundry',
            ],
            [
                'script' => 'ElMTA',
            ],
            [
                'script' => 'ElTrawler',
            ],
            [
                'script' => 'ElShopper',
            ],
            [
                'script' => 'ElCombat',
            ],
            [
                'script' => 'ElTeaks',
            ],
            [
                'script' => 'ElMahoganyHomes'
            ]
        ];

        //Number of options to pick
        $options = 3;
        $random = array_rand($list, $options);

        $sum = rand(5, 9);
        $num1 = rand(0, $sum);
        $num2 = rand(0, $sum - $num1);
        $num3 = $sum - $num1 - $num2;

        //Add num1, num2, num3 to time array
        $time = [];
        array_push($time, $num1, $num2, $num3);

        return view('osrsbotplanner', ['list' => $list, 'random' => $random, 'runTime' => $time]);
    }
}
