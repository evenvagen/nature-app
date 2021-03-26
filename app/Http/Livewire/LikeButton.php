<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeButton extends Component
{

    public $heart = '♡';


    public function like()
    {
        $this->heart = '♥';
    }


    public function render()
    {
        return view('livewire.like-button');
    }
}
