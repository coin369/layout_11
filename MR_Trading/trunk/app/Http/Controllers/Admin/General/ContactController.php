<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use Validator;
use Mail;
use App;

class ContactController extends AppController
{
    protected $View=[];
    
    public function add(Request $reqeust)
    {
        
    }
    public function index(Request $request){

        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }

        $this->View['search']=$search;
        $data_list=App\Models\Contact::where("name","LIKE","%{$search}%")
                                ->Orwhere("phone","LIKE","%{$search}%")
                                ->Orwhere("email","LIKE","%{$search}%")
                                ->orderBy("id","DESC")
                                ->paginate(20);
        $this->View['data_list']=$data_list;
        return view("admin.general.contact.list",$this->View);


    }
    public function edit($id,Request $request){
    
            $data=[];
            $get_contact=App\Models\Contact::find($id);
           
               if($request->isMethod("post")){
                    $validator=Validator::make($request->all(),[
                        "subject_mail"=>"required"

                    ],[
                        "subject_mail.required"=>"Vui lòng nhập tiêu đề"
                    ]);
                    if($validator->fails()){
                        return redirect("/admin/contact/edit?id=".$id)->withErrors($validator)->withInput();
                    }else{
                        $get_contact->content_mail=$request->input("content_mail");
                        $get_contact->subject_mail=$request->input("subject_mail");
                        $get_contact->save();
                        Mail::send("email.contact",['content_mail'=>$get_contact->content_mail],function($s) use ($get_contact,$id,$request){
                            $s->to($get_contact->email,$get_contact->name)->subject($get_contact->subject_mail);
                            $request->session()->flash("success"," Gửi mail thành công.");
                            return redirect("/admin/contact/edit?id=".$id);
                        });

                        
                    }
               } 

              $data['name']=$get_contact['name'];
              $data['email']=$get_contact['email'];
              $data['id']=$get_contact['id'];
              $data['subject_mail']=$get_contact['subject_mail'];
              $data['content_mail']=(empty($get_contact['content_mail'])? "  Dear ".$get_contact['name']: $get_contact['content_mail']);

             $this->View['data']=$data;
             return view("admin.general.contact.edit",$this->View);
       
    }
    public function remove(Request $request)
    {
        
        
            if($id=$request->input("id")){
                App\Models\Contact::find($id)->delete();
                echo 'destroy success';exit;
            }
       
        echo 'ok';exit;

    }
}
