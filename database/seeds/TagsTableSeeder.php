<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for ($i=0; $i < 5; $i++) {
            $new_tag = new Tag();
            $new_tag->name = $faker->words(3, true);
            //genero slug
            $slug = Str::slug($new_tag->name);
            $slug_base = $slug;
            //devo verif che lo slug non esista già nel db
            $tag_presente = Tag::where('slug', $slug)->first();
            $contatore = 1;
            while ($tag_presente) {
                $slug = $slug_base . '-' . $contatore;
                $contatore++;
                $tag_presente = Tag::where('slug', $slug)->first();
        }
            //assegno slug al post
            $new_tag->slug = $slug;
            $new_tag->save();
    }
    }
}
