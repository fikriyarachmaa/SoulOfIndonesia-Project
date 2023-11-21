<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    protected $table = 'ulasan';
    protected $fillable = [
        'nama', 'review'];
}
