<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use \App\Student;
use \Illuminate\Http\Request;

class StudentsController extends Controller
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
        $students = Student::paginate(2);
        return response($students);
    }

    public function create(Request $request)
    {
        Student::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
    }

    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->nama = $request->input('nama');
        $students->alamat = $request->input('alamat');

        $students->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Berhasil Diupdate!',
            'data' => null,
        ], 200);
    }

    public function delete($id)
    {
        $students = Student::find($id);
        $students->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Berhasil Dihapus!',
            'data' => null,
        ], 200);
    }

}