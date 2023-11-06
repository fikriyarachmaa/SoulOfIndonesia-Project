<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProdukBatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk_batik')->insert([
            'nama'          => 'Kain Batik Sogan Parang',
            'harga'         => '125000',
            'kota'          => 'Solo',
            'deskripsi'     => 'Batik Sogan Parang berasal dari Jawa, Indonesia, dan merupakan salah satu motif batik yang paling ikonik dan dihormati dalam tradisi batik Jawa. 
                                Kain batik Sogan Parang berkualitas tinggi, terbuat dari bahan yang nyaman dipakai dan mudah dirawat.
                                Cocok untuk busana, aksesoris, kerajinan, hiasan dinding, dan banyak lagi.',
            'foto'          => '/img/batiksoganparang.png',
            'kontak_penjual'  => 'https://www.instagram.com/fikriyarachmaa/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==',
        ]);
    }
}
