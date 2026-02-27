<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function userHome($name = "Pieash")
    {
        $users =['Pieash', 'Ahmed', 'Khan'];
        return view("home", ["name" => $name, "users" => $users]);
    }

    function adminLogin()
    {
        if (View::exists("admin.login")) {
            # code...
            return view("admin.login");
        }else {
            echo "View not found!";
        }
    }
}
