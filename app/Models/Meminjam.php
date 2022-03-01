<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meminjam extends Model
{
    use HasFactory;
    protected $guarded = ['id_peminjaman'];

    public function user()
    {
        // Satu buku memiliki satu kategori
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
