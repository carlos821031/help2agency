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
            'email' => 'carlos821031@gmail.com',
            'phone' => '+53 54123840',
            'last_name_1' => 'Miró',
            'last_name_2' => 'Reynaldo',
            'nationality' => 'Cubano',
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
            'email' => 'room4rent@nauta.cu',
            'phone' => '+53 52649551',
            'last_name_1' => '',
            'last_name_2' => '',
            'nationality' => 'Cubana',
            'description' => 'Dueño o administrador del Hostal La Habanera',
            'job' => '',
            'show_as' => 'Olivia - Hostal La Habanera',
            'page_web' => '',
            'address' => 'Calle San Francisco # 252 e/ Neptuno y San Miguel, Centro Habana, Cuba',
            'privacy' => 'privated',
            'active'  => '1',
        ]);
        Contact::create([
            'name' => 'Ada María',
            'email' => 'adaiglesias@gmail.com',
            'phone' => '52 (998) 2258000',
            'last_name_1' => 'Iglesias',
            'last_name_2' => 'Dorta',
            'nationality' => 'Cubana',
            'description' => 'Dueño o administrador del AHT Colonial',
            'job' => '',
            'show_as' => 'Ada María - AHT Colonial',
            'page_web' => '',
            'address' => 'Calle B #455 (altos) e/ 19 y 21, Vedado, Habana, Cuba',
            'privacy' => 'privated',
            'active'  => '1',
        ]);
        Contact::create([
            'name' => 'Anubis',
            'email' => 'lachinavinales@nauta.cu',
            'phone' => '+53 53518257',
            'last_name_1' => 'Remedios',
            'last_name_2' => 'Esquijarosa',
            'nationality' => 'Cubana',
            'description' => 'Dueño o administrador de la Casa La China',
            'job' => '',
            'show_as' => 'La China',
            'page_web' => '',
            'address' => 'Calle Las Maravillas # 3 e/ Salvador Cisneros y Pasaje B, Viñales, Pinar del Rio, Cuba',
            'privacy' => 'privated',
            'active'  => '1',
        ]);
        Contact::factory(0)->create();
    }
}
