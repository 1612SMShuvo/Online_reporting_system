<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Proposal extends Model
{
    protected $fillable = ['proposal_no','proposal_date','company_id','proposal_status','user_id'];
    public $timestamps = true;

    public function client()
    {
    	return $this->belongsTo(Client::class,'company_id','id');
    }
}
