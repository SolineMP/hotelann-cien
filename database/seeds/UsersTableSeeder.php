<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'Chef',
            'lastName' => 'Chef' ,
            'phone' => 0654451215,
            'email' => 'Chef@Chef.fr',
            'adress' => '50, rue de la recette, Annecy',
            'zipCode' => 74240,
            'salary' => '1250',
            'role' => 'owner',
            'password' => '123',
        ]);

        DB::table('users')->insert([
            'firstName' => 'Felindra',
            'lastName' => 'TêtedeTigre' ,
            'phone' => 0654451215,
            'email' => 'f.tdt@felin.fr',
            'adress' => '50, rue de la vie, Paradis',
            'zipCode' => 15240,
            'salary' => '2150',
            'role' => 'manager',
            'password' => '123',

        ]);
     
        DB::table('users')->insert([
            'firstName' => 'Laurent',
            'lastName' => 'Paslepatron' ,
            'phone' => 0654451145,
            'email' => 'aurevoir@monsieur.fr',
            'adress' => '50, rue de la joie, Annecy',
            'zipCode' => 74240,
            'salary' => '1850',
            'role' => 'employee',
            'password' => '123',
            ]);

        DB::table('users')->insert([
            'firstName' => 'Suzanne',
            'lastName' => 'Piémontaise' ,
            'phone' => 065445115,
            'email' => 's.piemont@123.fr',
            'adress' => '50, rue de la quiche, Dijon',
            'zipCode' => 32240,
            'salary' => '',
            'role' => 'customer',
            'password' => '123',
        ]);
    }
}
