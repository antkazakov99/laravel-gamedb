<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = Game::all();
        Developer::factory()->count(20)->create()->each(function (Developer $developer) use ($games) {
            if (fake()->boolean(90)) {
                $developer->games()->attach($games->random(rand(1, 10))->pluck('id'));
            }
        });
    }
}
