<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // pengiriman data ke dalam table di db
        $this->call(BarangsSeeder::class);
        $this->call(PesanansSeeder::class);
        $this->call(PembeliansSeeder::class);
        $this->call(PembelisSeeder::class);
        $this->call(SupliersSeeder::class);
    }
}
