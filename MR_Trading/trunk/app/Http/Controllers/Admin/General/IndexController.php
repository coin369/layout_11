<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use Validator;
use App;
use App\Models\General as DTGeneral;
use Image;

use DB;
use File;
use App\Models\Service as DTService;

use App\Models\News as DTNews;
use App\Models\Main as DTMain;
use App\Models\MainValue as DTMainValue;
use App\Models\MainHuman as DTMainHuman;


class IndexController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $View=[];
 
    public function index(Request $request)
    {
         

        $this->View['data_list']=DTMain::orderBy("id","ASC")->paginate(20);
         $this->View['data_list_human']=DTMainHuman::orderBy("id","ASC")->get();
       
       
        return view("admin.general.index.index",$this->View);
    }

    public function edit($id,Request $request){

        $TUpdated=DTMain::where("id",$id)->first();
       
        //home
        // if($id==1){
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required",
                "content"=>"required"
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{

             
                $TUpdated->name=$request->input("name");
                
                $TUpdated->content=$request->input("content");
               
                $TUpdated->save();

                $request->session()->flash("success","Successfully ");
                return redirect()->back();
            }
        }
          
         $this->View['page']=$TUpdated;
    
        return view("admin.general.index.edit",$this->View);
    }

}
