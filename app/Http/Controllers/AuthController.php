<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome(Request $request) {
        $fName = $request['fName'];
        $lName = $request['lName'];
        $fullName = $fName . " " . $lName;
        return view('welcome2', ['fullName' => $fullName]);
    }
}
