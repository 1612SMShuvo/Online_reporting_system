<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = ['agreement_no','agreement_date','company_id','company_name','proposal_no','invoice_no','created_by'];
    public $timestamps = true;
}
