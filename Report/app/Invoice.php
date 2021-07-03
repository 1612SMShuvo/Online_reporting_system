<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['invoice','proposal_no','sale_tax','others','entry_date','total_price','created_by'];
    public $timestamps = true;
}
