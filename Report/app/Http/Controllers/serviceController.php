<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Carbon\Carbon;
use App\Service;
use Validator;
use Redirect;
use Auth;

class serviceController extends Controller
{
    public function service_list()
    {
    
        $service = Service::get();
        return view('main.invoice.service_list',compact('service'));
    }
    public function service_create()
    {
    	return view('main.invoice.service_create');

        
	
    }

    public function service_store(Request $request)
    {
    	$request->validate([
    			'service_name'=> 'required',
                'price' => 'required'
               
		]);

        //--- Validation Section Ends

        //--- Logic Section
        $data = new Service();
        $input = $request->all();
        $input['created_by']='';
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Added Successfully...!!!']);

    	
    }
   


    public function service_edit($id)
    
    {
        $data=Service::findOrFail($id);
    	return view('main.invoice.service_edit',compact('data'));
    }

    public function service_update(Request $request,$id)
    {
    	
    	$request->validate([
            'service_name'=> 'required',
                'price' => 'required'
		]);

        //--- Validation Section Ends

        //--- Logic Section
        
        $data = Service::findOrFail($id);
        $input = $request->all();
            $input['created_by']='';

            $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Updated Successfully...!!!']);
    } 

    public function service_destroy($id)
    {
        $data = Service::findOrFail($id);
        $data->delete();
        return Redirect::back()->withErrors(['Data Deleted Successfully...!!!']);
    }

}
