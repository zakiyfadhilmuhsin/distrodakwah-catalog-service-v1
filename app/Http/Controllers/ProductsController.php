<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use \App\Product;
use \Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
        $products = Product::with(['sku_value.option', 'sku_value.option_value', 'sku_value.product_sku'])->get();
        return response()->json(['data' => $products]);
    }

}
