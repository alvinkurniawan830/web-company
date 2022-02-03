<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portofolio = [
            [
                'image' => 'img/pt/pt1.jpg',
                'name' => 'project 1',
                'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            ],
            [
                'image' => 'img/pt/pt2.jpg',
                'name' => 'project 2',
                'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            ],
            [
                'image' => 'img/pt/pt3.jpg',
                'name' => 'project 3',
                'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            ],
           
            
            

        ];
        DB::table('portofolios')->insert($portofolio);
    }
}
