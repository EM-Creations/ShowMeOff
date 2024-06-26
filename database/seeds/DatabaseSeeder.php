<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PagesTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
