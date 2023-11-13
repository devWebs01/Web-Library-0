<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'slug' => $this->faker->unique()->slug(),
            'telp' => '628' . $this->faker->unique()->ean8(),
            'role' => $this->faker->randomElement(['Petugas', 'Anggota', 'Kepala']),
            'majors' => $this->faker->randomElement(['IPA', 'IPS', null]),
            'birthdate' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'identify' => $this->faker->unique()->ean13(),
            'email_verified_at' => $this->faker->randomElement([Carbon::now()->format('Y-m-d'), null]),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
