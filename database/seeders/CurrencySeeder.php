<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'full_name' => 'Peso cubano',
            'short_name' => 'CUP',
            'exchange_rate' => '120.00000000',            
        ]);
        Currency::create([
            'full_name' => 'Peso cubano MLC',
            'short_name' => 'MLC',
            'exchange_rate' => '1',            
        ]);
        Currency::create([
            'full_name' => 'Dólar estadounidense',
            'short_name' => 'USD',
            'exchange_rate' => '1',            
        ]);                
        Currency::create([
            'full_name' => 'EURO',
            'short_name' => 'EUR',
            'exchange_rate' => '0.93990588',            
        ]);
        Currency::create([
            'full_name' => 'Dólar canadiense',
            'short_name' => 'CAD',
            'exchange_rate' => '1.35043467',            
        ]);
    }
}
