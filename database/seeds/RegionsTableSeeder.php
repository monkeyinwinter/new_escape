<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => 'Auvergne Rhone Alpes',
            'slug' => 'auvergne-rhone-alpes',
        ]);
        DB::table('regions')->insert([
            'name' => 'Bourgogne Franche Comte',
            'slug' => 'bourgogne-franche-comte',
        ]);
        DB::table('regions')->insert([
            'name' => 'Bretagne',
            'slug' => 'bretagne',
        ]);
        DB::table('regions')->insert([
            'name' => 'Centre Val De Loire',
            'slug' => 'centre-val-de-loire',
        ]);
        DB::table('regions')->insert([
            'name' => 'Grand Est',
            'slug' => 'grand-est',
        ]);
        DB::table('regions')->insert([
            'name' => 'Hauts De France',
            'slug' => 'Hauts De France',
        ]);
        DB::table('regions')->insert([
            'name' => 'Ile De France',
            'slug' => 'ile-de-france',
        ]);
        DB::table('regions')->insert([
            'name' => 'Nouvelle Aquitaine',
            'slug' => 'nouvelle-aquitaine',
        ]);
        DB::table('regions')->insert([
            'name' => 'Normandie',
            'slug' => 'normandie',
        ]);
        DB::table('regions')->insert([
            'name' => 'Occitanie',
            'slug' => 'occitanie',
        ]);
        DB::table('regions')->insert([
            'name' => 'Pays De Loire',
            'slug' => 'pays-de-loire',
        ]);
        DB::table('regions')->insert([
            'name' => 'Provence Alpes Côte D\'Azur',
            'slug' => 'provence-alpes-côte-d\'azur',
        ]);
    }
}
