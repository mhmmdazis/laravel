<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PembelisSeeder extends Seeder
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
            ['nama' => 'ucok','jns_kelamin' => 'L','alamat' => 'Cibedug Hilir','kode_pos' => 1,'kota' => 'Bandung','tgl_lahir' => '20 Jan 2001'],
            ['nama' => 'abu','jns_kelamin' => 'L','alamat' => 'Cibedug Girang','kode_pos' => 2,'kota' => 'Bandung','tgl_lahir' => '30 Feb 2001'],
            ['nama' => 'pajar','jns_kelamin' => 'L','alamat' => 'Cibedug Kaler','kode_pos' => 3,'kota' => 'Bandung','tgl_lahir' => '27 Mar 2000'],
            ['nama' => 'dadang','jns_kelamin' => 'L','alamat' => 'Ciguriang','kode_pos' => 4,'kota' => 'Bandung','tgl_lahir' => '31 Apr 2004'],
            ['nama' => 'sobri','jns_kelamin' => 'L','alamat' => 'Bojong','kode_pos' => 5,'kota' => 'Bandung','tgl_lahir' => '4 Agst 2002']


        ];
        DB::table('pembelis')->insert($data);
    }
}
