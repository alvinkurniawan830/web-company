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
        $this->call([
            HeroSeeder::class,
            AboutSeeder::class,
            HomeSeeder::class,
            PortofolioSeeder::class,
            ProfileSeeder::class,
            GallerySeeder::class,
       ]);
    }
}
