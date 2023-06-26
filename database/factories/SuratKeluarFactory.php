<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratKeluarFactory extends Factory
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
            'tujuan' => $this->faker->company(),
            'tanggal' => $this->faker->date(),
            'keterangan' => $this->faker->text(),
        ];
    }
}