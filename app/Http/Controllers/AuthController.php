<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function AuthProfile():string{
        return "Welcome, You can edit you Profile page.";
    }
    function AuthSetting():string{
        return "Welcome, You can edit your Settings.";
    }
}
