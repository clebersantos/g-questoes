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
        $this->call(AssuntosTableSeeder::class);
        $this->call(OrgaosTableSeeder::class);
        $this->call(BancasTableSeeder::class);
        $this->call(QuestaoTableSeeder::class);
    }
}
