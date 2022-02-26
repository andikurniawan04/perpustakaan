<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'keterangan',
    ];
    protected $primaryKey = 'id_kategori';

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
