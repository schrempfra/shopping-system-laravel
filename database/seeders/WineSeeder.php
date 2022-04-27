<?php

namespace Database\Seeders;

use App\Models\Wine;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Factory::create();

        for ($i=0; $i < 1000; $i++) { 
            $wine = new Wine();
            $wine->title = $faker->sentence();
            $wine->type = $faker->randomElement(['Weißburgunder', 'Welschriesling', 'Riesling', 'Sauvignon Blanc', 'Sämling']);
            $wine->description = $faker->sentence(30);
            $wine->price = $faker->randomFloat(2, 20, 30);
            $wine->html = $faker->sentence();
            $wine->created_at = now();
            $wine->updated_at = now();
            $wine->save();
        }
    }
}