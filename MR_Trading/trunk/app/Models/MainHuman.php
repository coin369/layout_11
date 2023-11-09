<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainHuman extends Model
{
    //
    protected $table="ca_main_human";
    protected $primary="id";
    protected $timestamp=true;
    public function Value(){
    	return $this->belongsTo(Users::class,"cid_user")->getResults();
    }
    
}