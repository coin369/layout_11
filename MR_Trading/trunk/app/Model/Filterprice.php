<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Filterprice extends Model
{
    //
      protected $table="pro_filter_price";
    protected $primary="id";
    protected $timestamp=true;
     public function ProductAll(){
        return Product::where("status","1")->where("price",">",$this->price_from)->where("price","<=",$this->price_to)->count();
    }
    public function ProductParent($id_cate){
        return Product::where("status","1")->whereRaw("cid_cate IN ( SELECT id FROM pro_cate WHERE cid_parent={$id_cate})")->where("price",">",$this->price_from)->where("price","<=",$this->price_to)->count();
    }

      public function ProductChild($id_cate){
        return Product::where("status","1")->where("cid_cate",$id_cate)->where("price",">",$this->price_from)->where("price","<=",$this->price_to)->count();
    }
    public function ProductCount($id){
    	return Product::where("status","1")->where("cid_cate",$id)->where("price",">",$this->price_from)->where("price","<=",$this->price_to)->count();
    }
     public function ProductCountParent($id){
    	return Product::where("status","1")->whereRaw("cid_cate IN ( SELECT id FROM pro_cate WHERE cid_parent={$id})")->where("price",">",$this->price_from)->where("price","<=",$this->price_to)->count();
    }
}
