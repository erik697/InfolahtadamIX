<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;

class PostCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostCategory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
