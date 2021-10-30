<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SupliersSeeder extends Seeder
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
            ['nama' => 'samsul','alamat' => 'Cirara','kode_pos' => 1,'kota' => 'Bekasi'],
            ['nama' => 'berly','alamat' => 'Cibiuk','kode_pos' => 1,'kota' => 'Garut'],
            ['nama' => 'santy','alamat' => 'Cibereum','kode_pos' => 1,'kota' => 'Garut'],
            ['nama' => 'pakhri','alamat' => 'Ciraas','kode_pos' => 1,'kota' => 'Garut'],
            ['nama' => 'vivi','alamat' => 'Cicaheum','kode_pos' => 1,'kota' => 'Bandung']

        ];
        DB::table('supliers')->insert($data);
    }
}
