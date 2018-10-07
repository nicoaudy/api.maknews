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
        $category = Category::inRandomOrder()->first()->id;
        $user = User::inRandomOrder()->first()->id;

        for ($i=0; $i < 100; $i++) {
            $content = Content::create([
                'category_id' => $category,
                'user_id' => $user,
                'title' => $faker->name,
                'slug' => str_slug($faker->name),
                'body' => $faker->paragraphs(rand(1, 6), true),
                'created_at' => now(),
            ]);

            $url = 'https://picsum.photos/200/300/?random';
            $content->addMediaFromUrl($url)->toMediaCollection();
        }
    }
}
