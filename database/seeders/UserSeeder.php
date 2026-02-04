<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker::create('id_ID');

        $jurusans = [
            'Teknik Informatika',
            'Sistem Informasi',
            'Teknik Sipil',
            'Teknik Mesin',
            'Teknik Elektro',
            'Teknik Industri',
            'Arsitektur',
            'Akuntansi',
            'Manajemen',
            'Ekonomi Pembangunan',
            'Ilmu Komunikasi',
            'Ilmu Hukum',
            'Psikologi',
            'Pendidikan Bahasa Inggris',
            'Keperawatan',
        ];

        $rows = [];

        for ($i = 0; $i < 1000; $i++) {
            $rows[] = [
                'nim' => $faker->unique()->numerify('20########'), // 10 digit, contoh: 20xxxxxxxx
                'nama' => $faker->name(),
                'jurusan' => $jurusans[array_rand($jurusans)],
            ];
        }

        foreach (array_chunk($rows, 200) as $chunk) {
            DB::table('mahasiswa')->insert($chunk); // ganti 'users' jika nama tabelmu beda
        }
    }
}
