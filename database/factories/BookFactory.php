<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'category_id' => Category::all()->random(),
            'isbn' => $this->faker->isbn13,
            'author' => $this->faker->name,
            'year_published' => $this->faker->year(),
            'publisher' => $this->faker->company(),
            'synopsis' => $this->faker->paragraph(),
            'book_count' => $this->faker->numberBetween(1, 10),
        ];
    }
}
