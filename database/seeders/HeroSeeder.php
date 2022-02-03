<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero = [
            [
                'title' => 'Bootstrap 5',
                'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, s
                ed diam voluptua.',
            ],
            [
                'title' => 'Clean Design',
                'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, s
                ed diam voluptua.',
            ],
            [
                'title' => 'Easy to Use',
                'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, s
                ed diam voluptua.',
            ],
            
            

        ];
        DB::table('heroes')->insert($hero);
    }
}
