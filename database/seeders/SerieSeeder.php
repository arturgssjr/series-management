<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::factory()
            ->count(10)
            ->create()
            ->each(function ($serie) {
                $serie->describe()->create([
                    'name'=> "Serie $serie->id",
                    'description' => "Description for series $serie->id",
                ]);

                for ($i = 1; $i <= rand(1, 5); $i++) {
                    $season = $serie->seasons()->create([
                        'number' => $i,
                    ]);

                    for ($e = 1; $e <= rand(1, 15); $e++) {
                        $season->episodes()->create([
                            'name' => "Episode $e",
                            'number' => $e,
                        ]);
                    }
                }
            });
    }
}
