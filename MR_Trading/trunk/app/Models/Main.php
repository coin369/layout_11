<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    //
    protected $table="ca_main";
    protected $primary="id";
    protected $timestamp=true;
     public function Value(){
        return $this->hasMany(MainValue::class,"cid_main")->orderBy("id","ASC")->getResults();
    }
    
}