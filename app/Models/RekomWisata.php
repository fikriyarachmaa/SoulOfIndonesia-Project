<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomWisata extends Model
{
    protected $table = 'rekomendasi_wisata';
    protected $fillable = [
        'judul', 'foto', 'opening', 'alamat', 'deskripsi'];
}
