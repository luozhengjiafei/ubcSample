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
    $condition = DB::table("courses")->where("course_id", $course_id)->exists();
    if($condition){
        DB::insert("UPDATE courses SET detail = '$detail' WHERE course_id = '$course_id';");
    }else{
    DB::insert("INSERT INTO courses (id,course_id,detail) VALUES
        ((SELECT MAX(id)+1 FROM courses),'$course_id', '$detail');");
    }
    return redirect()->to('/dashboard');
});

Route::post('/delete', function () {
    $course_id = $_POST['course_id'];
    DB::table('courses')->where('course_id', '=', $course_id)->delete();
    return redirect()->to('/dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $courses = DB::table('courses')->get()->toArray();
    return view('dashboard')->with('data', $courses);
})->name('dashboard');



