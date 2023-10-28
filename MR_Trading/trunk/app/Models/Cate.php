<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;
class Cate extends Model
{
    //
    protected $table="pro_cate";
    protected $primary="id";
    protected $timestamp=true;
    public function Child(){
      return Cache::remember("Model_Cate_Child",1000,function(){
    	    return $this->hasMany(Cate::class,"cid_parent")->where("status","1")->orderBy("orderby","ASC")->getResults();
      });
    }
     public function ChildHome(){
        return $this->hasMany(Cate::class,"cid_parent")->where("status","1")->where("is_menu","1")->orderBy("orderby","ASC")->getResults();
    }
    
    public function ChildAdmin(){
        return $this->hasMany(Cate::class,"cid_parent")->orderBy("orderby","ASC")->getResults();
    }
    public function Parent(){
    	return $this->belongsTo(Cate::class,"cid_parent")->getResults();
    }
     public function Home(){
       return Cache::remember("Model_Cate_HOME",1000,function(){
          return $this->hasManyThrough(Product::class,Cate::class,"cid_parent","cid_cate")
                ->where("pro_product.status","1")
                ->where("pro_product.is_hot","2")
                ->orderBy("pro_product.id","DESC")->
                limit(6)->getResults();
      });
        
    }

    //IF PARENT

    public function ParentType(){
        return Type::whereRaw("id in (SELECT cid_type FROM pro_product WHERE cid_cate IN (SELECT id FROM pro_cate WHERE cid_parent={$this->id} ) )")->orderBy("name","DESC")->get();
     }
     
     public function ParentColor(){
        return Color::whereRaw("id in (SELECT cid_color FROM pro_product WHERE cid_cate IN (SELECT id FROM pro_cate WHERE cid_parent={$this->id} ) )")->orderBy("name","DESC")->get();
     }
     // IF Child
     public function Type(){
        return Type::whereRaw("id IN (SELECT cid_type FROM pro_product WHERE cid_cate= {$this->id} AND status='1')")->orderBy("id",'DESC')->get();
     }
      public function Color(){
        return Color::whereRaw("id IN (SELECT cid_color FROM pro_product WHERE cid_cate= {$this->id} AND status='1')")->orderBy("id",'DESC')->get();
     }
     public function Product(){
        return $this->hasMany(Product::class,"cid_cate")->getResults();
     }
     
}
