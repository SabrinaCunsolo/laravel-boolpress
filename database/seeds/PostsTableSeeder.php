<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i <49 ; $i++) {
            $new_post = new Post();
            $new_post->title = $faker->word();
            $new_post->subtitle = $faker->sentence();
            $new_post->text = $faker->text();
            $new_post->author = $faker->name();
            $new_post->date = $faker->date();
            $new_post ->save();
        }

    }
}
