<?php

use App\UserProjectPivot;
use Illuminate\Database\Seeder;

class UserProjectPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserProjectPivot::class, 500)->create();
    }
}
