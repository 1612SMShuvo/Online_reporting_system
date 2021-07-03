<?php

namespace App\Http\Controllers;
use Datatables;
use Carbon\Carbon;
use App\Client;
use App\Proposal;
use Validator;
use Redirect;
use Auth;
use DB;

use Illuminate\Http\Request;

class proposalController extends Controller
{
   

    public function proposal_list()
    {
        $proposal = Proposal::with(['client'])->get();
        return view('main.proposal.proposal_list',compact('proposal'));
    }
    public function proposal_create()
    {   
        $proposal = 'PSL-NO-00' . Proposal::get()->max('id');
        $client=Client::get();
    	return view('main.proposal.proposal_create',compact('client','proposal'));

        
	
    }

    public function proposal_store(Request $request)
    {
    	$request->validate([
    			'proposal_no'=> 'required',
                'proposal_date' => 'required',
                'company_id' => 'required',
                'proposal_status' => 'required'
		]);

        //--- Validation Section Ends

        //--- Logic Section
        $data = new Proposal();
        $input = $request->all();
        $input['created_by']='';
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Added Successfully...!!!']);

    	
    }
   


    public function proposal_edit($id)
    
    {
        $client=Client::get();
        $data=Proposal::findOrFail($id);
    	return view('main.proposal.proposal_edit',compact('data'));
    }

    public function proposal_update(Request $request,$id)
    {
    	
    	$request->validate([
            'proposal_no'=> 'required',
            'proposal_date' => 'required',
            'company_id' => 'required',
            'proposal_status' => 'required'
		]);

        //--- Validation Section Ends

        //--- Logic Section
        
        $data = Proposal::findOrFail($id);
        $input = $request->all();
            $input['created_by']='';

            $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section        
        
        return Redirect::back()->withErrors([ 'Data Updated Successfully...!!!']);
    } 

    public function proposal_destroy($id)
    {
        $data = Proposal::findOrFail($id);
        $data->delete();
        return Redirect::back()->withErrors(['Data Deleted Successfully...!!!']);
    }

    public function proposal_view($id)
    
    {
        $client=Client::get();
        $data=DB::table('proposals')
        ->join('clients','clients.id','=','proposals.company_id')
        ->where('proposals.id',$id)
        ->select('proposals.*','clients.company_name')
        ->first();
        //dd($data);
    	return view('main.proposal.proposal_view',compact('data'));
    }
}
