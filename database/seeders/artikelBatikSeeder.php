<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class artikelBatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk_batik')->insert([
            'judul'          => 'Batik Jamu Gendong Motif Tejo',
            'foto'          => '/img/jamugendong.png',
            'opening'          => 'Batik Jamu Gendong atau Batik Mbok Jamu adalah salah satu motif batik tradisional Indonesia yang menggambarkan seorang wanita yang membawa keranjang atau gendongan berisi ramuan jamu tradisional.',
            'asal_usul'          => 'Asal-usul motif Batik Jamu Gendong tidak terlalu jelas, tetapi motif ini memiliki akar dalam budaya Jawa, terutama di Jawa Tengah dan Jawa Timur, yang merupakan daerah yang kaya akan tradisi jamu. Sebagian besar produksi Batik Jamu Gendong dapat ditemukan di berbagai daerah di Jawa, yang dikenal karena warisan seni batiknya.',
            'filosofi'          => 'Motif Batik Jamu Gendong atau Batik Mbok Jamu memiliki filosofi yang dalam yang mencerminkan berbagai nilai dan aspek budaya Indonesia, antara lain:
                1. Kesehatan dan Kesejahteraan: Motif ini menggambarkan seorang wanita penjual jamu yang membawa ramuan tradisional untuk kesehatan dan kesejahteraan masyarakat. Ini mencerminkan perhatian terhadap kesehatan dan kebahagiaan anggota masyarakat.
                2. Tradisi dan Warisan: Batik Jamu Gendong mengingatkan kita akan pentingnya menjaga dan merawat tradisi dan warisan budaya, termasuk penggunaan jamu sebagai metode pengobatan tradisional yang telah ada selama berabad-abad.
                3. Kerja Keras dan Kreativitas: Motif ini mencerminkan kerja keras para penjual jamu yang sering kali berjalan berkeliling untuk mencari pembeli. Hal ini mengingatkan kita akan nilai-nilai kerja keras, ketekunan, dan kreativitas dalam menjalankan usaha kecil dan menopang kehidupan.
                ',
            

        ]);
    }
}
