<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ContactSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(ContactWaySeeder::class);    
        $this->call(BankCardSeeder::class);                  
        $this->call(LocationSeeder::class);                  
        $this->call(SupplierSeeder::class);                  
        $this->call(ContactSupplierSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ContractSeeder::class);
        $this->call(ReleaseSeeder::class);        
        $this->call(MarketSeeder::class);        
    }
}
