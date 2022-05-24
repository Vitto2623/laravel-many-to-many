<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->words(3, true);
            $newPost->content = $faker->paragraph(6, true);
            $newPost->image_url = "https://picsum.photos/id/$i/450/600";
            $newPost->save();
        }
    }
}
