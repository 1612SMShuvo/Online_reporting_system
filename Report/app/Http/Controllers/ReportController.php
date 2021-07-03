<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Carbon\Carbon;
use App\Client;
use App\Proposal;
use App\Invoice;
use App\Report;
use Validator;
use Redirect;
use Auth;
use DB;


class ReportController extends Controller
{
    public function create_report()
    {
        $invoice = Invoice::orderBy('created_by','desc')->get();
        return view('main.report.report_create',compact('invoice'));
    }


    public function find_proposal(Request $request)
    {
        $data = Invoice::where('invoice',$request->id)->first();
        $proposal_no=$data->proposal_no;
        return response()->json($proposal_no);
    }

    public function create_store(Request $request)
    {

        $data = new Report();
        $input = $request->all();
        $report=$request->file('report');
        if ($report) {
         // dd($input);
            $file=hexdec(uniqid());
            $ext=strtolower($report->getClientOriginalExtension());
            $repor_fullname=$file.'.'.$ext;
            $upload_path='upload/Reports/';
            $report_url=$upload_path.$repor_fullname;
            $success1=$report->move($upload_path,$repor_fullname);
            $input['report']=$report_url;
            $input['created_by'] = Auth::User()->name;
            $data->fill($input)->save();
        return Redirect::back()->withErrors([ 'Data Added Successfully...!!!']);
        }
    }

    public function report_list()
    {
        $report = Report::orderBy('created_by','desc')->get();
        return view('main.report.report_list',compact('report'));
    }
}
