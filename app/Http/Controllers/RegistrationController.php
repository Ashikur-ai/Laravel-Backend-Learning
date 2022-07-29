<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('view');
    }

    public function register(Request $request)
    {
        return $request;
    }
}
