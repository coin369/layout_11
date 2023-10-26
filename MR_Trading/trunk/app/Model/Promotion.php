<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $table="pro_promotion";
    protected $primary="id";
    protected $timestamp=true;

    //belongsToMany 
    public static function isRun(){
    	return $this->whereRaw("now() BETWEEN date_from AND date_to")->where("status","1")->get();
    }
    public function getProduct(){
    	return $this->hasMany(Promotionproduct::class,"cid_promotion")->getResults();
    }
}
