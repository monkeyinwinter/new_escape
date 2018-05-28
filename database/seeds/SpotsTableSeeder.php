<?php

use Illuminate\Database\Seeder;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('spots')->insert([
         'name'=>'Le Rocher de la Chevillère',
         'slug'=>'le-Rocher-de-la-chevillere',
         'nombre_voies'=>'13',
         'nombre_degaines'=>'12',
         'expo_soleil'=>'Est',
         'temps_approche'=>'1',
         'type_roche'=>'Granite',
         'altitude'=> '450',
         'longueur_corde'=>'70',
         'nombre_secteur'=>'1',
         'voies_4'=>'0',
         'voies_5'=>'7',
         'voies_6'=>'4',
         'voies_7'=>'2',
         'voies_8'=>'0',
         'ville_id'=>'30',
      ]);
    }
}
