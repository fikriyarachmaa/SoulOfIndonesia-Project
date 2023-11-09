<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukBatik extends Model
{
    protected $table = 'produk_batik';
    protected $fillable = [
        'nama', 'kategori', 'harga', 'kota', 'deskripsi', 'foto', 'kontak_penjual'];
}
