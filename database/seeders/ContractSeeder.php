<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        
        Contract::create([
            'archivecontract' => 'url/1/2',
            'Season_Start' => 'Invierno 2022/2023',
            'Season_Finish' => 'Verano 2023',
            'Period_Start' => '2023-11-01',
            'Period_Finish' => '2023-10-31',
            'Date_Sing' => '2022-04-14',
            'place_sing' => 'La Habana. Cuba',
            'code' => 'CODE121',
            'invoice_email' => 'room4rent@nauta.cu',
            'yeard_baby' => '0.99',
            'yeard_child' => '17.99',
            'supplier_id' => '1',
            'currency_id' => '2',
            'category_id' => '1',
        ]);
        Contract::create([
            'archivecontract' => 'url/2/3',
            'Season_Start' => 'Invierno 2022/2023',
            'Season_Finish' => 'Verano 2023',
            'Period_Start' => '2022-11-01',
            'Period_Finish' => '2023-10-31',
            'Date_Sing' => '2022-04-14',
            'place_sing' => 'La Habana. Cuba',
            'code' => 'CODE221',
            'invoice_email' => 'adaiglesias@gmail.com',
            'yeard_baby' => '0.99',
            'yeard_child' => '17.99',
            'supplier_id' => '2',
            'currency_id' => '2',
            'category_id' => '1',
        ]);
        Contract::create([
            'archivecontract' => 'url/3/4',
            'Season_Start' => 'Invierno 2022/2023',
            'Season_Finish' => 'Verano 2023',
            'Period_Start' => '2022-11-01',
            'Period_Finish' => '2023-10-31',
            'Date_Sing' => '2022-04-14',
            'place_sing' => 'Viñales',
            'code' => 'CODE321',
            'invoice_email' => 'lachinavinales@nauta.cu',
            'yeard_baby' => '0.99',
            'yeard_child' => '17.99',
            'supplier_id' => '3',
            'currency_id' => '2',
            'category_id' => '1',
        ]);
                
    }
}
