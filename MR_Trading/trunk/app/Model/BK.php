<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BK extends Model
{
    //
     protected $table="bz_posts";
    protected $primary="id";
    protected $timestamp=true;

     public function Parent(){
    	return $this->belongsTo(BK::class,"post_parent")->getResults();
    }
}
