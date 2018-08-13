<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RegionsTableSeeder::class,
            DepartementsTableSeeder::class,
            VillesTableSeeder::class,
            SpotsTableSeeder::class,
            VoiesTableSeeder::class,
        ]);
    }
}