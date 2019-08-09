<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            [
                'product_id'  => 1,
                'option_name' => 'Size',
            ], [
                'product_id'  => 1,
                'option_name' => 'Color',
            ], [
                'product_id'  => 2,
                'option_name' => 'Size',
            ], [
                'product_id'  => 2,
                'option_name' => 'Color',
            ], [
                'product_id'  => 3,
                'option_name' => 'Size',
            ], [
                'product_id'  => 3,
                'option_name' => 'Color',
            ],
        ]);
    }
}
