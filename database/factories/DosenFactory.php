<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'), // bisa sesuaikan dengan password default
            'remember_token' => Str::random(10),
            'nip' => $this->faker->numerify('##########'), // Sesuaikan dengan format NIM yang valid
            'bidang_keahlian' => $this->faker->word(), // Bisa sesuaikan dengan program studi yang ada
            'alamat_kantor' => $this->faker->address(),
            'no_hp' => $this->faker->phoneNumber(),
            'tanggal_lahir' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            // 'email_verified_at' => null,
        ]);
    }
}
