<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Carbon\Carbon;
use App\Companyinfo;
use Validator;
use Redirect;
use Auth;

class companyinfoController extends Controller
{
    public function company_create()
    {
    	$data=Companyinfo::first();
        $head=Companyinfo::orderBy('created_at')->first();
    	$count=Companyinfo::count();
    	if ($count>0) {
    		return view('main.company.company_view',compact('data'));
    	}
    	else{
    		return view('main.company.company_create');
    	}
    	
    }

    public function company_store(Request $request)
    {
    	$request->validate([
    			'company_name'=> 'required',
                'company_phone' => 'required|numeric|digits:11|min:0',
                'company_address' => 'required|string',
                'company_licence' => 'required|numeric|min:4',
                'company_email' => 'required|email',
                'company_logo' => 'required|mimes:jpeg,jpg,png,svg,jpeg,JPEG,PNG,JPG',
                'company_icon' => 'required|mimes:jpeg,jpg,png,svg,jpeg,JPEG,PNG,JPG'
		]);

        //--- Validation Section Ends

        //--- Logic Section
        $data = new Companyinfo();
        $input = $request->all();
        $company_logo=$request->file('company_logo');
        $company_icon=$request->file('company_icon');
        if ($company_logo && $company_icon) {
            $image_name1=hexdec(uniqid());
            $ext=strtolower($company_logo->getClientOriginalExtension());
            $image_full_name1=$image_name1.'.'.$ext;
            $upload_path1='upload/Admin/Company/';
            $image_url1=$upload_path1.$image_full_name1;
            $success1=$company_logo->move($upload_path1,$image_full_name1);
            $input['company_logo']=$image_url1;


            $image_name2=hexdec(uniqid());
            $ext=strtolower($company_icon->getClientOriginalExtension());
            $image_full_name2=$image_name2.'.'.$ext;
            $upload_path2='upload/Admin/Company/';
            $image_url2=$upload_path2.$image_full_name2;
            $success2=$company_icon->move($upload_path2,$image_full_name2);
            $input['company_icon']=$image_url2;
            $input['created_by']='';
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Added Successfully...!!!']);
    	}
    	else{
    		echo "<pre>";
    		print_r("sorry");
    		exit();
    	}
    }

    public function companyinfo_edit($id)
    {
    	$data=Companyinfo::get();
    	return view('main.company.company_view',compact('data'));
    }

    public function companyinfo_update(Request $request,$id)
    {
    	
    	$request->validate([
    			'company_name'=> 'required',
                'company_phone' => 'required|numeric|digits:11|min:0',
                'company_address' => 'required|string',
                'company_licence' => 'required|numeric|min:4',
                'company_email' => 'required|email'
		]);

        //--- Validation Section Ends

        //--- Logic Section
        
        $data = Companyinfo::findOrFail($id);
        $input = $request->all();
        if ($request->file('company_logo') && $request->file('company_icon')) {
	        $company_logo=$request->file('company_logo');
	        $company_icon=$request->file('company_icon');

            $image_name1=hexdec(uniqid());
            $ext=strtolower($company_logo->getClientOriginalExtension());
            $image_full_name1=$image_name1.'.'.$ext;
            $upload_path1='upload/Admin/Company/';
            $image_url1=$upload_path1.$image_full_name1;
            $success1=$company_logo->move($upload_path1,$image_full_name1);
            $input['company_logo']=$image_url1;


            $image_name2=hexdec(uniqid());
            $ext=strtolower($company_icon->getClientOriginalExtension());
            $image_full_name2=$image_name2.'.'.$ext;
            $upload_path2='upload/Admin/Company/';
            $image_url2=$upload_path2.$image_full_name2;
            $success2=$company_icon->move($upload_path2,$image_full_name2);
            $input['company_icon']=$image_url2;
            $input['created_by']='';

            $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Updated Successfully...!!!']);
    	}
    	else{
            $data->update($input);
        	return Redirect::back()->withErrors([ 'Data Updated Successfully...!!!']);
    	}
    }
}
