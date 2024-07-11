<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i <100; $i++){
            DB::table('posts')->insert(
                [
                    'title' => $faker->text(30),
                    'image' => 'https://media.vneconomy.vn/w800/images/upload/2023/05/05/tiktokvn.jpeg',
                    'description' => $faker->text(30),
                    'content' => $faker->text(),
                    'view' => rand(1, 1000),
                    'cate_id' => rand(1, 4), 
                ]
            );
        }
    }
}
