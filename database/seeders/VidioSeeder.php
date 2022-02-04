<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VidioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vidio = [
            [
                'video' => 'img/about/v1.mp4',
                 'title' => 'vidio pertama',
                 'text'  => 'By alvin Kurnia ', 
            ],
            [
                'video' => 'img/about/v1.mp4',
                 'title' => 'vidio kedua',
                 'text'  => 'By Alvin Kurnia', 
            ],
        ];
        DB::table('vidios')->insert($vidio);
    }
}
