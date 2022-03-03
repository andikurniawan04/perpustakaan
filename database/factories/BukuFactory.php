<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_kategori' => $this->faker->numberBetween(1, 4),
            'judul_buku' => $this->faker->sentence(3),
            'pengarang' => $this->faker->name(),
            'jumlah' => $this->faker->randomNumber(2),
            'penerbit' => $this->faker->domainName(),
        ];
    }
}
