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
            'name' => 'Potassium',
            'minimum_amount' => 3.5,
            'maximum_amount' => 5,
        ]);

        Nutritions::create([
            'name' => 'Chlorine',
            'minimum_amount' => 1,
            'maximum_amount' => 3,
        ]);

        Nutritions::create([
            'name' => 'Sodium',
            'minimum_amount' => 135,
            'maximum_amount' => 145,
        ]);

        Nutritions::create([
            'name' => 'Calcium',
            'minimum_amount' => 4.3,
            'maximum_amount' => 5.3,
        ]);

        Nutritions::create([
            'name' => 'Phosphorus',
            'minimum_amount' => 2.5,
            'maximum_amount' => 4.5,
        ]);

        Nutritions::create([
            'name' => 'Magnesium',
            'minimum_amount' => 1.5,
            'maximum_amount' => 2.5,
        ]);

        Nutritions::create([
            'name' => 'Iron',
            'minimum_amount' => 80,
            'maximum_amount' => 180,
        ]);

        Nutritions::create([
            'name' => 'Zinc',
            'minimum_amount' => 80,
            'maximum_amount' => 120,
        ]);

        Nutritions::create([
            'name' => 'Manganese',
            'minimum_amount' => 0.4,
            'maximum_amount' => 0.85,
        ]);

        Nutritions::create([
            'name' => 'Copper',
            'minimum_amount' => 70,
            'maximum_amount' => 140,
        ]);

        Nutritions::create([
            'name' => 'A Vitamin',
            'minimum_amount' => 15,
            'maximum_amount' => 60,
        ]);

        Nutritions::create([
            'name' => 'B1 Vitamin',
            'minimum_amount' => 2.5,
            'maximum_amount' => 7.5,
        ]);

        Nutritions::create([
            'name' => 'B2 Vitamin',
            'minimum_amount' => 4,
            'maximum_amount' => 24,
        ]);

        Nutritions::create([
            'name' => 'B5 Vitamin',
            'minimum_amount' => 1.6,
            'maximum_amount' => 2.7,
        ]);

        Nutritions::create([
            'name' => 'B7 Vitamin',
            'minimum_amount' => 400,
            'maximum_amount' => 1000,
        ]);

        Nutritions::create([
            'name' => 'B9 Vitamin',
            'minimum_amount' => 2,
            'maximum_amount' => 20,
        ]);

        Nutritions::create([
            'name' => 'B12 Vitamin',
            'minimum_amount' => 200,
            'maximum_amount' => 900,
        ]);

        Nutritions::create([
            'name' => 'C Vitamin',
            'minimum_amount' => 0.6,
            'maximum_amount' => 2,
        ]);

        Nutritions::create([
            'name' => 'D Vitamin',
            'minimum_amount' => 20,
            'maximum_amount' => 50,
        ]);

        Nutritions::create([
            'name' => 'E Vitamin',
            'minimum_amount' => 5.5,
            'maximum_amount' => 17,
        ]);

        Nutritions::create([
            'name' => 'K Vitamin',
            'minimum_amount' => 0.2,
            'maximum_amount' => 3.2,
        ]);
    }
}
