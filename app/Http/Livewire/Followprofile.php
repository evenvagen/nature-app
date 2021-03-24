<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Followprofile extends Component
{

    public $status;

    public function mount()
    {
        $this->status = 'følg';
    }

    public function follow()
    {
        $this->status = 'følger';
    }

    public function render()
    {
        return view('livewire.followprofile');
    }
}
