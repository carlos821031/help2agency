<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Location::create([
            'destination' => 'Varadero',
            'province' => 'Matanzas',
            'country' => 'Cuba',            
        ]);  
        Location::create([
            'destination' => 'Habana',
            'province' => 'Habana',
            'country' => 'Cuba',            
        ]); 
        Location::create([
            'destination' => 'Viñales',
            'province' => 'Pinar del Rio',
            'country' => 'Cuba',            
        ]);
        Location::create([
            'destination' => 'Trinidad',
            'province' => 'Sancti Spíritus',
            'country' => 'Cuba',            
        ]);   
    }
}
