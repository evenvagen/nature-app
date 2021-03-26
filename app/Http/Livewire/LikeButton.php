<?php

namespace App\Http\Livewire;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeButton extends Component
{

    public $heart = '♡';
    public $count = 0;


    public function like()
    {

        $user = Auth::user();

        $like = new Like([
            'user_id' => $user->id,
            'post_id' => 1
        ]);

        $like->save();

        $this->heart = '♥';
        $this->count = 1;
    }


    public function render()
    {
        return view('livewire.like-button');
    }
}
