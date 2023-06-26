<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor' => $this->faker->randomNumber(),
            'pengirim' => $this->faker->name(),
            'tanggal' => $this->faker->date(),
            'keterangan' => $this->faker->text(),
        ];
    }
}