<?php

namespace Database\Factories;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'date_of_birth' => fake()->date(),
            'jmbg' => fake()->numerify('##########'),
            'email' => fake()->email(),
            'membership_price' => 3000,
            'phone' => '0637845612',
            'date_started' => Carbon::now(),
            'date_ended' => Carbon::now()->addDays(30),
            'is_active' => true
        ];
    }
}
