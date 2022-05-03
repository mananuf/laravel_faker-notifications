<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
class FakeFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(\App\Models\Book::class, 500)->create();
        $faker = \faker\Factory::create();
        for( $i=1; $i <= 100; $i++){
            \App\Models\Book::create([
                'title' => $faker->name,
                'author' => $faker->name,
                'author_email' => $faker->unique()->safeEmail(),
                'phone' => $faker->phoneNumber(),
            ]);
        }
    }
}
