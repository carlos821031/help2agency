<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1 - Hostal La Habanera
        Supplier::create([
            'name' => 'Hostal La Habanera',
            'parent_agency' => '',
            'description' => 'Descripcion de la Casa Hostal La Habanera',            
            'logo' => 'url/img',            
            'location_id' => '2',            
        ])->contacts(1);
        //2 - AHT Colonial
        Supplier::create([
            'name' => 'AHT Colonial',
            'parent_agency' => '',
            'description' => 'Descripcion de AHT Colonial',            
            'logo' => 'url/img',            
            'location_id' => '2',            
        ]);   
        //3 - Casa La China
        Supplier::create([
            'name' => 'Casa La China',
            'parent_agency' => '',
            'description' => 'Descripcion de Casa La China',            
            'logo' => 'url/img',            
            'location_id' => '3',            
        ]);      
    }
}
