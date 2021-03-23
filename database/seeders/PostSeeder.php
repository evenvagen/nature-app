<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::firstOrCreate([
            'theme_id' => 1,
            'description' => 'Svartskauen',
            'img_url' => 'userpics/Fjelleven/gåturer/svartskauen.jpg'
        ]);

        Post::firstOrCreate([
            'theme_id' => 1,
            'description' => 'Orion',
            'img_url' => 'userpics/Fjelleven/gåturer/orion.jpg'
        ]);

        Post::firstOrCreate([
            'theme_id' => 1,
            'description' => 'Andre siden av Vealøs',
            'img_url' => 'userpics/Fjelleven/gåturer/vealøs2.jpeg'
        ]);

        Post::firstOrCreate([
            'theme_id' => 1,
            'description' => 'Tree',
            'img_url' => 'userpics/Fjelleven/gåturer/treekappern.jpg'
        ]);
    }
}
