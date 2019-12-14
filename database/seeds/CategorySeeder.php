<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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


        Category::truncate();

        Category::flushEventListeners();

        $categoriesQuantity = 30;

        factory(Category::class,$categoriesQuantity)->create();
    }
}
