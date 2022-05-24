<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\Post;

class CategoryPostTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        

        $posts = Post::all();

        foreach ($posts as $post) {
            $post->categories()->attach($faker->numberBetween(1,6));
            $post->save();
        }
    }
}
