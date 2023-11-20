<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'          => 'Fikriya Rachma',
            'email'         => 'fikriyarachma09@gmail.com',
            'password'      => bcrypt('123456'),
            'role'          => 'admin',
            'foto_profil'    => '/img/adminprofile',
        ]);

        DB::table('users')->insert([
            'name'          => 'Lintang Eka',
            'nama_usaha'    => 'Batik Kencana Wungu',
            'nomor_kontak'  => '089505087702',
            'alamat_bisnis' => 'Jl Pinang Merah 1. Jatimulyo, Malang',
            'email'         => 'lintangekaa4@gmail.com',
            'password'      => bcrypt('1234567'),
            'role'          => 'pengrajin',
            'foto_profil'    => '/img/adminprofile',
        ]);


    }
}
