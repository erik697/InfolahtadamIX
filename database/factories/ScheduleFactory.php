<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\schedule;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'url' => fake()->url(),
            'title' => fake()->sentence(4),
            'published_at' => fake()->dateTime(),
            'deleted_at' => fake()->dateTime(),
        ];
    }
}
