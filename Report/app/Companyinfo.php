<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyinfo extends Model
{
    protected $fillable = ['company_name','company_owner','company_md','company_phone','company_address','company_licence','company_email','company_website','company_facebook', 'company_instagram', 'company_whatsapp','company_logo','company_icon','created_by'];
    public $timestamps = true;
}
