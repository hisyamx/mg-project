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
        $this->call(UserSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(RandomUserSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(UserProjectPivotSeeder::class);
    }
}
