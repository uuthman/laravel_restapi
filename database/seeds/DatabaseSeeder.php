<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard();

       $this->call(UserSeeder::class);
       $this->call(CategorySeeder::class);
       $this->call(ProductSeeder::class);
       $this->call(TransactionSeeder::class);

       Model::reguard();
    }
}
