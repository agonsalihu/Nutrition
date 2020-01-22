<?php

use Illuminate\Database\Seeder;
use App\Nutritions;

class NutritionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Nutritions::create([
            'name' => 'potassium',
            'minimum_amount' => 2,
            'maximum_amount' => 3,
        ]);

        Nutritions::create([
            'name' => 'potassium',
            'minimum_amount' => 2,
            'maximum_amount' => 3,
        ]);

        Nutritions::create([
            'name' => 'sodium',
        ]);

        Nutritions::create([
            'name' => 'calcium',
        ]);

        Nutritions::create([
            'name' => 'phosphorus',
        ]);

        Nutritions::create([
            'name' => 'magnesium',
        ]);

        Nutritions::create([
            'name' => 'iron',
        ]);

        Nutritions::create([
            'name' => 'zinc',
        ]);

        Nutritions::create([
            'name' => 'manganese',
        ]);

        Nutritions::create([
            'name' => 'copper',
        ]);

        Nutritions::create([
            'name' => 'a_vitamin',
        ]);

        Nutritions::create([
            'name' => 'b1_vitamin',
        ]);

        Nutritions::create([
            'name' => 'b2_vitamin',
        ]);

        Nutritions::create([
            'name' => 'b5_vitamin',
        ]);

        Nutritions::create([
            'name' => 'b7_vitamin',
        ]);

        Nutritions::create([
            'name' => 'b9_vitamin',
        ]);

        Nutritions::create([
            'name' => 'b12_vitamin',
        ]);

        Nutritions::create([
            'name' => 'c_vitamin',
        ]);

        Nutritions::create([
            'name' => 'd_vitamin',
        ]);

        Nutritions::create([
            'name' => 'e_vitamin',
        ]);

        Nutritions::create([
            'name' => 'k_vitamin',
        ]);

        Nutritions::create([
            'name' => 'folic_acid',
        ]);
    }
}
