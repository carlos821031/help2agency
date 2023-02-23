<?php

namespace Database\Seeders;

use App\Models\BankCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Carloscup
        BankCard::create([
            
            'alias' => 'CUP',
            'bank_card_number' => '123456789',
            'description' => 'Carlos CUP',
            'contact_id' => '1',
            'currency_id' => '1'           
        ]);
        //
        BankCard::create([
            'alias' => 'MLC',
            'bank_card_number' => '9225 9598 7692 3449',
            'description' => 'Olibia MLC',
            'contact_id' => '2',
            'currency_id' => '2'           
        ]);   
        //
        BankCard::create([
            'alias' => 'Fiscal',
            'bank_card_number' => '0598770002075018',
            'description' => 'Ada Cuenta Fiscal',
            'contact_id' => '3',
            'currency_id' => '1'           
        ]); 
        //
        BankCard::create([
            'alias' => 'MLC',
            'bank_card_number' => '9225 0699 9178 6943',
            'description' => 'La China MLC',
            'contact_id' => '4',
            'currency_id' => '2'           
        ]);    
    }
}
