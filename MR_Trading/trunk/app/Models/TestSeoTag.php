<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestSeoTag extends Model
{
    //
    protected $table="seo_page_meta_tags";
    protected $primary="id";
    protected $timestamp=true;
}
