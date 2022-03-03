<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Buku;
use App\Models\Kategori;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Kategori::create([
            'keterangan' => 'BAHASA'
        ]);
        Kategori::create([
            'keterangan' => 'SEJARAH'
        ]);
        Kategori::create([
            'keterangan' => 'SOSIAL'
        ]);
        Kategori::create([
            'keterangan' => 'SAINS'
        ]);

        Buku::factory(5)->create();
    }
}
