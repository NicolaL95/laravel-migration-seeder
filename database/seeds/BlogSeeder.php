<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Faker\Generator as Faker;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
         for ($i=0; $i < 10; $i++) { 
            $newblog = new Blog();
            $newblog->title = $faker->regexify();
            $newblog->description = $faker->word(30); 
            $newblog->save();
        } 
    }
}
