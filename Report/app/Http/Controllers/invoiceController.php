<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Proposal;
use App\Service;
use App\Invoice;
use App\Client;
use NumberFormatter;
use App\Invoicebreakdown;
use Validator;
use Redirect;
use Auth;
use DB;

class invoiceController extends Controller
{
    
    public function invoice($id)
    {
        $invoice = Invoice::where('id',$id)->first();
        $proposal = Proposal::where('proposal_no',$invoice->proposal_no)->first();
        $clients = Client::where('id',$proposal->company_id)->first();
        $invoicebreakdown = Invoicebreakdown::where('invoice',$invoice->invoice)->get();
        return view('main/invoice/invoice',compact('invoice','proposal','clients','invoicebreakdown'));
    }
    
    public function invoice_create(Request $request)
    {
        $invoice = 'INV-VNO-00' . Invoice::get()->max('id');
        $proposal = Proposal::orderBy('created_at','desc')->get();
        $service = Service::orderBy('created_at','desc')->get();
        return view('main/invoice/invoice_create',compact('proposal','service','invoice'));
    }

    public function invoice_store (Request $request)
    {
        $data = new invoice();

        $input = $request->all();
        $i=0;$total =0;
        foreach($input['service_name'] as $p => $service_name):
            $data1 = new Invoicebreakdown();
            $array = [
                'invoice' => $input['invoice'],
                'proposal_no' => $input['proposal_no'],
                'entry_date' => $input['entry_date'],
                'sale_tax' => $input['sale_tax'],
                'others' => $input['others'],
                'service_name' => $service_name,
                's_price' => $input['s_price'][$p],
                'quantity' => $input['quantity'][$p],
                'price' => $input['price'][$p],
                'created_by' => Auth::User()->name,
            ];
            $total = $array['price'] + $total;
            $net2 = ($total + ($total*($request->sale_tax/100)));
            $net =  $net2 - (($net2*$request->others)/100);
            $array['total_price'] = $net;
            $input['total_price'] = $net;
            $input['created_by'] = Auth::User()->name;
            $data1->fill($array)->save();
        endforeach;

        $data->fill($input)->save();

        return Redirect::back()->withErrors(['Data Added Successfully...!!!']);
    }


    public function invoice_list()
    {
        $data = DB::table('invoices')
        ->orderBy('created_at','desc')
        ->get();
        return view('main/invoice/invoice_list',compact('data'));
    }

    public function invoice_delete($id)
    {
        $data = Invoice::where('id',$id)->first();
        $invoicebreak = Invoicebreakdown::where('invoice',$data->invoice)->delete();
        $invoice = Invoice::where('id',$id)->delete();
        return Redirect::back()->withErrors(['Data Deleted Successfully...!!!']);
    }
   
}
