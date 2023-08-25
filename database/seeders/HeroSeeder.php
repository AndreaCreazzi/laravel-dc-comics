<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = config('heroes');

        foreach ($heroes as $hero) {

            $new_hero = new Hero();
            $new_hero->title = $hero['title'];
            $new_hero->description = $hero['description'];
            $new_hero->thumb = $hero['thumb'];
            $new_hero->price = $hero['price'];
            $new_hero->sale_date = $hero['sale_date'];
            $new_hero->type = $hero['type'];
            $new_hero->artists = implode(',', $hero['artists']);
            $new_hero->writers = implode(',', $hero['writers']);
            $new_hero->save();
        }
    }
}
