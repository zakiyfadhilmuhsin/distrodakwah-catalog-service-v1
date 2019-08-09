<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SkuValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sku_values')->insert([
      		// Product 1
	      	[
	      		'sku_id' => 1,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 1,
	      	],[
	      		'sku_id' => 1,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 4, // AFF220MR (Size M)
	      	],[
	      		'sku_id' => 2,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 1,
	      	],[
	      		'sku_id' => 2,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 5, // AFF220MB (Size M)
	      	],[
	      		'sku_id' => 3,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 1,
	      	],[
	      		'sku_id' => 3,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 6, // AFF220MG (Size M)
	      	],[
	      		'sku_id' => 4,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 2,
	      	],[
	      		'sku_id' => 4,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 4, // AFF220LR (Size L)
	      	],[
	      		'sku_id' => 5,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 2,
	      	],[
	      		'sku_id' => 5,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 5, // AFF220LB (Size L)
	      	],[
	      		'sku_id' => 6,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 2,
	      	],[
	      		'sku_id' => 6,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 6, // AFF220LG (Size L)
	      	],[
	      		'sku_id' => 7,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 3,
	      	],[
	      		'sku_id' => 7,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 4, // AFF220XLR (Size XL)
	      	],[
	      		'sku_id' => 8,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 3,
	      	],[
	      		'sku_id' => 8,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 5, // AFF220XLB (Size XL)
	      	],[
	      		'sku_id' => 9,
	      		'product_id' => 1,
	      		'option_id' => 1,
	      		'value_id' => 3,
	      	],[
	      		'sku_id' => 9,
	      		'product_id' => 1,
	      		'option_id' => 2,
	      		'value_id' => 6, // AFF220XLG (Size XL)
	      	],
	      	// Product 2
	      	[
	      		'sku_id' => 10,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 7,
	      	],[
	      		'sku_id' => 10,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 10, // AFF210MR (Size M)
	      	],[
	      		'sku_id' => 11,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 7,
	      	],[
	      		'sku_id' => 11,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 11, // AFF210MB (Size M)
	      	],[
	      		'sku_id' => 12,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 7,
	      	],[
	      		'sku_id' => 12,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 12, // AFF210MG (Size M)
	      	],[
	      		'sku_id' => 13,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 8,
	      	],[
	      		'sku_id' => 13,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 10, // AFF210LR (Size L)
	      	],[
	      		'sku_id' => 14,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 8,
	      	],[
	      		'sku_id' => 14,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 11, // AFF210LB (Size L)
	      	],[
	      		'sku_id' => 15,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 8,
	      	],[
	      		'sku_id' => 15,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 12, // AFF210LG (Size L)
	      	],[
	      		'sku_id' => 16,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 9,
	      	],[
	      		'sku_id' => 16,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 10, // AFF210XLR (Size XL)
	      	],[
	      		'sku_id' => 17,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 9,
	      	],[
	      		'sku_id' => 17,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 11, // AFF210XLB (Size XL)
	      	],[
	      		'sku_id' => 18,
	      		'product_id' => 2,
	      		'option_id' => 3,
	      		'value_id' => 9,
	      	],[
	      		'sku_id' => 18,
	      		'product_id' => 2,
	      		'option_id' => 4,
	      		'value_id' => 12, // AFF210XLG (Size XL)
	      	],
	      	// Product 3
	      	[
	      		'sku_id' => 19,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 13,
	      	],[
	      		'sku_id' => 19,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 16, // AFF209MR (Size M)
	      	],[
	      		'sku_id' => 20,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 13,
	      	],[
	      		'sku_id' => 20,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 17, // AFF209MB (Size M)
	      	],[
	      		'sku_id' => 21,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 13,
	      	],[
	      		'sku_id' => 21,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 18, // AFF209MG (Size M)
	      	],[
	      		'sku_id' => 22,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 14,
	      	],[
	      		'sku_id' => 22,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 16, // AFF209LR (Size L)
	      	],[
	      		'sku_id' => 23,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 14,
	      	],[
	      		'sku_id' => 23,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 17, // AFF209LB (Size L)
	      	],[
	      		'sku_id' => 24,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 14,
	      	],[
	      		'sku_id' => 24,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 18, // AFF209LG (Size L)
	      	],[
	      		'sku_id' => 25,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 15,
	      	],[
	      		'sku_id' => 25,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 16, // AFF209XLR (Size XL)
	      	],[
	      		'sku_id' => 26,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 15,
	      	],[
	      		'sku_id' => 26,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 17, // AFF209XLB (Size XL)
	      	],[
	      		'sku_id' => 27,
	      		'product_id' => 3,
	      		'option_id' => 5,
	      		'value_id' => 15,
	      	],[
	      		'sku_id' => 27,
	      		'product_id' => 3,
	      		'option_id' => 6,
	      		'value_id' => 18, // AFF209XLG (Size XL)
	      	]
        ]); 
    }
}
