<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('age', ['except' => ['generate_key']]);
    }

    
    public function generate_key()
    {
        return str_random(32);
    }

    public function getPost($postId, $commentId)
    {
        return "Postnya {$postId} Commentnya {$commentId}";
    }

    public function roma()
    {
        return 'Urlnya adalah ' . route('roma.action');
    }

    public function romaAction()
    {
        return 'Urlnya adalah ' . route('roma');
    }

    public function registerUser(Request $request)
    {
        //return $request->all();

        // if($request->filled('firstName')){
        //     return 'Success';
        // }else{
        //     return 'Failed';
        // }

        // return $request->except(['firstName']);

        $data['namaDepan'] = $request->firstName;
        $data['namaBelakang'] = $request->lastName;

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data,
        ], 201);
    }

}
