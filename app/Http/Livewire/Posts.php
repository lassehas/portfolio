<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Posts extends Component
{

    public $projects;

    public function mount(){
        $this->projects = \App\Models\ProjectPost::all()->sortByDesc('created_at');
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
