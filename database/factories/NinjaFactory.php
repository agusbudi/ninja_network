<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'expertise' => $this->faker->randomElement(['Ninjutsu', 'Taijutsu', 'Genjutsu', 'Senjutsu', 'Bukijutsu', 'Chakura Kyūin Jutsu', 'Kekkai Ninjutsu', 'Fūinjutsu', 'Iryō Ninjutsu', 'Kuchiyose no Jutsu']),
            'skill' => $this->faker->numberBetween(1, 100),
            'biography' => $this->faker->realText(500),
        ];
    }
}
