<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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

<<<<<<< HEAD
        Buku::factory(5)->create();
=======
        Buku::factory(30)->create();
>>>>>>> parent of 8969adb (Merge branch 'maulana' of https://github.com/andikurniawan04/perpustakaan into maulana)
    }
}
