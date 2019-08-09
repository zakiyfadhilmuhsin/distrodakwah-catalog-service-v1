<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSkusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_skus')->insert([
        	// Product 1
	        [
	       		'product_id' => 1,
	       		'sku' => 'AF220MR',
	       		'price' => 120000,
	        ],[
	       		'product_id' => 1,
	       		'sku' => 'AF220MB',
	       		'price' => 120000,
	        ],[
	        	'product_id' => 1,
	        	'sku' => 'AF220MG',
	        	'price' => 120000,
	        ],[
	        	'product_id' => 1,
	        	'sku' => 'AF220LR',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 1,
	        	'sku' => 'AF220LB',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 1,
	        	'sku' => 'AF220LG',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 1,
	        	'sku' => 'AF220XLR',
	        	'price' => 130000,
	        ],[
	        	'product_id' => 1,
	        	'sku' => 'AF220XLB',
	        	'price' => 130000,
	        ],[
	        	'product_id' => 1,
	        	'sku' => 'AF220XLG',
	        	'price' => 130000,
	        ],
	        	// Product 2
	        [
	       		'product_id' => 2,
	       		'sku' => 'AF210MR',
	       		'price' => 120000,
	        ],[
	       		'product_id' => 2,
	       		'sku' => 'AF210MB',
	       		'price' => 120000,
	        ],[
	        	'product_id' => 2,
	        	'sku' => 'AF210MG',
	        	'price' => 120000,
	        ],[
	        	'product_id' => 2,
	        	'sku' => 'AF210LR',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 2,
	        	'sku' => 'AF210LB',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 2,
	        	'sku' => 'AF210LG',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 2,
	        	'sku' => 'AF210XLR',
	        	'price' => 130000,
	        ],[
	        	'product_id' => 2,
	        	'sku' => 'AF210XLB',
	        	'price' => 130000,
	        ],[
	        	'product_id' => 2,
	        	'sku' => 'AF210XLG',
	        	'price' => 130000,
	        ],
	        	// Product 3
	        [
	       		'product_id' => 3,
	       		'sku' => 'AF209MR',
	       		'price' => 120000,
	        ],[
	       		'product_id' => 3,
	       		'sku' => 'AF209MB',
	       		'price' => 120000,
	        ],[
	        	'product_id' => 3,
	        	'sku' => 'AF209MG',
	        	'price' => 120000,
	        ],[
	        	'product_id' => 3,
	        	'sku' => 'AF209LR',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 3,
	        	'sku' => 'AF209LB',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 3,
	        	'sku' => 'AF209LG',
	        	'price' => 125000,
	        ],[
	        	'product_id' => 3,
	        	'sku' => 'AF209XLR',
	        	'price' => 130000,
	        ],[
	        	'product_id' => 3,
	        	'sku' => 'AF209XLB',
	        	'price' => 130000,
	        ],[
	        	'product_id' => 3,
	        	'sku' => 'AF209XLG',
	        	'price' => 130000,
	        ]
		]);
    }
}
