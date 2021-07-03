<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['invoice_no','proposal_no','report','created_by'];
    public $timestamps = true;
}
