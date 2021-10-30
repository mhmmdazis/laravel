<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PembeliansSeeder extends Seeder
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
            ['nama_barang' => 'magplant','nama_suplier' => 'samsul','qty' => 1,'tgl' => '20 Feb 2021'],
            ['nama_barang' => 'gaia','nama_suplier' => 'berly','qty' => 2,'tgl' => '20 Feb 2021'],
            ['nama_barang' => 'ut','nama_suplier' => 'santy','qty' => 3,'tgl' => '20 Feb 2021'],
            ['nama_barang' => 'hogaia','nama_suplier' => 'pakhri','qty' => 4,'tgl' => '20 Feb 2021'],
            ['nama_barang' => 'dcs','nama_suplier' => 'vivi','qty' => 5,'tgl' => '20 Feb 2021']

        ];
        DB::table('pembelians')->insert($data);
    }
}
