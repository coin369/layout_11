<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table="tag_main";
    protected $primary="id";
    public $timestamps=false;
    public function Product(){
    	return $this->belongsToMany(Product::class,"tag_product","cid_tag","cid_product");
    }
     public function News(){
    	return $this->belongsToMany(News::class,"tag_news","cid_tag","cid_news");
    }
}
