<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample data dari table posts
        $data = [
            ['title' => 'Karina Over Power','content' => 'lorem ipsum'],
            ['title' => 'Seminggu Belajar Laravel','content' => 'lorem ipsum'],
            ['title' => '5 langkah tidak menjadi beban keluarga','content' => 'lorem ipsum']
        ];
        DB::table('posts')->insert($data);
    }
}