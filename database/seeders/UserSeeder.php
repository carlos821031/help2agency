<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Carlos E',
            'email' => 'carlos821031@gmail.com',
            'phone' => '+53 54123840',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::create([
            'name' => 'Yunaira',
            'email' => 'yusi@cubarama.it',
            'phone' => '+53 52481162',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::create([
            'name' => 'Saelis',
            'email' => 'yademis@cubarama.it',
            'phone' => '+53 52936162',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::create([
            'name' => 'Nena',
            'email' => 'nena@cubarama.it',
            'phone' => '+53 52123456',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::create([
            'name' => 'Copa',
            'email' => 'copa@cubarama.it',
            'phone' => '+53 58119494',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::create([
            'name' => 'Mario',
            'email' => 'mario@cubarama.it',
            'phone' => '+53 52858880',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::create([
            'name' => 'Humberto',
            'email' => 'lisbeth@cubarama.it',
            'phone' => '+53 52949797',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::create([
            'name' => 'Francisco',
            'email' => 'francisco@cubarama.it',
            'phone' => '+53 52850515',
            'password' => bcrypt('password'),
            'active' => '1',
        ]);
        User::factory(0)->create();
    }
}
