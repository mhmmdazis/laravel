<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;
class PesanansSeeder extends Seeder
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
            ['nama_pelanggan' => 'ucok','nama_barang' => 'magplant','qty' => 1,'tgl_pesan' => '20 Feb 2021'],
            ['nama_pelanggan' => 'abu','nama_barang' => 'gaia','qty' => 2,'tgl_pesan' => '21 Feb 2021'],
            ['nama_pelanggan' => 'pajar','nama_barang' => 'ut','qty' => 3,'tgl_pesan' => '22 Feb 2021'],
            ['nama_pelanggan' => 'dadang','nama_barang' => 'hogaia','qty' => 4,'tgl_pesan' => '23 Feb 2021'],
            ['nama_pelanggan' => 'sobri','nama_barang' => 'dcs','qty' => 5,'tgl_pesan' => '24 Feb 2021']

        ];
        DB::table('pesanans')->insert($data);
    }
}
