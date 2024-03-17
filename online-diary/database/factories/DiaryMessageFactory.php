<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DiaryMessage>
 */
class DiaryMessageFactory extends Factory
{
    /**
     * This factory will output random-generated diary-messages
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'text' => $this->faker->paragraph(10),
            'date_created' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'is_deleted' => false,
        ];
    }
}
