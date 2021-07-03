<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['service_name','price','user_id'];
    public $timestamps = true;
}
