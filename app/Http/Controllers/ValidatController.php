<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidatController extends Controller
{
    function registerValidate(Request $request){

        $request->validate(
            [
                'name' => 'required|string|min:2',
                'email' => 'required|email',
                'password' => 'required|string|min:8',
            ]
        );
        return "Register successful.";

    }
}
