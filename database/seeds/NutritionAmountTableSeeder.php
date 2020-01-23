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

        NutritionAmount::create([
            'ingredient_id' => 1,
            'nutrition_id'  => 3,
            'amount'        => 22
        ]);

        NutritionAmount::create([
            'ingredient_id' => 1,
            'nutrition_id'  => 5,
            'amount'        => 2
        ]);

        NutritionAmount::create([
            'ingredient_id' => 1,
            'nutrition_id'  => 7,
            'amount'        => 0.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 1,
            'nutrition_id'  => 9,
            'amount'        => 7
        ]);

        NutritionAmount::create([
            'ingredient_id' => 2,
            'nutrition_id'  => 1,
            'amount'        => 2.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 2,
            'nutrition_id'  => 4,
            'amount'        => 22
        ]);

        NutritionAmount::create([
            'ingredient_id' => 2,
            'nutrition_id'  => 6,
            'amount'        => 2
        ]);

        NutritionAmount::create([
            'ingredient_id' => 2,
            'nutrition_id'  => 8,
            'amount'        => 0.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 2,
            'nutrition_id'  => 10,
            'amount'        => 7
        ]);

        NutritionAmount::create([
            'ingredient_id' => 3,
            'nutrition_id'  => 2,
            'amount'        => 2.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 3,
            'nutrition_id'  => 3,
            'amount'        => 22
        ]);

        NutritionAmount::create([
            'ingredient_id' => 3,
            'nutrition_id'  => 4,
            'amount'        => 2
        ]);

        NutritionAmount::create([
            'ingredient_id' => 3,
            'nutrition_id'  => 6,
            'amount'        => 0.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 3,
            'nutrition_id'  => 11,
            'amount'        => 7
        ]);

        NutritionAmount::create([
            'ingredient_id' => 4,
            'nutrition_id'  => 12,
            'amount'        => 2.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 4,
            'nutrition_id'  => 11,
            'amount'        => 22
        ]);

        NutritionAmount::create([
            'ingredient_id' => 4,
            'nutrition_id'  => 9,
            'amount'        => 2
        ]);

        NutritionAmount::create([
            'ingredient_id' => 4,
            'nutrition_id'  => 7,
            'amount'        => 0.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 4,
            'nutrition_id'  => 2,
            'amount'        => 7
        ]);

        NutritionAmount::create([
            'ingredient_id' => 5,
            'nutrition_id'  => 8,
            'amount'        => 0.5
        ]);

        NutritionAmount::create([
            'ingredient_id' => 5,
            'nutrition_id'  => 11,
            'amount'        => 1
        ]);

        NutritionAmount::create([
            'ingredient_id' => 5,
            'nutrition_id'  => 4,
            'amount'        => 14
        ]);

        NutritionAmount::create([
            'ingredient_id' => 5,
            'nutrition_id'  => 3,
            'amount'        => 6.9
        ]);

        NutritionAmount::create([
            'ingredient_id' => 5,
            'nutrition_id'  => 2,
            'amount'        => 7
        ]);
    }
}
