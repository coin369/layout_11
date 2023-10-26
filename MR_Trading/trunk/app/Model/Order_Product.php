<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    //
     protected $table="or_order_product";
    protected $primary="id";
    protected $timestamp=true;
    public function Product(){
    	return $this->belongsTo(Product::class,"cid_product")->getResults();
    }
}
