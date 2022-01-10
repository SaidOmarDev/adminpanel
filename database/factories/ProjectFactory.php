<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'deadline' => $this->faker->dateTimeBetween('now', '+40 days'),
            'status' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween(1, 50),
            'client_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
