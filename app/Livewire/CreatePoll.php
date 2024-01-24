<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $question;
    public $options = [];

    public function render()
    {
        return view('livewire.create-poll');
    }
    public function createPoll(){
        
    }
}
