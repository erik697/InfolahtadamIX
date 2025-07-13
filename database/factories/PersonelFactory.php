<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Personel;
use App\Models\Position;

class PersonelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nrp' => fake()->regexify('[A-Za-z0-9]{200}'),
            'position_id' => Position::factory(),
            'status' => fake()->randomElement(["Active","Nonactive"]),
            'deleted_at' => fake()->dateTime(),
        ];
    }
}
