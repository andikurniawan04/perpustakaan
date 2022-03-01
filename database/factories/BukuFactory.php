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
            'id_kategori' => 1,
            'judul_buku' => $this->faker->word(),
            'pengarang' => $this->faker->name(),
            'penerbit' => $this->faker->city(),
        ];
    }
}
