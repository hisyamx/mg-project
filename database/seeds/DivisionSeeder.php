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
            'name' => 'Executive Officer',
            'head_user_id' => 2,
        ]);

        Division::create([
            'name' => 'Finance Accounting',
            'head_user_id' => 3,
        ]);

        Division::create([
            'name' => 'Marketing Strategic',
            'head_user_id' => 4,
        ]);

        Division::create([
            'name' => 'Business Dev',
            'head_user_id' => 5,
        ]);

        Division::create([
            'name' => 'Human Resource',
            'head_user_id' => 6,
        ]);

        Division::create([
            'name' => 'Technology Officer',
            'head_user_id' => 7,
        ]);

        Division::create([
            'name' => 'Data Dev',
            'head_user_id' => 8,
        ]);

        $user = User::find(2);
        $user->division_id = 1;
        $user->save();

        $user = User::find(3);
        $user->division_id = 2;
        $user->save();

        $user = User::find(4);
        $user->division_id = 3;
        $user->save();

        $user = User::find(5);
        $user->division_id = 4;
        $user->save();

        $user = User::find(6);
        $user->division_id = 5;
        $user->save();

        $user = User::find(7);
        $user->division_id = 6;
        $user->save();

        $user = User::find(8);
        $user->division_id = 7;
        $user->save();
    }
}
