<?php

use App\User;
use App\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'name' => 'IPTEK',
            'head_user_id' => 2,
        ]);

        Division::create([
            'name' => 'LITBANG',
            'head_user_id' => 3,
        ]);

        Division::create([
            'name' => 'IPTEK',
            'head_user_id' => 4,
        ]);

        $user = User::find(2);
        $user->division_id = 2;
        $user->save();

        $user = User::find(3);
        $user->division_id = 3;
        $user->save();

        $user = User::find(4);
        $user->division_id = 3;
        $user->save();
    }
}
