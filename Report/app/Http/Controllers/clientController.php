<?php

namespace App\Http\Controllers;
use Datatables;
use Carbon\Carbon;
use App\Client;
use Validator;
use Redirect;
use Auth;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function client_list()
    {
    	$data=Client::get();
    	return view('main.client.client_list',compact('data'));
    }
    public function client_create()
    {

    	return view('main.client.client_create');
	
    }

    public function client_store(Request $request)
    {
    	$request->validate([
    			'company_name'=> 'required',
                'company_phone' => 'required|numeric|digits:11|min:0',
                'company_address' => 'required|string',
                'company_email' => 'required|email'
		]);

        //--- Validation Section Ends

        //--- Logic Section
        $data = new Client();
        $input = $request->all();
        $input['created_by']='';
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Added Successfully...!!!']);

    	
    }
   


    public function client_edit($id)
    {
        $data=Client::findOrFail($id);
    	return view('main.client.client_edit',compact('data'));
    }

    public function client_update(Request $request,$id)
    {
    	
    	$request->validate([
    			'company_name'=> 'required',
                'company_phone' => 'required|numeric|digits:11|min:0',
                'company_address' => 'required|string',
                'company_email' => 'required|email'
		]);

        //--- Validation Section Ends

        //--- Logic Section
        
        $data = Client::findOrFail($id);
        $input = $request->all();
            $input['created_by']='';

            $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Updated Successfully...!!!']);
    } 

    public function client_destroy($id)
    {
        $data = Client::findOrFail($id);
        $data->delete();
        return Redirect::back()->withErrors(['Data Deleted Successfully...!!!']);
    }
}
