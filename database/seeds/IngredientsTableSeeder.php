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
            'name' => 'Karrota',
            'description' => '',
        ]);

        Ingredients::create([
            'name' => 'Karrota',
            'description' => '',
        ]);
    }
}
