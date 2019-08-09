<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=0;$i<5;$i++){

        	DB::table('students')->insert([
        		'nama' => $faker->name,
        		'alamat' => $faker->address,
        	]);

        }
    }
}
