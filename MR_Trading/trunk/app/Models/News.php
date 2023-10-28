<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table="ca_news";
    protected $primary="id";
    protected $timestamp=true;
    public function User(){
    	return $this->belongsTo(Users::class,"cid_user")->getResults();
    }
     public function Cate(){
    	return $this->belongsTo(News_Cate::class,"cid_cate")->getResults();
    }
     public function Tag(){
            return $this->belongsToMany(Tag::class,"tag_news","cid_news","cid_tag")->getResults();
    }
    public function MyTag(){
            return $this->belongsToMany(Tag::class,"tag_news","cid_news","cid_tag");
    }
}
