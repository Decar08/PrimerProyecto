<?php

namespace Database\Factories;

use illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //permite la creación de datos falsos para pruebas
            'user_id' => 1,
            'title' => $title = $this->faker->sentence(),
            'slug' => Str::slug($title), 
            'body' => $this->faker->text(2200),
        ];
    }
}
