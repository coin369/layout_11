<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;

class CustomerController extends AppController
{
    protected $View=[];
   
     public function add(Request $reqeust)
    {
        
    }
    public function lists(Request $reqeust){

    }
    public function edit(Request $request){

    }
    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
              
                echo 'destroy success';exit;
            }
        }

    }
}
