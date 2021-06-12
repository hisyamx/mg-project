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
            'code' => "ADM-01",
            'name' => 'Admin',
            'email' => 'admindemo@mail.com',
            'password' => Hash::make("123123"),
            'role' => 1,
            'telephone' => "12345678",
            'address' => "abc",
            'instansi' => "Botika",
        ]);

        User::create([
            'code' => "C-000001",
            'name' => 'Ditto Anindita',
            'email' => 'dittoanindita@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'start' => "2019-08-01 11:06:48",
            'finish' => "2025-08-01 11:06:48",
            'telephone' => "081225007007",
            'address' => "Yogyakarta",
            'instansi' => "Botika",
        ]);

        User::create([
            'code' => "C-000002",
            'name' => 'Vacant',
            'email' => 'vacant@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'start' => "2019-08-01 11:06:48",
            'finish' => "2025-08-01 11:06:48",
            'telephone' => "08551000100",
            'address' => "Yogyakarta",
            'instansi' => "Botika",
        ]);

        User::create([
            'code' => "C-000003",
            'name' => 'Eri Kuncoro',
            'email' => 'erikuncoro@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'start' => "2019-08-01 11:06:48",
            'finish' => "2025-08-01 11:06:48",
            'telephone' => "081225789789",
            'address' => "Yogyakarta",
            'instansi' => "Botika",
        ]);

        User::create([
            'code' => "C-000004",
            'name' => 'Galuh Koco Sadewo',
            'email' => 'galuhks@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'start' => "2019-08-01 11:06:48",
            'finish' => "2025-08-01 11:06:48",
            'telephone' => "08558711886",
            'address' => "Yogyakarta",
            'instansi' => "Botika",
        ]);

        User::create([
            'code' => "C-000005",
            'name' => 'Lorens M Ian',
            'email' => 'lorensmi@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'start' => "2019-08-01 11:06:48",
            'finish' => "2025-08-01 11:06:48",
            'telephone' => "08558711886",
            'address' => "Yogyakarta",
            'instansi' => "Botika",
        ]);

        User::create([
            'code' => "C-000006",
            'name' => 'Prima Yoga',
            'email' => 'prima@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'start' => "2019-08-01 11:06:48",
            'finish' => "2025-08-01 11:06:48",
            'telephone' => "087712745700",
            'address' => "Yogyakarta",
            'instansi' => "Botika",
        ]);

        User::create([
            'code' => "C-000007",
            'name' => 'Panji Satrio',
            'email' => 'satriopanji@mail.com',
            'password' => Hash::make("123123"),
            'role' => 2,
            'start' => "2019-08-01 11:06:48",
            'finish' => "2025-08-01 11:06:48",
            'telephone' => "0835005005",
            'address' => "Yogyakarta",
            'instansi' => "Botika",
        ]);
    }
}
