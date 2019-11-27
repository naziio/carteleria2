<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('voyages')->insert([
           'embark' => Carbon::now()->toDateString(),
           'desembark' => Carbon::now()->toDateString()
        ]);

        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Neko Harbour',
            'realization_date' => Carbon::now(),
            'description_en' => 'landing',
            'types_id_type' => 1,
        ]);

        DB::table('galleries')->insert([
            'name_en' => 'Galeria 1',
            'video_duration_limit' => '10',
            'publications_id_pub' => 1
        ]);

        DB::table('gallery_files')->insert([
            'type' => 'img',
            'galleries_id_gallery' => 1,
            'file' => 'h1.jpg',
        ]);
        DB::table('gallery_files')->insert([
            'type' => 'img',
            'galleries_id_gallery' => 1,
            'file' => 'h2.jpg',
        ]);
        DB::table('gallery_files')->insert([
            'type' => 'video',
            'galleries_id_gallery' => 1,
            'file' => 'nh1.mp4',
            'duration' => 15
        ]);
        DB::table('gallery_files')->insert([
            'type' => 'video',
            'galleries_id_gallery' => 1,
            'file' => 'nh2.mp4',
            'duration' => 6
        ]);

        DB::table('weather_stations')->insert([
           'voyages_id_voyage' => 1,
           'latitude' => -33.354,
           'longitude' => -70.681,
           'temperature' => 4,
           'wind' => 20,
           'date' => Carbon::now()
        ]);

        DB::table('menus')->insert([
            'voyages_id_voyage' => 1,
            'title_en' => 'Dinner',
            'realization_date' => Carbon::now(),
        ]);

        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Pinguins',
            'realization_date' => Carbon::now()->addHour(1),
            'description_en' => 'sighting',
            'types_id_type' => 1,
        ]);

        DB::table('galleries')->insert([
            'name_en' => 'Sighting',
            'video_duration_limit' => '10',
            'publications_id_pub' => 2
        ]);

        DB::table('gallery_files')->insert([
            'type' => 'img',
            'galleries_id_gallery' => 2,
            'file' => 'danko2.png',
        ]);
        DB::table('gallery_files')->insert([
            'type' => 'video',
            'galleries_id_gallery' => 2,
            'file' => 'DANKOVIDEO1.mp4',
        ]);


        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Neko Harbour 2',
            'realization_date' => Carbon::now()->addHour(2),
            'description_en' => 'landing',
            'types_id_type' => 1,
        ]);

        DB::table('galleries')->insert([
            'name_en' => 'Galeria 3',
            'video_duration_limit' => '10',
            'publications_id_pub' => 3
        ]);

        DB::table('gallery_files')->insert([
            'type' => 'img',
            'galleries_id_gallery' => 3,
            'file' => 'h1.jpg',
        ]);
        DB::table('gallery_files')->insert([
            'type' => 'img',
            'galleries_id_gallery' => 3,
            'file' => 'h2.jpg',
        ]);
        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Neko Harbour 4',
            'realization_date' => Carbon::now()->addHour(3),
            'description_en' => 'landing',
            'types_id_type' => 1,
        ]);

        DB::table('galleries')->insert([
            'name_en' => 'Galeria 4',
            'video_duration_limit' => '10',
            'publications_id_pub' => 4
        ]);

        DB::table('gallery_files')->insert([
            'type' => 'img',
            'galleries_id_gallery' => 4,
            'file' => 'h1.jpg',
        ]);
        DB::table('gallery_files')->insert([
            'type' => 'img',
            'galleries_id_gallery' => 4,
            'file' => 'h2.jpg',
        ]);


       DB::table('publications')->insert([
           'voyages_id_voyage' => 1,
           'image_map' => 'Mapa_Neko.jpg',
           'image_map_2' => 'Mapa_Neko2.jpg',
           'title_en' => 'Neko Harbour 5',
           'realization_date' => Carbon::now()->addHour(4),
           'description_en' => 'landing',
           'types_id_type' => 1,
       ]);

       DB::table('galleries')->insert([
           'name_en' => 'Galeria 5',
           'video_duration_limit' => '10',
           'publications_id_pub' => 5
       ]);

       DB::table('gallery_files')->insert([
           'type' => 'img',
           'galleries_id_gallery' => 5,
           'file' => 'h1.jpg',
       ]);
       DB::table('gallery_files')->insert([
           'type' => 'img',
           'galleries_id_gallery' => 5,
           'file' => 'h2.jpg',
       ]);

       DB::table('publications')->insert([
           'voyages_id_voyage' => 1,
           'image_map' => 'Mapa_Neko.jpg',
           'image_map_2' => 'Mapa_Neko2.jpg',
           'title_en' => 'Neko Harbour 6',
           'realization_date' => Carbon::now()->addHour(5),
           'description_en' => 'landing',
           'types_id_type' => 1,
       ]);

       DB::table('galleries')->insert([
           'name_en' => 'Galeria 6',
           'video_duration_limit' => '10',
           'publications_id_pub' => 6
       ]);

       DB::table('gallery_files')->insert([
           'type' => 'img',
           'galleries_id_gallery' => 6,
           'file' => 'h1.jpg',
       ]);
       DB::table('gallery_files')->insert([
           'type' => 'img',
           'galleries_id_gallery' => 6,
           'file' => 'h2.jpg',
       ]);

        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Neko Harbour 7',
            'realization_date' => Carbon::now()->addHour(6),
            'description_en' => 'landing',
            'types_id_type' => 1,
        ]);

        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Neko Harbour 8',
            'realization_date' => Carbon::now()->addHour(7),
            'description_en' => 'landing',
            'types_id_type' => 1,
        ]);

        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Neko Harbour 9',
            'realization_date' => Carbon::now()->addHour(8),
            'description_en' => 'landing',
            'types_id_type' => 1,
        ]);

        DB::table('publications')->insert([
            'voyages_id_voyage' => 1,
            'image_map' => 'Mapa_Neko.jpg',
            'image_map_2' => 'Mapa_Neko2.jpg',
            'title_en' => 'Neko Harbour 10',
            'realization_date' => Carbon::now()->addHour(9),
            'description_en' => 'landing',
            'types_id_type' => 1,
        ]);

        DB::table('daily_programs')->insert([
            'voyages_id_voyage' => 1,
            'publications_id_pub' => 1,
            'title_en' => 'Neko Harbour 1',
            'hour' => '10:00',
            'date' => Carbon::now()->toDateString(),
        ]);
        DB::table('daily_programs')->insert([
            'voyages_id_voyage' => 1,
            'publications_id_pub' => 2,
            'title_en' => 'Neko Harbour 2',
            'hour' => '11:00',
            'date' => Carbon::now()->toDateString(),
        ]);
        DB::table('daily_programs')->insert([
            'voyages_id_voyage' => 1,
            'publications_id_pub' => 1,
            'title_en' => 'Neko Harbour 3',
            'hour' => '12:00',
            'date' => Carbon::now()->toDateString(),
        ]);
        DB::table('daily_programs')->insert([
            'voyages_id_voyage' => 1,
            'publications_id_pub' => 1,
            'title_en' => 'Neko Harbour 4',
            'hour' => '13:00',
            'date' => Carbon::now()->toDateString(),
        ]);

        DB::table('daily_programs')->insert([
            'voyages_id_voyage' => 1,
            'publications_id_pub' => 1,
            'title_en' => 'Neko Harbour 5',
            'hour' => '14:00',
            'date' => Carbon::now()->toDateString(),
        ]);

        DB::table('daily_programs')->insert([
            'voyages_id_voyage' => 1,
            'publications_id_pub' => 1,
            'title_en' => 'Neko Harbour 6',
            'hour' => '23:00',
            'date' => Carbon::now()->toDateString(),
        ]);
        DB::table('daily_programs')->insert([
            'voyages_id_voyage' => 1,
            'publications_id_pub' => 1,
            'title_en' => 'Neko Harbour 7',
            'hour' => '16:00',
            'date' => Carbon::now()->toDateString(),
        ]);

        DB::table('daily_programs_information')->insert([
            'title_en' => 'INFORMATION',
            'description_en' => 'We invite all passenger to visit out store and learn about our product catalog, open from 16:00 to 18:00.',
        ]);
        DB::table('daily_programs_information')->insert([
            'title_en' => 'ALERT',
            'description_en' => 'Go with caution, winds of more the 200 km/h.',
        ]);

        DB::table('parameters')->insert([
            'voyages_id_voyage' => 2,
           'template1' => 10000,
           'template2' => 20000,
           'template3' => 10000,
           'template4' => 10000,
           'template5' => 10000,
           'template6' => 10000,
           'template7' => 10000,
           'template8' => 10000,
        ]);

        DB::table('voyages')->insert([
                'embark' => Carbon::now()->toDateString(),
                'desembark' => Carbon::now()->toDateString()
        ]);

        DB::table('active_voyage')->insert([
            'voyages_id_voyage' => 1,
            'voyage_code' => 1
        ]);

        /*
*/
        // DB::table('schedule_descriptions')->insert([
        //     'subject' => 'Neko位于',
        //     'description' => 'Neko Harbour位于Andvord海湾的东岸，距离Errera海峡以南约11公里（7英里）。erlache在他的比利时南极探险队（1897-99）',
        //     'schedule_id' => 1
        // ]);












    }

}
