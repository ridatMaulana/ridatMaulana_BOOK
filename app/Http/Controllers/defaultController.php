<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class defaultController extends Controller
{
    public function main()
    {
            return view('welcome');
    }
}
