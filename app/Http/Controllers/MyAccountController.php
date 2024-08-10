<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function index()
    {
        return view('myaccount'); // Assuming you have a folder named `account` inside `views`
    }
}
