<?php

namespace Database\Seeders;

use App\Models\Describe;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory()
            ->count(10)
            ->create()
            ->each(function ($movie) {
                $movie->describe()->create([
                    'name'=> "Movie $movie->id",
                    'description' => "Description for movie $movie->id",
                ]);
            });
    }
}
