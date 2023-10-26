<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
     protected $table="or_order";
    protected $primary="id";
    protected $timestamp=true;
    public function Detail(){
    	return $this->hasMany(Order_Product::class,"cid_order")->getResults();
    }
}
