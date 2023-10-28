<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotionproduct extends Model
{
    //
    protected $table="pro_promotion_product";
    protected $primary="id";
    protected $timestamp=true;

    //belongsToMany 
    public function Product(){
    	return $this->belongsTo(Product::class,"cid_product")->getResults();
    }
}
