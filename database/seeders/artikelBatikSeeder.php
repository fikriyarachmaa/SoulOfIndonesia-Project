<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class artikelBatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artikel_batik')->insert([
            'judul'          => 'Batik Jamu Gendong Motif Tejo',
            'foto'          => '/img/jamugendong.png',
            'opening'          => 'Batik Jamu Gendong atau Batik Mbok Jamu adalah salah satu motif batik tradisional Indonesia yang menggambarkan seorang wanita yang membawa keranjang atau gendongan berisi ramuan jamu tradisional.',
            'asal_usul'          => 'Asal-usul motif Batik Jamu Gendong tidak terlalu jelas, tetapi motif ini memiliki akar dalam budaya Jawa, terutama di Jawa Tengah dan Jawa Timur, yang merupakan daerah yang kaya akan tradisi jamu. Sebagian besar produksi Batik Jamu Gendong dapat ditemukan di berbagai daerah di Jawa, yang dikenal karena warisan seni batiknya.',
            'filosofi'          => 'Motif Batik Jamu Gendong atau Batik Mbok Jamu memiliki filosofi yang dalam yang mencerminkan berbagai nilai dan aspek budaya Indonesia, antara lain:
                1. Kesehatan dan Kesejahteraan: Motif ini menggambarkan seorang wanita penjual jamu yang membawa ramuan tradisional untuk kesehatan dan kesejahteraan masyarakat. Ini mencerminkan perhatian terhadap kesehatan dan kebahagiaan anggota masyarakat.
                2. Tradisi dan Warisan: Batik Jamu Gendong mengingatkan kita akan pentingnya menjaga dan merawat tradisi dan warisan budaya, termasuk penggunaan jamu sebagai metode pengobatan tradisional yang telah ada selama berabad-abad.
                3. Kerja Keras dan Kreativitas: Motif ini mencerminkan kerja keras para penjual jamu yang sering kali berjalan berkeliling untuk mencari pembeli. Hal ini mengingatkan kita akan nilai-nilai kerja keras, ketekunan, dan kreativitas dalam menjalankan usaha kecil dan menopang kehidupan.
                4. Keseimbangan Alam dan Manusia: Seperti banyak motif batik lainnya, Batik Jamu Gendong juga menggambarkan keseimbangan antara manusia dan alam. Penggunaan bahan alami dalam ramuan jamu menunjukkan rasa hormat terhadap alam dan hubungan harmonis antara manusia dan lingkungannya',
        ]);

        DB::table('artikel_batik')->insert([
            'judul'          => 'Batik Mega Mendung',
            'foto'          => '/img/megamendung.png',
            'opening'          => 'Batik Mega Mendung adalah motif batik khas Cirebon, Indonesia, yang terkenal dengan pola awan mendung besar yang unik. Asal usul dan filosofi Batik Mega Mendung melibatkan legenda dan makna simbolis yang dalam.',
            'asal_usul'          => 'Cerita asal usul Batik Mega Mendung berasal dari legenda Nyai Subang Larang, yang merupakan istri dari Sunan Gunung Jati, salah satu dari Wali Songo. Legenda tersebut mengisahkan tentang seorang putri yang memiliki kecantikan luar biasa dan kebaikan hati. Ia dikenal sebagai Nyai Subang Larang atau Rara Larasati.

            Nyai Subang Larang dihadapkan pada cobaan yang berat, termasuk cobaan dari dewa yang jatuh cinta padanya. Untuk menghindari dewa tersebut, Nyai Subang Larang menciptakan motif batik yang menggambarkan awan mendung besar, yang kemudian dikenal sebagai Batik Mega Mendung.',
            'filosofi'          =>'Perlindungan dari Cobaan: Motif awan mendung besar pada Batik Mega Mendung diartikan sebagai perlindungan dari cobaan dan kesulitan hidup. Hal ini terkait dengan karakter legendaris Nyai Subang Larang yang mampu mengatasi cobaan berat.

            Kebesaran dan Ketenangan: Awan mendung dalam batik ini juga mencerminkan kebesaran alam dan ketenangan. Awan yang besar dan tebal menggambarkan kekuatan alam yang melindungi dan memberikan kedamaian.
            
            Ketulusan Hati: Nyai Subang Larang yang tulus hati diwujudkan dalam motif ini. Filosofi ini mengajarkan tentang pentingnya memiliki hati yang tulus dan baik, sebagaimana tercermin dalam legenda tersebut.
            
            Keindahan Alam: Motif awan mendung juga mencerminkan keindahan alam Cirebon, khususnya langit yang penuh dengan awan mendung. Ini merupakan apresiasi terhadap keelokan alam setempat.',
        ]);

        DB::table('artikel_batik')->insert([
            'judul'          => 'Batik Kawung',
            'foto'          => '/img/kawung.png',
            'opening'          => 'Batik Kawung adalah salah satu motif batik tradisional dari Indonesia yang memiliki asal usul dan filosofi yang kaya.',
            'asal_usul'          => 'Asal usul Batik Kawung berkaitan dengan budaya Jawa Kuno. Motif ini konon berasal dari bentuk buah kawung, yang dikenal sebagai buah aren atau arenan (Arenga pinnata). Bentuk buah kawung yang bundar dan teratur menjadi inspirasi untuk motif geometris yang terdapat dalam batik ini.',
            'filosofi'          => 'Simbol Kesucian dan Kekuasaan: Motif kawung diartikan sebagai simbol kesucian dan kekuasaan. Bentuk bulat dan teratur dari motif ini dianggap merepresentasikan kesucian dan kekuatan spiritual.

            Cakrawala Kehidupan: Beberapa interpretasi juga menyebutkan bahwa motif kawung mencerminkan cakrawala kehidupan. Dengan bentuk lingkaran yang tak berujung, motif ini melambangkan kehidupan yang berkelanjutan dan tidak terputus.
            
            Keseimbangan dan Keharmonisan: Pola geometris yang simetris pada Batik Kawung mencerminkan keseimbangan dan keharmonisan dalam hidup. Filosofi ini mendorong nilai-nilai keseimbangan dan harmoni dalam kehidupan sehari-hari.
            
            Simbol Keberuntungan: Ada juga keyakinan bahwa motif kawung membawa keberuntungan dan kesuksesan. Pola-pola yang teratur dianggap membawa energi positif dan membantu menciptakan keadaan yang harmonis.
            
            Nilai Tradisional Jawa: Batik Kawung juga mencerminkan nilai-nilai tradisional Jawa yang kental. Dalam masyarakat Jawa, batik menjadi bagian penting dari identitas budaya, dan motif kawung menjadi salah satu ekspresi klasik dari seni batik.',
        ]);

        DB::table('artikel_batik')->insert([
            'judul'          => 'Batik Kalimantan',
            'foto'          => '/img/kalimantan.png',
            'opening'          => 'Batik Kalimantan, juga dikenal sebagai Batik Dayak, adalah seni batik yang khas dari suku Dayak di Kalimantan, Indonesia.',
            'asal_usul'          => 'Batik Kalimantan memiliki akar dalam tradisi seni dan kerajinan tangan suku Dayak yang mendiami pulau Kalimantan. Motif dan pola batik ini mencerminkan kekayaan alam, budaya, serta kehidupan sehari-hari masyarakat Dayak.',
            'filosofi'          => 'Simbolisme Alam dan Binatang: Motif Batik Kalimantan sering kali menggambarkan simbolisme alam dan binatang yang memiliki makna khusus dalam budaya Dayak. Misalnya, motif burung hantu dapat melambangkan kebijaksanaan dan perlindungan.

            Makna Mistik dan Spiritual: Beberapa motif Batik Kalimantan juga memiliki makna mistik dan spiritual. Simbol-simbol tertentu dapat dikaitkan dengan kepercayaan tradisional Dayak dan koneksi dengan roh alam.
            
            Penciptaan dan Kehidupan: Beberapa motif menggambarkan cerita penciptaan dan kehidupan. Pada Batik Kalimantan, elemen-elemen seperti sungai, hutan, dan binatang melibatkan makna tentang asal usul kehidupan dan hubungan manusia dengan alam.
            
            Perlambangan Kelompok Sosial: Motif Batik Kalimantan juga dapat mencerminkan identitas kelompok sosial atau komunitas Dayak tertentu. Ini bisa menjadi bentuk pengenalan diri dan identitas budaya.
            
            Pewarisan Budaya: Batik Kalimantan tidak hanya sekadar pakaian atau kain hiasan, melainkan juga merupakan sarana untuk melestarikan dan mewariskan nilai-nilai budaya dari generasi ke generasi',
        ]);
    }
}
