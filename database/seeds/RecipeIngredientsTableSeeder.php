<?php

use Illuminate\Database\Seeder;
use App\RecipeIngredients;

class RecipeIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecipeIngredients::create([
            'recipe_id'     => 1,
            'ingredient_id' => 2,
        ]);

        RecipeIngredients::create([
            'recipe_id'     => 1,
            'ingredient_id' => 3,
        ]);
    }
}
