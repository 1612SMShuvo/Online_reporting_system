<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inspectionController extends Controller
{
    public function inspection_team_create(){
        return view('main/inspection/inspection_team_create');
    }
    public function inspection_team_list(){
        return view('main/inspection/inspection_team_list');
    }
    public function inspection_create(){
        return view('main/inspection/inspection_create');
    }
    public function inspection_list(){
        return view('main/inspection/inspection_list');
    }
}
