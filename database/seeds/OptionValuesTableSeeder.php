<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OptionValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_values')->insert([
	        // Product 1
	        [
	        	'product_id' => 1,
	        	'option_id' => 1,
	        	'value_name' => 'M',
	        ],[
	        	'product_id' => 1,
	        	'option_id' => 1,
	        	'value_name' => 'L',
	        ],[
	        	'product_id' => 1,
	        	'option_id' => 1,
	        	'value_name' => 'XL',
	        ],[
	        	'product_id' => 1,
	        	'option_id' => 2,
	        	'value_name' => 'Red',
	        ],[
	        	'product_id' => 1,
	        	'option_id' => 2,
	        	'value_name' => 'Blue',
	        ],[
	        	'product_id' => 1,
	        	'option_id' => 2,
	        	'value_name' => 'Green',
	        ],
	        // Product 2
	        [
	        	'product_id' => 2,
	        	'option_id' => 1,
	        	'value_name' => 'M',
	        ],[
	        	'product_id' => 2,
	        	'option_id' => 1,
	        	'value_name' => 'L',
	        ],[
	        	'product_id' => 2,
	        	'option_id' => 1,
	        	'value_name' => 'XL',
	        ],[
	        	'product_id' => 2,
	        	'option_id' => 2,
	        	'value_name' => 'Red',
	        ],[
	        	'product_id' => 2,
	        	'option_id' => 2,
	        	'value_name' => 'Blue',
	        ],[
	        	'product_id' => 2,
	        	'option_id' => 2,
	        	'value_name' => 'Green',
	        ],
	        // Product 3
	        [
	        	'product_id' => 3,
	        	'option_id' => 1,
	        	'value_name' => 'M',
	        ],[
	        	'product_id' => 3,
	        	'option_id' => 1,
	        	'value_name' => 'L',
	        ],[
	        	'product_id' => 3,
	        	'option_id' => 1,
	        	'value_name' => 'XL',
	        ],[
	        	'product_id' => 3,
	        	'option_id' => 2,
	        	'value_name' => 'Red',
	        ],[
	        	'product_id' => 3,
	        	'option_id' => 2,
	        	'value_name' => 'Blue',
	        ],[
	        	'product_id' => 3,
	        	'option_id' => 2,
	        	'value_name' => 'Green',
	        ]
    	]);
    }
}
