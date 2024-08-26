<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PembayaranModel>
 */
class PembayaranModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            //'nomor_nota' => $this->faker->unique()->randomNumber(),
            'siswa_id' => $this->faker->numberBetween(1, 3),
            'pembangunan' => $this->faker->numberBetween(100000, 1000000),

            'spp' => $this->faker->numberBetween(100000, 1000000),
            'lab' => $this->faker->numberBetween(100000, 1000000),
            'osis' => $this->faker->numberBetween(100000, 1000000),
            'psg' => $this->faker->numberBetween(100000, 1000000),


            'semester' => $this->faker->numberBetween(100000, 1000000),
            'tanggal_bayar' => $this->faker->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}
