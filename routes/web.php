<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get();
// Route::pos();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

// Route::match(['get', 'post'], '/', function(){
//     return 'POST and GET is allowed.';
// });

// Route::view('/welcome', 'welcome');

// Route::permanentRedirect('/welcome', '/');

// Route::get('/', function(){
//     return 'Welcome';
// });

// // Route::get('/users', function(Request $request){
// //     dd($request);
// //     return null;
// // });

// Route::get('/user/{id}/{group}', function($id, $group){
//     return response($id.'-'.$group, 200);
// });

// Route::get('/request-json', function(){
//     return response()->json(['name' => 'Noriel', 'age' => '21']);
// });

// Route::get('/request-download', function(){
//     $path = public_path().'/robots.txt';
//     $name = 'robots.txt';
//     $headers = array(
//         'Content-type: application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/student/{id}', [StudentController::class, 'show']);