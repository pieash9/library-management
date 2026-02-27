<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show()
    {
        return "Student List 2";
    }

    function add()
    {
        return "Add new Student";
    }
}
