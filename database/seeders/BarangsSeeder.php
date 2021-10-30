<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kirim
        $data = [
            ['nama' => 'magplant','varian' => 'biru','harga_beli' => 5000,'harga_jual' => 5500],
            ['nama' => 'gaia','varian' => 'hijau','harga_beli' => 900,'harga_jual' => 950],
            ['nama' => 'ut','varian' => 'biru','harga_beli' => 250,'harga_jual' => 270],
            ['nama' => 'hogaia','varian' => 'hijau','harga_beli' => 550,'harga_jual' => 600],
            ['nama' => 'dcs','varian' => 'coklat','harga_beli' => 340,'harga_jual' => 370],
        ];
        DB::table('barangs')->insert($data);
    }
}
