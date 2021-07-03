<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Carbon\Carbon;
use App\Client;
use App\Proposal;
use App\Invoice;
use App\Agreement;
use Validator;
use Redirect;
use Auth;
use DB;

class agreementsController extends Controller
{

    public function agreement_list()
    {
        $agreement = Agreement::orderBy('created_at','desc')->get();
        return view('main.agreements.agreement_list',compact('agreement'));
    }

    public function agreemts_invoice(){
        return view('main/agreements/agreements_invoice');
    }

    public function agreement_create()
    {
        $agreement = 'AGG-VNO-00' . Agreement::get()->max('id');
        $company = Client::orderBy('created_at','desc')->get();
        return view('main.agreements.agreement_create',compact('agreement','company'));
    }

    public function search_proposal(Request $request)
    {
        $data = Proposal::orderBy('created_at','desc')->where('company_id',$request->id)->first();
        $proposal_no=$data->proposal_no;
        return response()->json($proposal_no);
    }

    public function search_invoice(Request $request)
    {
        $data = Proposal::orderBy('created_at','desc')->where('company_id',$request->id)->first();
        $proposal_no=$data->proposal_no;
        $datas = Invoice::orderBy('created_at','desc')->where('proposal_no',$proposal_no)->first();
        $invoice_no=$datas->invoice;
        return response()->json($invoice_no);
    }

    public function agreements_store(Request $request)
    {
        $request->validate([
                'agreement_no' => 'required|string',
                'agreement_date' =>'required|date',
                'company_id' =>'required|numeric',
                'proposal_no' => 'required|string',
                'invoice_no' => 'required|string'
        ]);
        $data = Client::where('id',$request->company_id)->first();
        $input['agreement_no'] = $request->agreement_no;
        $input['agreement_date'] = $request->agreement_date;
        $input['company_id'] = $request->company_id;
        $input['company_name'] = $data->company_name;
        $input['proposal_no'] = $request->proposal_no;
        $input['invoice_no'] = $request->invoice_no;
        $input['created_by']=Auth::User()->name;
        // dd($input);
        $data1=DB::table('agreements')->insert($input);
        return Redirect::back()->withErrors([ 'Data Added Successfully...!!!']);
    }

    public function agreements_delete($id)
    {
        $data=DB::table('agreements')->where('id',$id)->delete();
        return Redirect::back()->withErrors([ 'Data Deleted Successfully...!!!']);
    }
}
