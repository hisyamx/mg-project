<?php

use Illuminate\Database\Seeder;

class MagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 100; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pegawai')->insert([

            'name' => $faker->name,
            'kode' => $faker->iban($id),
            'role' => $faker->JobTitle,
            'division' => $faker->JobTitle,
            'start' => $faker->namedate($format = 'Y-m-d', $max = 'now'),
            'finish' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'telephone' => $faker->phoneNumber,
			'status' => $faker->numberBetween(0,1),
            'cover_image' => $faker->imageUrl($width = 640, $height = 480)
    		]);
 
    	}

    }
}
