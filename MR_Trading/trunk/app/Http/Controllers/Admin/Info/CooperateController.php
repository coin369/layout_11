<?php

namespace App\Http\Controllers\Admin\Info;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use Validator;
use Mail;
use App;

use App\Models\Cooperate as DTCooperate;

class CooperateController extends AppController
{
    protected $View=[];
     public function __construct(){
       $this->View['is_side']='info';
    }
    public function index(Request $request){

        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }

        $this->View['search']=$search;
        $data_list=DTCooperate::where("name","LIKE","%{$search}%")
                              
                                ->orderBy("id","DESC")
                                ->paginate(20);
        $this->View['data_list']=$data_list;
        return view("admin.general.cooperate.list",$this->View);


    }

    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                DTCooperate::find($id)->delete();
                return  'destroy success';exit;
            }
        }

    }
}
