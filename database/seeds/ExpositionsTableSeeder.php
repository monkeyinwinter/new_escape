<?php

use Illuminate\Database\Seeder;

class ExpositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('expositions')->insert([
          'name'=>'Nord',
       ]);
       DB::table('expositions')->insert([
          'name'=>'Sud',
       ]);
       DB::table('expositions')->insert([
          'name'=>'Est',
       ]);
       DB::table('expositions')->insert([
          'name'=>'Ouest',
       ]);
       DB::table('expositions')->insert([
          'name'=>'Nord-Est',
       ]);
       DB::table('expositions')->insert([
          'name'=>'Sud-Est',
       ]);
       DB::table('expositions')->insert([
          'name'=>'Nord-Ouest',
       ]);
       DB::table('expositions')->insert([
          'name'=>'Sud-Ouest',
       ]);
     }
}
