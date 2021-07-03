<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
    public function company_create(){
        return view('main/company/company_create');
    }
    public function company_list(){
        return view('main/company/company_list');
    }
}
