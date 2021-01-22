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
            'nama' => 'Admin',
            'role' => 'admin',
            'foto' => 'Check',
            'email' => 'admin@mail.com',
            'username' => 'adminadm',
            // 'email_verified_at' => 
            'password' => Hash::make("989898")
        ]);
    }
}
