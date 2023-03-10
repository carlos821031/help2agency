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
            'value' => '1111111',            
        ]);
        ContactWay::create([
            'contact_id' => '2',
            'full_name' => 'Fijo',
            'value' => '2222222',            
        ]);
        ContactWay::create([
            'contact_id' => '3',
            'full_name' => 'Fijo',
            'value' => '3333333',            
        ]);
        ContactWay::create([
            'contact_id' => '4',
            'full_name' => 'Fijo',
            'value' => '4444444',            
        ]);     
    }
}
