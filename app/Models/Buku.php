<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Bus;

class Buku extends Model
{
    use HasFactory;

    // Tidak membatasi jenis file
    protected $guarded = [];

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
