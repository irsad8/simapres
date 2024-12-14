<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
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
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'nim' => fake()->unique()->numberBetween(202121001, 303030999),
            'jurusan_id'
            => function () {
                return Jurusan::inRandomOrder()->first()->id;
            }
        ];
    }
}
