<?php

use Faker\Factory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 100; $i++) {
            Category::create([
                'name' => $faker->name
            ]);
        }
    }
}
