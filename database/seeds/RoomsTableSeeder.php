<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'number' => '1',
            'name' => 'Planque de l\'académie',
            'price' => 75,
            'type' => 'Standard',
            'description' => 'Elegante et charmante, elle accueillera vos mercenaires chaleureusement.',
            'picture' => 'https://gamepedia.cursecdn.com/pathofexile_gamepedia/e/e4/Enlightened_Hideout_area_screenshot.jpg?version=6560aa650fcfc19d1da9da35cbe9c197', 
        ]);

        DB::table('rooms')->insert([
            'number' => '2',
            'name' => 'Planque des bassins du Gladiateur Risen' ,
            'price' => 90,
            'type' => 'Junior Standard',
            'description' => 'Cette planque vous permettra en plus de vous laver.',
            'picture' => 'https://gamepedia.cursecdn.com/pathofexile_gamepedia/8/80/Luxurious_Hideout_area_screenshot.jpg?version=f8e696a4b60f2bd2be3bfebb1acf7ed6',
        ]);

        DB::table('rooms')->insert([
            'number' => '3',
            'name' => 'Planque Glaciale' ,
            'price' => 110,
            'type' => 'Junior Supérieur',
            'description' => 'Aussi rare que précieuse, elle vous permettra de briller en societé',
            'picture' => 'https://gamepedia.cursecdn.com/pathofexile_gamepedia/e/ee/Glacial_Hideout_area_screenshot.jpg?version=980a093f7ecd10d170bd1e00bf214b26',
        ]);

        DB::table('rooms')->insert([
            'number' => '4',
            'name' => 'Planque Celeste' ,
            'price' => 125,
            'type' => 'Suite',
            'description' => 'Elle vous enverra dans une autre dimension', 
            'picture' => 'https://gamepedia.cursecdn.com/pathofexile_gamepedia/3/3e/Celestial_Hideout_area_screenshot.jpg?version=75f212e2e8157d064716ad296feb3538',
        ]);
    }
}

