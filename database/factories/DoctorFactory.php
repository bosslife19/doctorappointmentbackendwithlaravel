<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

use function Symfony\Component\Clock\now;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'address'=>fake()->address(),
            'about'=>fake()->paragraph(),
            'image'=>fake()->imageUrl(),
            'premium'=>false,
            'phone'=>fake()->phoneNumber(),
            'category_id'=>2,
            'patients'=> fake()->name(),
            'startTime'=>now(),
            'endTime'=>fake()->time(),
            'year_of_experience'=> '5 years'


        ];
    }
}
