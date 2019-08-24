<?php

namespace App\Http\Controllers;

use App\Brands as Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
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

            $brands = Brands::orderBy($sort, $order)->paginate($limit);

            return $brands;
        } else {
            $brands = Brands::all();

            return $brands;
        }
    }

    public function create(Request $request)
    {
        
        Brands::create([
            'brand_name' => $request->brand_name,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Add Data Success',
        ], 200);
    }

    public function edit($id)
    {
        $brands = Brands::find($id);
        return response()->json([
            'status'  => true,
            'message' => 'Get Data Success',
            'data'    => $brands,
        ]);
    }

    public function update(Request $request, $id)
    {
        $brands = Brands::find($id);

        $brands->brand_name = $request->input('brand_name');

        $brands->save();

        return response()->json([
            'status'  => true,
            'message' => 'Update Data Success',
        ], 200);
    }

    public function delete($id)
    {
        $brands = Brands::find($id);
        $brands->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Delete Data Success',
        ], 200);
    }

}
