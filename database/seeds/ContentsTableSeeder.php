<?php

use App\User;
use Faker\Factory;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $category = Category::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        for ($i=0; $i < 100; $i++) {
            Content::create([
                'category_id' => $category->id,
                'user_id' => $user->id,
                'title' => $faker->name,
                'slug' => str_slug($faker->name),
                'body' => $faker->paragraphs(rand(1, 6)),
            ]);
        }
    }
}
