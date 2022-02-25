<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'meminjams');
    }

    public function petugas()
    {
        return $this->belongsToMany(Petugas::class, 'meminjams');
    }
}
