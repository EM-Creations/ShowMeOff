<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Video::class, 3)->create(); // Don't use the factory
        
        DB::table('videos')->insert([
            'title' => "Showreel",
            'video' => "https://player.vimeo.com/video/245282486",
            'type' => "vimeo",
            'added_by' => 1,
        ]);
    }
}
