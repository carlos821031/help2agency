<?php

namespace Database\Seeders;

use App\Models\ContactSupplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //2 - Olivia, 1 - Hostal La Habanera
        ContactSupplier::create([
            'supplier_id' => '1',
            'contact_id' => '2'                      
        ]);
        //3 - Ada María, 2 - AHT Colonial
        ContactSupplier::create([
            'supplier_id' => '2',
            'contact_id' => '3'                      
        ]);
        //4 - Anubis, 3 - Casa La China
        ContactSupplier::create([
            'supplier_id' => '3',
            'contact_id' => '4'                      
        ]);        
    }
}
