<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table="pro_type";
    protected $primary="id";
    protected $timestamp=true;
    public function Product(){
    	return $this->hasMany(Product::class,"cid_type")->where("status","1")->getResults();
    }
    public function ChildCountProduct($id_cate){
    	return $this->hasMany(Product::class,"cid_type")->where("status","1")->where("cid_cate",$id_cate)->count();
    }
    public function ParentTypeCount($id){
    	return Product::where("status","1")->where("cid_type",$id)->count();
    }
    public function ProductCountParent($id){
         return $this->hasMany(Product::class,"cid_type")->where("status","1")->whereRaw("cid_cate IN ( SELECT id FROM pro_cate WHERE cid_parent={$id})")->getResults();
    
    }
}
