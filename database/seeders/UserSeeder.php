<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name' => 'Fjelleven',
            'email' => 'fjelleven@mail.com',
            'password' => '$2y$10$mIfaFOVACiTWcuw/0XDAau9dAtbiS4X61fO872rh5gmMxyMqM4wAi',
        ]);

        User::firstOrCreate([
            'name' => 'Desertdan',
            'email' => 'desertdan@mail.com',
            'password' => '$2y$10$I1sKmz4dHkhirlp7ysgrk.HE87En9zwcMslHrzYdzrWPDupKLsLuy',
        ]);


        User::firstOrCreate([
            'name' => 'Himalayamaya',
            'email' => 'himalayamaya@mail.com',
            'password' => '$2y$10$/uqSVLZ6J/qZ1nFoBm30FuqvchIWDJk33iLQoMbEWjZ40GSsjj5Oy',
        ]);

        User::firstOrCreate([
            'name' => 'Hydrohannah',
            'email' => 'hydrohannah@mail.com',
            'password' => '$2y$10$auPGJGTjtjAEdPC9ImaAOOQ6d39Hhw61kGBsaLGGqEFjU1N7dU8dW',
        ]);
    }
}
