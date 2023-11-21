<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ulasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ulasan')->insert([
            'nama'        => 'Maria Smantha',
            'review'      => 'Website ini sangat bermanfaat untuk mengenal berbagai jenis batik di Indonesia. 
                                Melalui website ini bisa membantu saya sebagai pelanggan untuk membeli produk batik. '
        ]);
    }
}
