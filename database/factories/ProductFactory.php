<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Wherehouse;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'category_product_id' => CategoryProduct::factory(),
            'wherehouse_id' => Wherehouse::factory(),
            'serial_number' => fake()->regexify('[A-Za-z0-9]{256}'),
            'status' => fake()->randomElement(["Normal","Repaired","Demaged"]),
            'deleted_at' => fake()->dateTime(),
        ];
    }
}
