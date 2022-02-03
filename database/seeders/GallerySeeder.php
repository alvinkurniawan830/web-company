<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $gallery = [
           [
            'image' => 'img/about/galeri1.jpg',
            'title' => 'ini judul satu',
            'text' => 'ini text pertama , project pertama , gambar pertama',
           ],
           [
            'image' => 'img/about/galeri2.jpg',
            'title' => 'ini judul dua',
            'text' => 'ini text kedua , project kedua , gambar kedua',
           ],
           [
            'image' => 'img/about/galeri3.jpg',
            'title' => 'ini judul tiga',
            'text' => 'ini text ketiga , project ketiga , gambar ketiga',
           ],
        ];
       DB::table('galleries')->insert($gallery);
    }
}
