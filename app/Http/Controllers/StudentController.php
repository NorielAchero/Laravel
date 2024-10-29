<?php

namespace App\Http\Controllers;

Use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){

        // $data = Students::where('age', '<=', 19)
        // ->orderBy('first_name') 
        // -> limit(5)
        // -> get();

        // $data = DB::table('students')
        //         ->select(DB::raw('count(*) as gender_count, gender
        //         '))->groupBy('gender')->get();
       

        // $data = Students::where('id', 100) -> firstOrFail() ->get();
        // return view('students.index', ['students' => $data]);
    }

    public function show($id){
        $data = Students::findOrFail($id); // Correct method to find by primary key
        return view('students.index', ['students' => $data]);
    }
}
