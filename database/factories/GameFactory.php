<?php

namespace Database\Factories;

use App\Enums\DatePrecision;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ucwords($this->faker->unique()->words(rand(1, 4), true));
        $datePrecision = $this->faker->optional(0.9)->randomElement(DatePrecision::class);
        $releaseDate = match ($datePrecision) {
            DatePrecision::Day => Carbon::instance(
                $this->faker->dateTimeBetween('-20 years', '+3 years')
            )->startOfDay(),

            DatePrecision::Month => Carbon::instance(
                $this->faker->dateTimeBetween('now', '+5 years')
            )->startOfMonth(),

            DatePrecision::Quarter => Carbon::create(
                $this->faker->dateTimeBetween('now', '+5 years')
            )->startOfQuarter(),

            DatePrecision::HalfYear => Carbon::instance(
                $this->faker->dateTimeBetween('now', '+5 years')
            )->startOfYear()->setMonth($this->faker->randomElement([1, 7])),

            DatePrecision::Year => Carbon::instance(
                $this->faker->dateTimeBetween('now', '+5 years')
            )->startOfYear(),

            null => null
        };

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'release_date_precision' => $datePrecision,
            'release_date' => $releaseDate
        ];
    }
}
