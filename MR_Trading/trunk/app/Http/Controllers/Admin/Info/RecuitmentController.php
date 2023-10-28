<?php

namespace App\Http\Controllers\Admin\Info;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App\Models\Recuitment as DTRecuitment;
use App\MrData as MrData;
use App;
use Validator;
use Image;

class RecuitmentController extends AppController
{   
    protected $View=[];
      public function __construct(){
       $this->View['is_side']='info';
    }
     public function add(Request $request)
    {
        $data=[];
        $data['status']=1;
        $data['is_type']=1;
        $data['position']=1;
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required",
                "description"=>"required",
                 "content"=>"required",
         
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew=new DTRecuitment();
                $TNew->name=$request->input("name");
                $TNew->alias=MrData::toAlias2($request->input("name") ) ;
                $TNew->quality=$request->input("quality");
                $TNew->area=$request->input("area");
                $TNew->salary=$request->input("salary");
                $TNew->limited=$request->input("limited");
                $TNew->description=$request->input("description");

                $TNew->content=$request->input("content");
                $TNew->viewer=1;
                $TNew->status=$request->input("status",1);



                
             

                $TNew->save();
                $request->session()->flash("success"," Thêm mới thành công ");
                return redirect()->back();
            }
        }
        $this->View['data']=$data;
        return view("admin.general.recuitment.add",$this->View);   
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTRecuitment::where("name","LIKE","%$search%")->orderBy("id","DESC")->paginate(20);
        return view("admin.general.recuitment.list",$this->View);

    }

    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTRecuitment::find($id);
             
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }
    public function edit($id,Request $request)
    {

    
                $data=[];
                $TUpdate=DTRecuitment::find($id);
                if($request->isMethod("post")){
                    $validator=Validator::make($request->all(),[
                        "name"=>"required",
                      
                      
                   
                    ]);
                    if($validator->fails()){
                        return redirect()->back()->withErrors($validator)->withInput();
                    }else{
                      
                        $TUpdate->name=$request->input("name");
                        $TUpdate->alias=MrData::toAlias2($request->input("name") ) ;
                        $TUpdate->quality=$request->input("quality");
                        $TUpdate->area=$request->input("area");
                        $TUpdate->salary=$request->input("salary");
                        $TUpdate->limited=$request->input("limited");
                        $TUpdate->description=$request->input("description");

                        $TUpdate->content=$request->input("content");
                        
                        $TUpdate->status=$request->input("status",1);

                    
                        $TUpdate->save();
                        $request->session()->flash("success"," Cập nhật thành công ");
                        return redirect()->back();
                    }
                
                 }
              

                $this->View['data']=$TUpdate;
         
        return view("admin.general.recuitment.edit",$this->View);   
        
    }
}
