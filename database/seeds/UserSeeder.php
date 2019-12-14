<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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

        User::truncate();
        User::flushEventListeners();

        $usersQuantity = 1000;

        factory(User::class,$usersQuantity)->create();
    }
}
