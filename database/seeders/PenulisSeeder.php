<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_penulis')->insert([
            'kode' => Str::random(10),
            'nama' => Str::random(10),
            'alamat' => Str::random(10),
            'tanggallahir' => ('2001-05-26'),
        ]);
        DB::table('tb_penulis')->insert([
            'kode' => Str::random(10),
            'nama' => Str::random(10),
            'alamat' => Str::random(10),
            'tanggallahir' => ('2002-12-10'),
        ]);
        DB::table('tb_penulis')->insert([
            'kode' => Str::random(10),
            'nama' => Str::random(10),
            'alamat' => Str::random(10),
            'tanggallahir' => ('2001-09-12'),
        ]);
    }
}
