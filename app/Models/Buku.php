<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Buku extends Model
{
    use HasFactory;

    // // Tidak membatasi jenis file
    protected $guarded = ['id_buku'];

    protected $primaryKey = 'id_buku';

    public function category()
    {
        // Satu buku memiliki satu kategori
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
