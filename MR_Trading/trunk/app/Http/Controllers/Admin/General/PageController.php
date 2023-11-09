<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App;
use Validator;
class PageController extends AppController
{
   protected $View=[];
  
    public function add(Request $request){
        $this->View['data']=[];
        if($request->isMethod("post")){
            $Validator=Validator::make($request->all(),[
                    "name"=>"required|unique:ca_page",
                     "contents"=>"required"
            ]);
            if($Validator->fails()){
                return redirect("/admin/page/add")->withErrors($Validator)->withInput();
            }else{
                $TNew=new App\Models\Page();
                $TNew->name=$request->input("name");
                $TNew->alias=App\MrData::toAlias2($request->input("name"));
                $TNew->content=$request->input("contents");
                $TNew->status='2';
                $TNew->save();

                $TNew->alias=App\MrData::toAlias2(date("Y-m-d")."-". $TNew->id);
                $TNew->save();
                $request->session()->flash("success","Successfully");
                return redirect()->back();
            }
        }

        return view("admin.general.page.add",$this->View);
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=App\Models\Page::where("name","LIKE","%{$search}%")->paginate(20);
        return view("admin.general.page.list",$this->View);
    }
    public function edit($id,Request $request){
        $data=[];

       
            $get_page=App\Models\Page::find($id);
            if($request->isMethod("post")){
                $validator=Validator::make($request->all(),[
                    "name"=>"required|unique:ca_page,name,{$id},id",
                    "contents"=>"required"
                ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }else{
                    $get_page->name=$request->input("name");
                   
                    $get_page->content=$request->input("contents");
                    $get_page->save();

                    


                    $request->session()->flash("success","Successfully");
                    return redirect()->back();
                }
           }

            $data=$get_page->toArray();
            $this->View['data']=$data;

            return view("admin.general.page.edit",$this->View);
       
    }
    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $remove=App\Models\Page::find($id);
                $remove->delete();
                echo 'destroy success';exit;
            }
        }

    }
}
