<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => $this->faker->words(2, true),
            'course_code' => strtoupper($this->faker->bothify('CS###')),
            'credits' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->sentence(10),
        ];
    }
}
