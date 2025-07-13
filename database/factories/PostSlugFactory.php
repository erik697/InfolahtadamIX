<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\PostSlug;
use App\Models\Slug;

class PostSlugFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostSlug::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'slug_id' => Slug::factory(),
        ];
    }
}
