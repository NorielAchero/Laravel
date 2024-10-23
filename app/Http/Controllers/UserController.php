<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello from UserController';
    }


    public function show($id)
    {
        $data = ["data" => "Data From the Database"];
        return view('user')
            ->with('data', $data)
            ->with('name', 'Noriel')
            ->with('age', 22)
            ->with('email', '123@gmail.com')
            ->with('id', $id);
    }
}
