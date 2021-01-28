<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            $new_category = new Category();
            $new_category->name = $faker->words(3, true);
            //genero slug
            $slug = Str::slug($new_category->name);
            $slug_base = $slug;
            //devo verif che lo slug non esista già nel db
            $categoria_presente = Category::where('slug', $slug)->first();
            $contatore = 1;
            while ($categoria_presente) {
                $slug = $slug_base . '-' . $contatore;
                $contatore++;
                $categoria_presente = Category::where('slug', $slug)->first();
            }
            //assegno slug al post
            $new_category->slug = $slug;
            $new_category->save();
        }
    }
}
