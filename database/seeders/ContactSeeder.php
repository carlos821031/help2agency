<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Contact::create([
            'name' => 'Carlos E',
            'email' => '123456789@gmail.com',
            'phone' => '+53 11111111',
            'last_name_1' => 'AAAA',
            'last_name_2' => 'AAAAA',
            'nationality' => 'Nacionalidad1',
            'description' => 'TCP',
            'job' => 'Informatico',
            'show_as' => 'Carlos E',
            'page_web' => '',
            'address' => '',
            'privacy' => 'privated',
            'active'  => '1',
        ]);
        Contact::create([
            'name' => 'Olivia',
            'email' => '111111@11111.com',
            'phone' => '+53 111111',
            'last_name_1' => '',
            'last_name_2' => '',
            'nationality' => 'Nacionalidad1',
            'description' => 'Dueño o administrador del Hostal La Habanera',
            'job' => '',
            'show_as' => 'Olivia - Hostal La Habanera',
            'page_web' => '',
            'address' => 'Calle San Francisco, Centro Habana, Cuba',
            'privacy' => 'privated',
            'active'  => '1',
        ]);
        Contact::create([
            'name' => 'Adita',
            'email' => '2222@gmail.com',
            'phone' => '52 222222',
            'last_name_1' => 'Iglesias',
            'last_name_2' => 'AAAA',
            'nationality' => 'Nacionalidad2',
            'description' => 'Dueño o administrador del Colonial',
            'job' => '',
            'show_as' => 'Adita - Colonial',
            'page_web' => '',
            'address' => 'Calle B #45, Vedado, Habana, Cuba',
            'privacy' => 'privated',
            'active'  => '1',
        ]);
        Contact::create([
            'name' => 'Anubis',
            'email' => '3333@3333.com',
            'phone' => '+53 333333',
            'last_name_1' => 'RRRRRR',
            'last_name_2' => 'RRRRRR',
            'nationality' => 'Nacionalidad3',
            'description' => 'Dueño o administrador de la Casa La China',
            'job' => '',
            'show_as' => 'La China',
            'page_web' => '',
            'address' => 'Calle Las Maravillas # 3B, Viñales, Pinar del Rio, Cuba',
            'privacy' => 'privated',
            'active'  => '1',
        ]);
        Contact::factory(0)->create();
    }
}
