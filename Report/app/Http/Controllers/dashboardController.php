<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class dashboardController extends Controller
{
    public function index(){
        // $data=Hash::make('eurosia@1234');
        // dd($data);
        return view('auth.login');
    }
    public function dashboard()
    {
        return view('main/home');
    }
}
