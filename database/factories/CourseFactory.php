<?php

namespace Database\Factories;

use App\Models\Employer;
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
            'name' => fake()->name, 
            // 'course' => fake()->randomElement(['Web Design | WordPress', 'Web Design | Bootstrap', 'Web Design | Tailwind', 'Web Development | Laravel']), 
            'course' => fake()->jobTitle, 
            'price' => fake()->randomElement(['2 Month Package - N80,000', '1 Month Package - N50,000', '1 Month Package - N30,000']), 
            'days' => fake()->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']), 
            'schedule' => 'Available', 
            'url' => fake()->url, 
            'featured' => 'false', 
            'employer_id' => Employer::factory(),
        ];
    }
}
