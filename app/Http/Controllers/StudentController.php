<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show()
    {
        return "Student List";
    }

    function about($name)
    {
        return "About Student: $name";
    }

    function add()
    {
        return "Add new Student";
    }

    function delete()
    {
        return "Delete Student";
    }
}
