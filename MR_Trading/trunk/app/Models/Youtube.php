<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    //
     protected $table="ca_youtube";
    protected $primary="id";
    protected $timestamp=true;
    public function Cate(){
        return $this->belongsTo(Youtubecate::class,"cid_cate")->getResults();
     }
}
