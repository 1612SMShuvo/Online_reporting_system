<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoicebreakdown extends Model
{
    protected $fillable = ['invoice','proposal_no','service_no','service_name','sale_tax','others','entry_date','s_price','quantity','price','total_price','created_by'];
    public $timestamps = true;
}
