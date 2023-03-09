<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //accommodation
        Category::create([
            'name' => 'Accommodation',
            'Description' => 'Alojamiento en hostales, hoteles, etc',          
        ]);
        Category::create([
            'name' => 'Rent',
            'Description' => 'Renta de carros, con chofer y sin chofer',           
        ]);
        Category::create([
            'name' => 'Restaurant',
            'Description' => 'Coordinacion a restaurantes, paladares, lugares de consumos alimenticios',           
        ]);
    }
}
