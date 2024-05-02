<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News_Cate extends Model
{
    //
    protected $table="ca_news_cate";
    protected $primary="id";
    protected $timestamp=true;
    public function Parent(){
    	return $this->belongsTo(News_Cate::class,"cid_parent")->getResults();
    }
     public function Child($status=0){
     	if($status==0){
     		return $this->hasMany(News_Cate::class,"cid_parent")->orderBy("name","DESC")->getResults();
     	}
    	return $this->hasMany(News_Cate::class,"cid_parent")->where("status",$status)->orderBy("name","DESC")->getResults();
    }
}
