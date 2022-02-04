<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use Database\Seeders\HeroSeeder;
use Database\Seeders\HomeSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\VidioSeeder;
use Database\Seeders\GallerySeeder;
use Database\Seeders\ProfileSeeder;
use Database\Seeders\PortofolioSeeder;
use Database\Seeders\BlogSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HeroSeeder::class,
            AboutSeeder::class,
            HomeSeeder::class,
            PortofolioSeeder::class,
            ProfileSeeder::class,
            GallerySeeder::class,
            VidioSeeder::class,
            BlogSeeder::class,
       ]);
    }
}
