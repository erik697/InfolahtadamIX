<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ApiService;

class ApiServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ApiService::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'username' => fake()->userName(),
            'api_key' => fake()->regexify('[A-Za-z0-9]{256}'),
            'deleted_at' => fake()->dateTime(),
        ];
    }
}
