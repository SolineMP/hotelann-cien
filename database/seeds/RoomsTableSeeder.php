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
            'name' => 'Montesquieu' ,
            'price' => 75,
            'type' => 'Standard',
        ]);

        DB::table('rooms')->insert([
            'number' => '2',
            'name' => 'Voltaire' ,
            'price' => 90,
            'type' => 'Junior Standard',
        ]);

        DB::table('rooms')->insert([
            'number' => '3',
            'name' => 'Hugo' ,
            'price' => 110,
            'type' => 'Junior Supérieur',
        ]);

        DB::table('rooms')->insert([
            'number' => '4',
            'name' => 'Musso' ,
            'price' => 125,
            'type' => 'Suite',
        ]);
    }
}

