<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pegawai')->insert([

            'name' => $faker->name,
            'division' => $faker->JobTitle,
            'pj' => $faker->name,
            'start' => $faker->namedate($format = 'Y-m-d', $max = 'now'),
            'finish' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'cover_image' => $faker->imageUrl($width = 640, $height = 480),
			'status' => $faker->numberBetween(0,1),
            'description' => $faker->randomHtml(2,3)
    		]);
 
    	}

    }
}
