<?php

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
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pegawai')->insert([
    			'name' => $faker->name,
    			'headof' => $faker->jobTitle,
    			'status' => $faker->numberBetween(0,1)
    		]);
 
    	}
    }
}
