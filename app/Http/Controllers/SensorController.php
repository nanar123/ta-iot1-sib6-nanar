<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    function index(){

        return view('pages.datasensor');
    }
}
