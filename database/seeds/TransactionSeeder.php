<?php

use App\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');


        Transaction::truncate();
        Transaction::flushEventListeners();



        $transactionsQuantity = 1000;




        factory(Transaction::class,$transactionsQuantity)->create();
    }
}
