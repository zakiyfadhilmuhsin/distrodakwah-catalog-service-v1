<?php

namespace App\Http\Controllers;

use App\Options as Options;
use App\OptionValues as OptionValues;
use App\Products as Products;
use App\ProductSkus as ProductSkus;
use App\SkuValues as SkuValues;
use Illuminate\Http\Request;

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

    public function index(Request $request)
    {
        if ($request->has('sort') && $request->has('order') && $request->has('limit')) {
            $sort  = $request->sort;
            $order = $request->order;
            $limit = $request->limit;

            $products = Products::orderBy($sort, $order)->paginate($limit);

            return $products;
        } else {
            $products = Products::paginate(10);

            return $products;
        }
    }

    public function create(Request $request)
    {

        if ($request->product_type == 'Simple Product') {

            Products::create([
                'product_name'        => $request->product_name,
                'product_description' => $request->product_description,
                'featured_image'      => $request->featured_image,
                'price'               => $request->price,
                'cogs'                => $request->cogs,
                'sku'                 => $request->sku,
                'weight'              => $request->weight,
                'tags'                => $request->tags,
                'category_id'         => $request->category_id,
                'brand_id'            => $request->brand_id,
                'product_type'        => $request->product_type,
            ]);

        } else {

            $products = Products::create([
                'product_name'        => $request->product_name,
                'product_description' => $request->product_description,
                'featured_image'      => $request->featured_image,
                'price'               => $request->price,
                'cogs'                => $request->cogs,
                'sku'                 => $request->sku,
                'weight'              => $request->weight,
                'tags'                => $request->tags,
                'category_id'         => $request->category_id,
                'brand_id'            => $request->brand_id,
                'product_type'        => $request->product_type,
            ]);

            $product_variants = json_decode($request->variants);

            // foreach ($product_variants as $key => $var) {

            //     $sku = ProductSkus::create([
            //         'product_id' => $products->id,
            //         'sku'        => $var->sku,
            //         'price'      => $var->price,
            //         'stock'      => $var->stock,
            //     ]);

            // }
            $skus = array();

            foreach ($product_variants as $key => $var) {
                    
                $sku = ProductSkus::create([
                    'product_id' => $products->id,
                    'sku'        => $var->sku,
                    'price'      => $var->price,
                    'stock'      => $var->stock,
                ]);

                $skus[] = $sku->id;

            }

            //print_r($skus);
            //$product_sku = ProductSkus::findOne($skus);

            $product_options = json_decode($request->options);

            foreach ($product_options as $key => $opt) {

                $options = Options::create([
                    'product_id'  => $products->id,
                    'option_name' => $opt->optionName,
                ]);

                foreach ($opt->value as $key => $val) {
                    
                    foreach($skus as $i => $sk){
                        $product_sku = ProductSkus::find($sk);
                    }

                    $product_sku->option_values()->create([
                        'option_id'  => $options->id,
                        'value_name' => $val,
                    ],['product_id' => $products->id, 'option_id' => $options->id]);

                    // SkuValues::create([
                    //     'sku_id'     => $sku->id,
                    //     'product_id' => $products->id,
                    //     'option_id'  => $options->id,
                    //     'value_id'   => $sku_values->id,
                    // ]);
                    //$insertData[] = $data_options_val;
                }

            }

        }

        // return response()->json([
        //     'status'  => true,
        //     'message' => 'Add Data Success',
        // ], 200);
    }

    public function edit($id)
    {
        $product = Products::find($id);
        return response()->json([
            'status'  => true,
            'message' => 'Get Data Success',
            'data'    => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);

        $product->product_name        = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->tags                = $request->input('tags');
        $product->featured_image      = $request->input('featured_image');

        $product->save();

        return response()->json([
            'status'  => true,
            'message' => 'Update Data Success',
        ], 200);
    }

    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Delete Data Success',
        ], 200);
    }

    //$products = Products::with('product_variants', 'product_variants.options', 'product_variants.options.option_values')->paginate(10);
}
