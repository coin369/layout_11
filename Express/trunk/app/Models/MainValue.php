<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainValue extends Model
{
    //
    protected $table="ca_main_value";
    protected $primary="id";
    protected $timestamp=true;
    public function Main(){
    	return $this->belongsTo(Main::class,"cid_main")->getResults();
    }
    
}