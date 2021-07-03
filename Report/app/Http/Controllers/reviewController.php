<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function review(){
        return view('main/review');
    }
}
