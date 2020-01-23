<?php

use Illuminate\Database\Seeder;
use App\Ingredients;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredients::create([
            'name' => 'Carrots',
            'description' => 'Vegetables',
        ]);

        Ingredients::create([
            'name' => 'Tomatoes',
            'description' => 'Vegetables',
        ]);

        Ingredients::create([
            'name' => 'Apples',
            'description' => 'Fruits',
        ]);

        Ingredients::create([
            'name' => 'Chicken',
            'description' => 'Meat',
        ]);

        Ingredients::create([
            'name' => 'Steak',
            'description' => 'Meat',
        ]);

        Ingredients::create([
            'name' => 'Onions',
            'description' => 'Vegetables',
        ]);
    }
}
