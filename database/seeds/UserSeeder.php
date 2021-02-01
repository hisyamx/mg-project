<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'foto' => 'Check',
            'email' => 'admin@mail.com',
            // 'email_verified_at' => 
            'password' => Hash::make("989898")
        ]);
    }
}
