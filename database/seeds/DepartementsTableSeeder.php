<?php

use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('departements')->insert([
           'name' => 'Ain',
           'slug'=>'ain',
           'departement_number'=> '01',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Aisne',
           'slug'=>'aisne',
           'departement_number'=> '02',
           'region_id'=> '6',
       ]);
        DB::table('departements')->insert([
           'name' => 'Allier',
           'slug'=>'allier',
           'departement_number'=> '03',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Alpes-De-Hautes-Provence',
           'slug'=>'alpes-de-hautes-provence',
           'departement_number'=> '04',
           'region_id'=> '12',
       ]);
        DB::table('departements')->insert([
           'name' => 'Hautes-Alpes',
           'slug'=>'hautes-alpes',
           'departement_number'=> '05',
           'region_id'=> '12',
       ]);
        DB::table('departements')->insert([
           'name' => 'Alpes-Maritimes',
           'slug'=>'alpes-maritimes',
           'departement_number'=> '06',
           'region_id'=> '12',
       ]);
        DB::table('departements')->insert([
           'name' => 'Ardèche',
           'slug'=>'ardèche',
           'departement_number'=> '07',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Ardennes',
           'slug'=>'ardennes',
           'departement_number'=> '08',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Ariège',
           'slug'=>'ariège',
           'departement_number'=> '09',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Aube',
           'slug'=>'aube',
           'departement_number'=> '10',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Aude',
           'slug'=>'aude',
           'departement_number'=> '11',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Aveyron',
           'slug'=>'aveyron',
           'departement_number'=> '12',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Bouches-du-rhône',
           'slug'=>'bouches-du-rhône',
           'departement_number'=> '13',
           'region_id'=> '12',
       ]);
        DB::table('departements')->insert([
          'name' => 'Calvados',
           'slug'=>'calvados',
           'departement_number'=> '14',
           'region_id'=> '8',
       ]);
        DB::table('departements')->insert([
          'name' => 'Cantal',
           'slug'=>'cantal',
           'departement_number'=> '15',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
          'name' => 'Charente',
           'slug'=>'charente',
           'departement_number'=> '16',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
          'name' => 'Charente-Maritime',
           'slug'=>'charente-maritime',
           'departement_number'=> '17',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
          'name' => 'Cher',
           'slug'=>'cher',
           'departement_number'=> '18',
           'region_id'=> '4',
       ]);
        DB::table('departements')->insert([
          'name' => 'Corrèze',
           'slug'=>'corrèze',
           'departement_number'=> '19',
           'region_id'=> '9',
       ]);
                DB::table('departements')->insert([
                  'name' => 'Corse-Nord',
                   'slug'=>'corse-nord',
                   'departement_number'=> '2A',
                   'region_id'=> '9',
               ]);
                DB::table('departements')->insert([
                  'name' => 'Corse-Sud',
                   'slug'=>'corse-sud',
                   'departement_number'=> '2B',
                   'region_id'=> '9',
               ]);
        DB::table('departements')->insert([
          'name' => 'Côte-D\'Or',
           'slug'=>'côte-d\'or',
           'departement_number'=> '21',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
          'name' => 'Côtes-D\'Armor',
           'slug'=>'côtes-d\'armor',
           'departement_number'=> '22',
           'region_id'=> '3',
       ]);
        DB::table('departements')->insert([
          'name' => 'Creuse',
           'slug'=>'creuse',
           'departement_number'=> '23',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Dordogne',
           'slug'=>'dordogne',
           'departement_number'=> '24',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Doubs',
           'slug'=>'doubs',
           'departement_number'=> '25',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
           'name' => 'Drôme',
           'slug'=>'drôme',
           'departement_number'=> '26',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Eure',
           'slug'=>'eure',
           'departement_number'=> '27',
           'region_id'=> '8',
       ]);
        DB::table('departements')->insert([
           'name' => 'Eure-Et-Loire',
           'slug'=>'eure-et-loire',
           'departement_number'=> '28',
           'region_id'=> '4',
       ]);
        DB::table('departements')->insert([
           'name' => 'Finistère',
           'slug'=>'finistère',
           'departement_number'=> '29',
           'region_id'=> '3',
       ]);
        DB::table('departements')->insert([
           'name' => 'Gard',
           'slug'=>'gard',
           'departement_number'=> '30',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haute-Garonne',
           'slug'=>'haute-garonne',
           'departement_number'=> '31',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Gers',
           'slug'=>'gers',
           'departement_number'=> '32',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Gironde',
           'slug'=>'gironde',
           'departement_number'=> '33',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Hérault',
           'slug'=>'hérault',
           'departement_number'=> '34',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Ille-Et-Vilaine',
           'slug'=>'ille-et-vilaine',
           'departement_number'=> '35',
           'region_id'=> '3',
       ]);
        DB::table('departements')->insert([
           'name' => 'Indre',
           'slug'=>'indre',
           'departement_number'=> '36',
           'region_id'=> '4',
       ]);
        DB::table('departements')->insert([
           'name' => 'Indre-Et-Loire',
           'slug'=>'indre-et-loire',
           'departement_number'=> '37',
           'region_id'=> '4',
       ]);
        DB::table('departements')->insert([
           'name' => 'Isère',
           'slug'=>'isère',
           'departement_number'=> '38',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Jura',
           'slug'=>'jura',
           'departement_number'=> '39',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
           'name' => 'Landes',
           'slug'=>'landes',
           'departement_number'=> '40',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Loire-Et-Cher',
           'slug'=>'loire-et-cher',
           'departement_number'=> '41',
           'region_id'=> '4',
       ]);
        DB::table('departements')->insert([
           'name' => 'Loire',
           'slug'=>'loire',
           'departement_number'=> '42',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haute-Et-Loire',
           'slug'=>'haute-loire',
           'departement_number'=> '43',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Loire-Atlantique',
           'slug'=>'loire-atlantique',
           'departement_number'=> '44',
           'region_id'=> '11',
       ]);
        DB::table('departements')->insert([
           'name' => 'Loiret',
           'slug'=>'loiret',
           'departement_number'=> '45',
           'region_id'=> '4',
       ]);
        DB::table('departements')->insert([
           'name' => 'Lot',
           'slug'=>'lot',
           'departement_number'=> '46',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Lot-Et-Garonne',
           'slug'=>'lot-et-garonne',
           'departement_number'=> '47',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Lozère',
           'slug'=>'lozère',
           'departement_number'=> '48',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Maine-Et-Loire',
           'slug'=>'maine-et-loire',
           'departement_number'=> '49',
           'region_id'=> '11',
       ]);
        DB::table('departements')->insert([
           'name' => 'Manche',
           'slug'=>'manche',
           'departement_number'=> '50',
           'region_id'=> '8',
       ]);
        DB::table('departements')->insert([
           'name' => 'Marne',
           'slug'=>'marne',
           'departement_number'=> '51',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haute-Marne',
           'slug'=>'haute-marne',
           'departement_number'=> '52',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Mayenne',
           'slug'=>'mayenne',
           'departement_number'=> '53',
           'region_id'=> '11',
       ]);
        DB::table('departements')->insert([
           'name' => 'Meurthe-Et-Moselle',
           'slug'=>'meurthe-et-moselle',
           'departement_number'=> '54',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Meuse',
           'slug'=>'meuse',
           'departement_number'=> '55',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Morbihan',
           'slug'=>'morbihan',
           'departement_number'=> '56',
           'region_id'=> '3',
       ]);
        DB::table('departements')->insert([
           'name' => 'Moselle',
           'slug'=>'moselle',
           'departement_number'=> '57',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Nièvre',
           'slug'=>'nièvre',
           'departement_number'=> '58',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
           'name' => 'Nord',
           'slug'=>'nord',
           'departement_number'=> '59',
           'region_id'=> '6',
       ]);
        DB::table('departements')->insert([
           'name' => 'Oise',
           'slug'=>'oise',
           'departement_number'=> '60',
           'region_id'=> '6',
       ]);
        DB::table('departements')->insert([
           'name' => 'Orme',
           'slug'=>'orme',
           'departement_number'=> '61',
           'region_id'=> '8',
       ]);
        DB::table('departements')->insert([
           'name' => 'Pas-De-Calais',
           'slug'=>'pas-de-calais',
           'departement_number'=> '62',
           'region_id'=> '6',
       ]);
        DB::table('departements')->insert([
           'name' => 'Puy-De-Dôme',
           'slug'=>'puy-de-dôme',
           'departement_number'=> '63',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Pyrénées-Atlantique',
           'slug'=>'pyrénées-atlantique',
           'departement_number'=> '64',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haute-Pyrénées',
           'slug'=>'haute-pyrénées',
           'departement_number'=> '65',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Pyrénées-Orientales',
           'slug'=>'pyrénées-orientales',
           'departement_number'=> '66',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Bas-Rhin',
           'slug'=>'bas-rhin',
           'departement_number'=> '67',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haut-Rhin',
           'slug'=>'haut-rhin',
           'departement_number'=> '68',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Rhône',
           'slug'=>'rhône',
           'departement_number'=> '69',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haute-Saône',
           'slug'=>'haute-saône',
           'departement_number'=> '70',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
           'name' => 'Saône-Et-Loire',
           'slug'=>'saône-et-loire',
           'departement_number'=> '71',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
           'name' => 'Sarthe',
           'slug'=>'sarthe',
           'departement_number'=> '72',
           'region_id'=> '11',
       ]);
        DB::table('departements')->insert([
           'name' => 'Savoie',
           'slug'=>'savoie',
           'departement_number'=> '73',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haute-Savoie',
           'slug'=>'haute-savoie',
           'departement_number'=> '74',
           'region_id'=> '1',
       ]);
        DB::table('departements')->insert([
           'name' => 'Paris',
           'slug'=>'paris',
           'departement_number'=> '75',
           'region_id'=> '7',
       ]);
        DB::table('departements')->insert([
           'name' => 'Seine-Maritime',
           'slug'=>'seine-maritime',
           'departement_number'=> '76',
           'region_id'=> '8',
       ]);
        DB::table('departements')->insert([
           'name' => 'Seine-Et-Marne',
           'slug'=>'seine-et-marne',
           'departement_number'=> '77',
           'region_id'=> '7',
       ]);
        DB::table('departements')->insert([
           'name' => 'Yveline',
           'slug'=>'yveline',
           'departement_number'=> '78',
           'region_id'=> '7',
       ]);
        DB::table('departements')->insert([
           'name' => 'Deux-Sèvres',
           'slug'=>'deux-sèvres',
           'departement_number'=> '79',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Somme',
           'slug'=>'somme',
           'departement_number'=> '80',
           'region_id'=> '6',
       ]);

        DB::table('departements')->insert([
           'name' => 'Tarn',
           'slug'=>'tarn',
           'departement_number'=> '81',
           'region_id'=> '10',
       ]);

        DB::table('departements')->insert([
           'name' => 'Tarn-Et-Garonne',
           'slug'=>'tarn-et-garonne',
           'departement_number'=> '82',
           'region_id'=> '10',
       ]);
        DB::table('departements')->insert([
           'name' => 'Var',
           'slug'=>'var',
           'departement_number'=> '83',
           'region_id'=> '12',
       ]);
        DB::table('departements')->insert([
           'name' => 'Vaucluse',
           'slug'=>'vaucluse',
           'departement_number'=> '84',
           'region_id'=> '12',
       ]);
        DB::table('departements')->insert([
           'name' => 'Vendée',
           'slug'=>'vendée',
           'departement_number'=> '85',
           'region_id'=> '11',
       ]);
        DB::table('departements')->insert([
           'name' => 'Vienne',
           'slug'=>'vienne',
           'departement_number'=> '86',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haute-Vienne',
           'departement_number'=> '87',
           'slug'=>'haute-vienne',
           'region_id'=> '9',
       ]);
        DB::table('departements')->insert([
           'name' => 'Vosges',
           'slug'=>'vosges',
           'departement_number'=> '88',
           'region_id'=> '5',
       ]);
        DB::table('departements')->insert([
           'name' => 'Yonne',
           'slug'=>'yonne',
           'departement_number'=> '89',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
           'name' => 'Territoire-De-Belfort',
           'slug'=>'territoire-de-belfort',
           'departement_number'=> '90',
           'region_id'=> '2',
       ]);
        DB::table('departements')->insert([
           'name' => 'Essonne',
           'slug'=>'essonne',
           'departement_number'=> '91',
           'region_id'=> '7',
       ]);
        DB::table('departements')->insert([
           'name' => 'Haut-De-Seine',
           'slug'=>'haut-de-seine',
           'departement_number'=> '92',
           'region_id'=> '7',
       ]);
        DB::table('departements')->insert([
           'name' => 'Seine-Saint-Denis',
           'slug'=>'seine-saint-denis',
           'departement_number'=> '93',
           'region_id'=> '7',
       ]);
        DB::table('departements')->insert([
           'name' => 'Val-de-Marne',
           'slug'=>'val-de-marne',
           'departement_number'=> '94',
           'region_id'=> '7',
       ]);
        DB::table('departements')->insert([
           'name' => 'Val-D\'Oise',
           'slug'=>'val-d\'oise',
           'departement_number'=> '95',
           'region_id'=> '7',
       ]);
      }
  }
