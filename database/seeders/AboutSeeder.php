<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'Easy to Use with Tons of Awesome Features' ,
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
            'image' => 'img/about/about-2.png',
            'a' => 'Quick Access',
            'b' => 'Easily to Manage',
            'c' => '24/7 Support',
        ]);
    }
}
