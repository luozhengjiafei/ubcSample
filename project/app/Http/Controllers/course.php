<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class course extends Controller
{
    function get(){
        echo("Yes");
        /*
        $courses = DB::table('courses')->get()->toArray();
        return view('dashboard')->with('courses', $courses);
            */
        }

}

