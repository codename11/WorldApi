<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    public function error403(){

        $error = "Unauthorized access!";
        return view("errors.403", compact("error"));

    }

}
