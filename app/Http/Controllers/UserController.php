<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Illuminate\Http\Request;
use App\Models\Theme;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {

        $user = Auth::user();

        $followers = count(Follower::where('follow_id', $user->id)->get());
        $following = count(Follower::where('user_id', $user->id)->get());

        $themes = Theme::where('user_id', $user->id)->get();

        return view('user.profile', compact(['themes', 'user', 'followers', 'following']));
    }

    public function show($id)
    {
        $user = User::find($id);

        $themes = Theme::where('user_id', $user->id)->get();

        return view('user.visitprofile', compact(['user', 'themes']));
    }
}
