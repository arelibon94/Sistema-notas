<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(NotasTableSeeder::class);
        $this->call(RangosTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
    }
}
