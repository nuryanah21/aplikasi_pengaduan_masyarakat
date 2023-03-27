<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '012345678', 
            'nama' => 'Admin', 
            'email' => 'admin@gmail.com', 
            'password' => bcrypt('123'), 
            'telp' => '085776517380',
            'jenkel' => 'perempuan', 
            'level' => 'admin',
            'alamat' => 'Jl.Madrasah',
            'rt' => '06',
            'rw' => '02',
            'kode_pos' => '16514',
            'province_id' => '11',
            'regency_id' => '22',
            'district_id' => '21',
            'village_id' => '12',
            'remember_token' => Str::random(60),
        ]);
    }
}
