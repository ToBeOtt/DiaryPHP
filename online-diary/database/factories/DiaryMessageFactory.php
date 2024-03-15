<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DiaryMessage>
 */
class DiaryMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'text' => $this->faker->paragraph,
            'date_created' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'is_deleted' => false,
        ];
    }
}
