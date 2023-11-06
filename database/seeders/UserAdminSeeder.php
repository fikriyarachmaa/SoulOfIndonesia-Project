<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_admin')->insert([
            'nama'          => 'Fikriya Rachma',
            'username'      => 'fikriyara',
            'kontak'        => '085236525997',
            'jenis_kelamin' => 'Perempuan',
            'email'         => 'fikriyarachma09@gmail.com',
            'password'      => '123456',
            'fotoprofil'    => '/img/adminprofile',
        ]);
    }
}
