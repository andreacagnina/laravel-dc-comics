<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $comic = new Comic();
            $comic->title = $faker->words(3, true);
            $comic->author = $faker->firstName() . ' ' . $faker->lastName();
            $comic->description = $faker->paragraph();
            $comic->price = $faker->randomFloat(2, 0, 9999);
            $comic->release_date = $faker->date('Y-m-d');
            $comic->type = $faker->word();

            $comic->save();
        }
    }
}
