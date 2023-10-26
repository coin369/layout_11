<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
      protected $table="pro_color";
    protected $primary="id";
    protected $timestamp=true;
    
    public function Product(){
    	return $this->hasMany(Product::class,"cid_color")->getResults();
    }
    public function ParentProductCount($id_cate){
    	return Product::where("status","1")->where("cid_cate",$id_cate)->where("cid_color",$this->id)->count();
    }
     public function ProductCountParent($id){

        return $this->hasMany(Product::class,"cid_color")->where("status","1")->whereRaw("cid_cate IN ( SELECT id FROM pro_cate WHERE cid_parent={$id})")->getResults();
        
    }
}

