<?php

namespace App\Models\WP;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
   protected $connection = 'mysqlWP';

    protected $table="vt_term_relationships";
    protected $primary="id";
    public $timestamps=false;
   
     
}
