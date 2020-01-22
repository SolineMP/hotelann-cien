<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'reservation' => 20200504,
            'registration' => 20200122,
            'users_id' => 4,
            'rooms_id' => 4,
        ]);
    }
}
