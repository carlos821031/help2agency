<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Market::create([
            'name' => 'Mercado Interno',
            'Description' => '',                       
        ]);
        //
        Market::create([
            'name' => 'Italia',
            'Description' => '',                       
        ]);
        //
        Market::create([
            'name' => 'Francia',
            'Description' => '',                       
        ]);
        //
        Market::create([
            'name' => 'Americano',
            'Description' => '',                       
        ]);
    }
}
