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
            'name' => 'rhone alpes',
            'slug' => 'rhone alpes',
        ]);
        DB::table('regions')->insert([
            'name' => 'nord pas de calais',
            'slug' => 'nord pas de calais',
        ]);
    }
}
