<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Bus;

class Buku extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->hasOne(Kategori::class);
    }

    public function meminjams()
    {
        return $this->morphMany(Meminjam::class, 'meminjamtable');
    }
}
