<?php

use Illuminate\Database\Seeder;
use App\NutritionAmount;

class NutritionAmountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NutritionAmount::create([
            'ingredient_id' => 1,
            'nutrition_id'  => 2,
            'amount'        => 2.5
        ]);
    }
}
