<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::firstOrCreate([
            'user_id' => 1,
            'title' => 'Gåturer',
            'description' => 'Bilder fra mine gåturer rundt omkring i Skien',
            'img_teaser' => 'userpics/Fjelleven/gåturer/orion.jpg'
        ]);

        Theme::firstOrCreate([
            'user_id' => 1,
            'title' => 'Topper',
            'description' => 'Bilder fra topper i Grenland',
            'img_teaser' => 'userpics/Fjelleven/topper/blåfjelltopp.jpeg'
        ]);
    }
}
