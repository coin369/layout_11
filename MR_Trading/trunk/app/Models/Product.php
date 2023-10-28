<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="pro_product";
    protected $primary="id";
    protected $timestamp=true;

    public function Cate(){
    	return $this->belongsTo(Cate::class,"cid_cate")->getResults();
    }
    public function Color(){
    	return $this->belongsTo(Color::class,"cid_color")->getResults();
    }
    public function Type(){
    	return $this->belongsTo(Type::class,"cid_type")->getResults();
    }
    public function Promotion(){
        return $this->belongsToMany(Promotion::class,"pro_promotion_product","cid_product","cid_promotion")->whereRaw("now() BETWEEN date_from AND date_to")->getResults();
    }
     public function PromotionProduct(){
        return $this->hasOne(Promotionproduct::class,"cid_product")->orderBy("pro_promotion_product.id","DESC")->getResults();
    }
     public function Tag(){
        return $this->belongsToMany(Tag::class,"tag_product","cid_product","cid_tag");
    }
}
