<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListScripts extends Model
{
    use HasFactory;

    public function pickRandomList(){
        $list = \App\Models\Script::all();

    }
}
