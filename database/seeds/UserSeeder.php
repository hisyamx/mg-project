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
        User::create([
            'code' => "ABC123",
            'name' => 'Admin',
            'email' => 'admindemo@mail.com',
            'password' => Hash::make("123123"),
            'role' => 1,
            'telephone' => "12345678",
            'address' => "abc",
            'instansi' => "gojek",
        ]);

        User::create([
            'code' => "ABC123",
            'name' => 'Hisyam',
            'email' => 'hisyam@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'telephone' => "12345678",
            'address' => "abc",
            'instansi' => "gojek",
        ]);

        User::create([
            'code' => "ABC123",
            'name' => 'Sultan',
            'email' => 'sultan@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'telephone' => "12345678",
            'address' => "abc",
            'instansi' => "gojek",
        ]);

        User::create([
            'code' => "ABC123",
            'name' => 'Heru',
            'email' => 'heru@mail.com',
            'password' => Hash::make("123123"),
            'role' => 3,
            'telephone' => "12345678",
            'address' => "abc",
            'instansi' => "toped",
        ]);
    }
}
