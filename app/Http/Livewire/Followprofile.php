<?php

namespace App\Http\Livewire;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Followprofile extends Component
{

    public $status;
    public $followers;
    public $following;

    public function mount()
    {
        $this->status = 'følg';
    }

    public function follow()
    {

        $loggedInUser = Auth::user();

        $follow = new Follower([
            'user_id' => $loggedInUser->id,
            'follow_id' => 3
        ]);

        $follow->save();

        $this->status = "avfølg";
    }

    public function render()
    {
        $this->followers = count(Follower::where('follow_id', 3)->get());
        $this->following = count(Follower::where('user_id', 3)->get());

        return view('livewire.followprofile');
    }
}
