<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RekomWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rekomendasi_wisata')->insert([
            'judul'         => 'Kampung Batik Kauman',
            'foto'          => '/img/kampungkauman.png',
            'opening'       => 'Kampung Batik Kauman adalah salah satu kawasan yang terkenal sebagai pusat produksi dan pengembangan batik di Solo, yang merupakan salah satu pusat batik tradisional terkemuka di Indonesia. Kampung Batik Kauman adalah salah satu tempat yang penting dalam pelestarian dan pengembangan seni batik di Indonesia. Ini menjadi saksi perkembangan seni batik dari masa lalu hingga masa kini, dan tempat di mana tradisi batik tetap hidup dan berkembang.',
            'alamat'        => 'Jl. Trisula III No.1, Kauman, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57112',
            'deskripsi'     => 'Kampung Batik Kauman memiliki sejarah panjang sebagai pusat pengembangan dan produksi batik di Solo. Kauman adalah salah satu kawasan yang paling terkemuka dalam dunia batik Solo, dan telah menjadi bagian integral dari warisan batik Jawa.
            Kampung Batik Kauman terkenal karena menjaga tradisi dan teknik batik tradisional. Di sini, Anda dapat menemukan banyak pengrajin batik yang masih menggunakan teknik cap (stamping) dan teknik tulis (hand-drawn) secara manual untuk membuat motif-motif batik yang indah. Kampung Batik Kauman adalah 
            tempat yang penting dalam pelestarian warisan budaya batik Jawa. Di sini, Anda dapat menemukan banyak galeri, museum, toko batik, dan pusat pelatihan yang berfokus pada seni batik. Masyarakat lokal di Kampung Batik Kauman sangat terlibat dalam produksi batik, dan banyak keluarga yang menjalankan usaha kecil di rumah mereka. 
            Ini menciptakan ikatan yang kuat antara seni batik dan kehidupan sehari-hari penduduk setempat. Kampung Batik Kauman juga menjadi tujuan wisata bagi para pengunjung yang tertarik dengan seni dan budaya batik. Pengunjung dapat melihat proses pembuatan batik secara langsung, membeli batik berkualitas tinggi, dan belajar lebih 
            lanjut tentang sejarah dan teknik batik.',
        ]);

    }
}
