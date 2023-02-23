<?php

namespace Database\Seeders;

use App\Models\ContactWay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactWaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactWay::create([
            'contact_id' => '1',
            'full_name' => 'Home',
            'valor' => '45524074',            
        ]);
        ContactWay::create([
            'contact_id' => '2',
            'full_name' => 'Fijo',
            'valor' => '7877-8133',            
        ]);
        ContactWay::create([
            'contact_id' => '3',
            'full_name' => 'Fijo',
            'valor' => '7833-6412',            
        ]);
        ContactWay::create([
            'contact_id' => '4',
            'full_name' => 'Fijo',
            'valor' => '48-696751',            
        ]);     
    }
}
