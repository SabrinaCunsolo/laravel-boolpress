<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
            $new_post->title    = $faker->word();
            $new_post->subtitle = $faker->sentence();
            $new_post->text     = $faker->text();
            $new_post->author   = $faker->name();
            $new_post->date     = $faker->date();
            //genero slug
            $slug               = Str::slug($new_post->title);
            $slug_base          = $slug;
            //devo verif che lo slug non esista già nel db
            $post_presente      = Post::where('slug', $slug)->first();
            $contatore          = 1;
            while ($post_presente) {
                $slug           = $slug_base . '-' . $contatore;
                $contatore++;
                $post_presente  = Post::where('slug', $slug)->first();
            }
            //assegno slug al post
            $new_post->slug     = $slug;
            $new_post->save();
        }

    }
}
