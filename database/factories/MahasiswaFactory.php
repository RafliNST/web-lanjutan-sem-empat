<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('2405181###'),
            'nama' => $this->faker->unique()->name(),
            'prodi' => $this->faker->randomElement([
                'TRPL', 'MI', 'TRMG', 'CE'
            ]),
            'kelas' => $this->faker->randomElement([
                'A', 'B', 'C', 'D', 'E'
            ]),
        ];
    }
}
