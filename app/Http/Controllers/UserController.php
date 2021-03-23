<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {

        $user = Auth::user();

        $themes = Theme::where('user_id', $user->id)->get();

        return view('user.profile', compact(['themes', 'user']));
    }

    public function show($id)
    {
        $user = User::find($id);

        $themes = Theme::where('user_id', $user->id)->get();

        return view('user.visitprofile', compact(['user', 'themes']));
    }
}
