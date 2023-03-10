<?php

namespace Database\Seeders;

use App\Models\Release;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Contrato1
        Release::create([
            'date_start' => '2022-11-01',
            'date_finish' => '2023-05-31',
            'release_value' => '2',
            'contract_id' => '1'
        ]);
        //Contrato1
        Release::create([
            'date_start' => '2023-06-01',
            'date_finish' => '2023-11-30',
            'release_value' => '3',
            'contract_id' => '1'
        ]);
        //Contrato2
        Release::create([
            'date_start' => '2022-11-01',
            'date_finish' => '2023-05-31',
            'release_value' => '4',
            'contract_id' => '2'
        ]);
        //Contrato2
        Release::create([
            'date_start' => '2023-06-01',
            'date_finish' => '2023-11-30',
            'release_value' => '5',
            'contract_id' => '2'
        ]);
        //Contrato2
        Release::create([
            'date_start' => '2022-11-01',
            'date_finish' => '2023-05-31',
            'release_value' => '6',
            'contract_id' => '3'
        ]);
        //Contrato2
        Release::create([
            'date_start' => '2023-06-01',
            'date_finish' => '2023-11-30',
            'release_value' => '7',
            'contract_id' => '3'
        ]);
    }
}
