<?php

namespace App\Http\Controllers;

use App\Categories as Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
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

            $categories = Categories::orderBy($sort, $order)->paginate($limit);

            return $categories;
        } else {
            $categories = Categories::all();

            return $categories;
        }
    }

    public function create(Request $request)
    {
        
        Categories::create([
            'category_name' => $request->category_name,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Add Data Success',
        ], 200);
    }

    public function edit($id)
    {
        $categories = Categories::find($id);
        return response()->json([
            'status'  => true,
            'message' => 'Get Data Success',
            'data'    => $categories,
        ]);
    }

    public function update(Request $request, $id)
    {
        $categories = Categories::find($id);

        $categories->category_name = $request->input('category_name');

        $categories->save();

        return response()->json([
            'status'  => true,
            'message' => 'Update Data Success',
        ], 200);
    }

    public function delete($id)
    {
        $categories = Categories::find($id);
        $categories->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Delete Data Success',
        ], 200);
    }

    //$products = Products::with('product_variants', 'product_variants.options', 'product_variants.options.option_values')->paginate(10);
}
