<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CreatePost extends Controller
{
    public function change_img(Post $post, $img)
    {

        $desc = '';

        if ($img == 'spekkhogger') {
            $img = 'userpics/Hydrohannah/stillehavet/spekkhogger.jpeg';
            $desc = 'Spekkhogger';
        } else if ($img == 'delfin') {
            $img = 'userpics/Hydrohannah/stillehavet/dolphin.png';
            $desc = 'Delfin';
        } else if ($img == 'gaselle') {
            $img = 'userpics/Desertdan/ørkendyr/gaselle.jpeg';
            $desc = 'Gaselle';
        } else {
            $img = 'userpics/Desertdan/ørkendyr/camel.jpeg';
            $desc = 'Camel';
        }


        $post->img_url = $img;
        $post->description = $desc;

        $post->save();

        return response(['ok'], 200);
    }
}
