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
                    "name"=>"required|unique:ca_page"
            ]);
            if($Validator->fails()){
                return redirect("/admin/page/add")->withErrors($Validator)->withInput();
            }else{
                $TNew=new App\Model\Page();
                $TNew->name=$request->input("name");
                $TNew->alias=App\MrData::toAlias2($request->input("name"));
                $TNew->content=$request->input("contents");
                $TNew->status='2';
                $TNew->save();
                $request->session()->flash("success","Thêm mới thành công.");
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
        $this->View['data_list']=App\Model\Page::where("name","LIKE","%{$search}%")->paginate(20);
        return view("admin.general.page.list",$this->View);
    }
    public function edit($id,Request $request){
        $data=[];

       
            $get_page=App\Model\Page::find($id);
            if($request->isMethod("post")){
                $validator=Validator::make($request->all(),[
                    "name"=>"required|unique:ca_page,name,{$id},id"
                ],[
                    "name.required"=>"Vui lòng nhập tên trang",
                    "name.unique"=>" Tên trang đã tồn tại "
                ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }else{
                    $get_page->name=$request->input("name");
                    $get_page->alias=App\MrData::toAlias2($get_page->name);
                    $get_page->content=$request->input("contents");
                    $get_page->save();
                    $request->session()->flash("success"," Cập nhật trang thành công. ");
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
                $remove=App\Model\Page::find($id);
                $remove->delete();
                echo 'destroy success';exit;
            }
        }

    }
}
