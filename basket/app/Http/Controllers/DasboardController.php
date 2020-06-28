<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
