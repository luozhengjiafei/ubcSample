<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| only define the route
*/

Route::get('/', function () {
    return view('welcome');
});

// Creating course item
Route::post('/upload',function(Request $request){
    $course_id = $request->course_id;
    $detail = $request->description;
    DB::insert("INSERT INTO courses (id,course_id,detail) VALUES
        ((SELECT MAX(id)+1 FROM courses),'$course_id', '$detail');");
    return redirect()->to('/dashboard');
});

// Creating course item
Route::post('/edit', function (Request $request) {
    $course_id = $request->course_id;
    DB::table('user')->where('course_id', '=', $course_id)->delete();
    return view('dashboard');
});

Route::delete('/delete', function (Request $request) {
    $course_id = $request->course_id;
    DB::table('user')->where('course_id', '=', $course_id)->delete();
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $courses = DB::table('courses')->get()->toArray();
    return view('dashboard')->with('data', $courses);
})->name('dashboard');


