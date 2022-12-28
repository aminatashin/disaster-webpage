<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class disasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'keywords' => 'laravel, api, backend',
            'title' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'use' => $this->faker->url(),
            'address' => $this->faker->city(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
