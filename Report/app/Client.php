<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['company_name','company_owner','company_phone','company_address','company_email','company_website','con_per_name','con_per_phone','created_by'];
    public $timestamps = true;
}
