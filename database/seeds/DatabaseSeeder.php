<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(NutritionsTableSeeder::class);
         $this->call(IngredientsTableSeeder::class);
         $this->call(RecipeTableSeeder::class);
         $this->call(NutritionAmountTableSeeder::class);
         $this->call(RecipeIngredientsTableSeeder::class);
    }
}
