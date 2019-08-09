<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
        	'product_name' => 'AF220 – Playful Sabar',
        	'product_desc' => 'Mengajak si kecil untuk selalu bersabar dan mengendalikan emosi ketika bermain bersama.',
        ],[
        	'product_name' => 'AF210 – Keep silent or speak good works',
        	'product_desc' => 'Berkata baik atau diam, itulah adab yang selalu dicontohkan oleh Rasulullah. Dengan semakin berkembangnya teknologi informasi sekarang ini, mengamalkan hadist ini menjadi semakin penting.',
        ],[
        	'product_name' => 'AF209 – Keep silent or speak good works',
        	'product_desc' => 'Berkata baik atau diam, itulah adab yang selalu dicontohkan oleh Rasulullah. Dengan semakin berkembangnya teknologi informasi sekarang ini, mengamalkan hadist ini menjadi semakin penting.',
        ]
    	]);
    }
}
